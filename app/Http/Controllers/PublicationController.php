<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Lot;   //pour utiliser le modele de lot,,
use App\Models\Document;
use App\Models\Admin;


class PublicationController extends Controller
{ public function store(Request $request)
    {

        
        // Validation des données
        $request->validate([
            'type' => 'required',
            'num_offre' => 'required',
            'titre' => 'required',
            'etat' => 'required',
            'wilaya' => 'required',
            'date_publication' => 'required|date',
            'date_limite' => 'required|date',
            'date_prolongation' => 'nullable|date',
            'description' => 'nullable|string',
             
            'document_offre' => 'nullable|file|mimes:pdf',
            'document_prolongation' => 'nullable|file|mimes:pdf',
            'document_annulation' => 'nullable|file|mimes:pdf',
            // Ajoutez d'autres règles de validation selon vos besoins
        ]);

        $user = Auth::user()->load('admin');
        $secteur_id = $user->admin->secteur_id;

        // Création d'une nouvelle publication
        $publication = new Publication();
        $publication->type = $request->type;
        $publication->numero = $request->num_offre;
        $publication->titre = $request->titre;
        $publication->etat = $request->etat;
        $publication->wilaya = $request->wilaya;
        $publication->date_publication = $request->date_publication;
        $publication->date_limite = $request->date_limite;
        $publication->date_prolongation = $request->date_prolongation;
        $publication->description = $request->description;
        $publication->secteur_id = $secteur_id; // Utilisation de l'ID du secteur récupéré

        $publication->save();
        
        // Créer les lots si le formulaire indique qu'il y a des lots
       
        if ($request->filled('description_lot')) {
            foreach ($request->input('description_lot') as $description) {
                $lot = new Lot();
                $lot->description = $description;
                $lot->publication_id = $publication->id;
                $lot->save();
            }
        }

       
        

        // Création des documents
        foreach ($request->allFiles() as $fieldName => $file) {
            $documentType = str_replace('document_', '', $fieldName);
            $this->saveDocument($file, $documentType, $publication);
        }
        
        
        
        // Redirection vers une page appropriée après l'enregistrement
        return redirect()->route('admin.home')->with('success', 'Publication ajoutée avec succès!');
        
    }
   


    private function saveDocument($file, $type, $publication)
    {
        $document = new Document();
        $document->publication_id = $publication->id;
        $document->type = $type;
        $document->path = $file->store('documents');
        $document->save();
    }

    public function index()
    {
        
        $user = Auth::user();  //pour récupérer l'utilisateur actuellement connecté
        $secteur_id = $user->admin->secteur_id;  //récupérer l'objet associé de l'administrateur
        $publications = Publication::where('secteur_id', $secteur_id)->get();   //une requête qui récupère toutes les publications associées au secteur de l'utilisateur connecté
        
        return view('admin.publications', compact('publications'));  // La fonction compact() est utilisée pour passer les données à la vue
    }

    
}
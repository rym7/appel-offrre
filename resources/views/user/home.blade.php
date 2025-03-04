<!DOCTYPE html>
<x-app-layout></x-app-layout>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appels d'offres et Avis de Consultation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        
        body {
            background-color: #f8f9fa;
        }
        .tender-list {
            margin-top: 2rem;
        }
        .tender-item {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .tender-item .tender-info {
            flex: 1;
        }
        .tender-item .tender-actions {
            display: flex;
            gap: 0.5rem;
        }
        .tender-item .tender-actions button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .tender-item .tender-actions button:hover {
            background: #0056b3;
        }
        
    </style>
</head>
<body>

<div class="container">

<div class="input-group mt-5 mb-3">
        <input type="text" class="form-control" placeholder="Rechercher..." aria-label="Rechercher" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Rechercher</button>
        </div>
    </div>
    <div class="tender-list">
        <div class="tender-item">
            <div class="tender-info">
                <h3>Appel d'offre</h3>
                <p>Voici un exemple</p>
                <p>Date de publication: 15 mai 2024</p>
                <p>État de publication: valide</p>
            </div>
            <div class="tender-actions">
                <button class="btn btn-primary">Voir</button>
                <button class="btn btn-secondary toggle-favorite">Favoris</button>
            </div>
        </div>
        <div class="tender-item">
            <div class="tender-info">
                <h3>Avis de consultation</h3>
                <p>Voici un exemple</p>
                <p>Date de publication: 15 mai 2024</p>
                <p>État de publication: Valide</p>
            </div>
            <div class="tender-actions">
                <button class="btn btn-primary">Voir</button>
                <button class="btn btn-secondary toggle-favorite">Favoris</button>
            </div>
        </div>
        <!-- Ajoutez plus d'appels d'offres ici -->
    </div>
</div>

<script>
    document.querySelectorAll('.toggle-favorite').forEach(button => {
        button.addEventListener('click', function() {
            button.textContent = button.textContent === 'Favoris' ? 'Enlever des Favoris' : 'Favoris';
            button.classList.toggle('btn-secondary');
            button.classList.toggle('btn-success');
        });
    });
</script>

</body>
</html>

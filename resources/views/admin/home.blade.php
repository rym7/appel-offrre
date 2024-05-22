
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sidebar Menu</title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'><link rel="stylesheet" href="./style.css">


<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

:root {
  /* ===== Colors ===== */
  --body-color: #e4e9f7;
  --sidebar-color: #fff;
  --primary-color: #1e90ff;
  --primary-color-light: #f6f5ff;
  --toggle-color: #ddd;
  --text-color: #707070;

  /* ====== Transition ====== */
  --tran-03: all 0.2s ease;
  --tran-03: all 0.3s ease;
  --tran-04: all 0.3s ease;
  --tran-05: all 0.3s ease;
}

body {
  min-height: 100vh;
  background-color: var(--body-color);
  transition: var(--tran-05);
}

::selection {
  background-color: var(--primary-color);
  color: #fff;
}

body.dark {
  --body-color: #18191a;
  --sidebar-color: #242526;
  --primary-color: #3a3b3c;
  --primary-color-light: #3a3b3c;
  --toggle-color: #fff;
  --text-color: #ccc;
}

/* ===== Sidebar ===== */
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 250px;
  padding: 10px 14px;
  background: var(--sidebar-color);
  transition: var(--tran-05);
  z-index: 100;
}
.sidebar.close {
  width: 88px;
}

/* ===== Reusable code - Here ===== */
.sidebar li {
  height: 50px;
  list-style: none;
  display: flex;
  align-items: center;
  margin-top: 10px;
}

.sidebar header .image,
.sidebar .icon {
  min-width: 60px;
  border-radius: 6px;
}

.sidebar .icon {
  min-width: 60px;
  border-radius: 6px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
}

.sidebar .text,
.sidebar .icon {
  color: var(--text-color);
  transition: var(--tran-03);
}

.sidebar .text {
  font-size: 17px;
  font-weight: 500;
  white-space: nowrap;
  opacity: 1;
}
.sidebar.close .text {
  opacity: 0;
}
/* =========================== */

.sidebar header {
  position: relative;
}

.sidebar header .image-text {
  display: flex;
  align-items: center;
}
.sidebar header .logo-text {
  display: flex;
  flex-direction: column;
}
header .image-text .name {
  margin-top: 2px;
  font-size: 18px;
  font-weight: 600;
}

header .image-text .profession {
  font-size: 16px;
  margin-top: -2px;
  display: block;
}

.sidebar header .image {
  display: flex;
  align-items: center;
  justify-content: center;
}

.sidebar header .image img {
  width: 40px;
  border-radius: 6px;
}

.sidebar header .toggle {
  position: absolute;
  top: 50%;
  right: -25px;
  transform: translateY(-50%) rotate(180deg);
  height: 25px;
  width: 25px;
  background-color: var(--primary-color);
  color: var(--sidebar-color);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  cursor: pointer;
  transition: var(--tran-05);
}

body.dark .sidebar header .toggle {
  color: var(--text-color);
}

.sidebar.close .toggle {
  transform: translateY(-50%) rotate(0deg);
}

.sidebar .menu {
  margin-top: 40px;
}

.sidebar li.search-box {
  border-radius: 6px;
  background-color: var(--primary-color-light);
  cursor: pointer;
  transition: var(--tran-05);
}

.sidebar li.search-box input {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  background-color: var(--primary-color-light);
  color: var(--text-color);
  border-radius: 6px;
  font-size: 17px;
  font-weight: 500;
  transition: var(--tran-05);
}
.sidebar li a {
  list-style: none;
  height: 100%;
  background-color: transparent;
  display: flex;
  align-items: center;
  height: 100%;
  width: 100%;
  border-radius: 6px;
  text-decoration: none;
  transition: var(--tran-03);
}

.sidebar li a:hover {
  background-color: var(--primary-color);
}
.sidebar li a:hover .icon,
.sidebar li a:hover .text {
  color: var(--sidebar-color);
}
body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text {
  color: var(--text-color);
}

.sidebar .menu-bar {
  height: calc(100% - 55px);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow-y: scroll;
}
.menu-bar::-webkit-scrollbar {
  display: none;
}
.sidebar .menu-bar .mode {
  border-radius: 6px;
  background-color: var(--primary-color-light);
  position: relative;
  transition: var(--tran-05);
}

.menu-bar .mode .sun-moon {
  height: 50px;
  width: 60px;
}

.mode .sun-moon i {
  position: absolute;
}
.mode .sun-moon i.sun {
  opacity: 0;
}
body.dark .mode .sun-moon i.sun {
  opacity: 1;
}
body.dark .mode .sun-moon i.moon {
  opacity: 0;
}

.menu-bar .bottom-content .toggle-switch {
  position: absolute;
  right: 0;
  height: 100%;
  min-width: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 6px;
  cursor: pointer;
}
.toggle-switch .switch {
  position: relative;
  height: 22px;
  width: 40px;
  border-radius: 25px;
  background-color: var(--toggle-color);
  transition: var(--tran-05);
}

.switch::before {
  content: "";
  position: absolute;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  background-color: var(--sidebar-color);
  transition: var(--tran-04);
}

body.dark .switch::before {
  left: 20px;
}

.home {
  position: absolute;
  top: 0;
  top: 0;
  left: 250px;
  height: 100vh;
  width: calc(100% - 250px);
  background-color: var(--body-color);
  transition: var(--tran-05);
}
.home .text {
  font-size: 30px;
  font-weight: 500;
  color: var(--text-color);
  padding: 12px 60px;
}

.sidebar.close ~ .home {
  left: 78px;
  height: 100vh;
  width: calc(100% - 78px);
}
body.dark .home .text {
  color: var(--text-color);
}
/* ida habina ndiro une couleur pour la barre active
 .nav-link.active {
  background-color: #ccc; 
} */


  </style>


</head>
<body>
<!-- partial:index.partial.html -->


 

<nav class="sidebar close">
  <header>
    <div class="image-text">
      <span class="image">
        <img src="https://drive.google.com/uc?export=view&id=1ETZYgPpWbbBtpJnhi42_IR3vOwSOpR4z" alt="">
      </span>

      <div class="text logo-text">
        <span class="name">Bienvenue </span>
        <span class="profession"></span>
      </div>
    </div>

    <i class='bx bx-chevron-right toggle'></i>
  </header>
   

  
  <div class="menu-bar">
    <div class="menu">

      <li class="search-box">
        <i class='bx bx-search icon'></i>
        <input type="text" placeholder="Search...">
      </li>

      <ul class="menu-links">
        <li class="nav-link nav-link-publications">
        <a href="{{ route('admin.publications') }}">
            <i class='bx bx-home-alt icon'></i>
            <span class="text nav-text">Accueil</span>
          </a>
        </li>

        

      

        <li class="nav-link nav-link-publications ">
        <a href="#" id="publications-link">
          <i class='bx bx-plus-circle icon '></i>
          <span class="text nav-text">Ajouter des Publications</span>
        </a>
      </li>

      <li class="nav-link nav-link-cancel">
  <a href="#">
    <i class='bx bx-x-circle icon'></i>
    <span class="text nav-text">Annuler Publication</span>
  </a>
</li>
<li class="nav-link nav-link-edit">
  <a href="#">
    <i class='bx bx-edit-alt icon'></i>
    <span class="text nav-text">Modifier Publication</span>
  </a>
</li>

<li class="nav-link">
          <a href="#">
            <i class='bx bx-bell icon'></i>
            <span class="text nav-text">Notifications</span>
          </a>
        </li>


      </ul>
    </div>

    <div class="bottom-content">
      <li class="">
        <a href="#">
          <i class='bx bx-log-out icon'></i>
          <span class="text nav-text">Logout</span>
        </a>
      </li>

      <li class="mode">
        <div class="sun-moon">
          <i class='bx bx-moon icon moon'></i>
          <i class='bx bx-sun icon sun'></i>
        </div>
        <span class="mode-text text">Dark mode</span>

        <div class="toggle-switch">
          <span class="switch"></span>
        </div>
      </li>

    </div>
  </div>

</nav>

<section class="home">
<x-app-layout></x-app-layout>

<style>
        /* Styles CSS pour rendre le formulaire plus esthétique */
        body {
            font-family: Arial, sans-serif;
            padding: 0; /* Supprimer le padding par défaut du navigateur */
            margin: 0; /* Supprimer la marge par défaut du navigateur */
        }

        form {
            background-color: #fff;
            border: none;
            border-radius: 5px;
            padding: 16px;
            margin: 0 auto;
            width: 100%; /* Faire en sorte que le formulaire occupe toute la largeur de l'écran */
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 13px;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        textarea,
        select,
        input[type="file"] {
            width: 100%; /* Ajuster la largeur des champs pour une disposition à deux colonnes */
            font-size: 15px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
            margin-top: 5px; /* Espacement entre les champs */
        }

        select {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 8px;
            appearance: none; /* Supprimer l'apparence par défaut du select */
            cursor: pointer; /* Afficher un curseur pointeur */
        }

        select:focus {
            outline: none; /* Supprimer le contour bleu par défaut */
            border: 1px solid #2196f3; /* Changer la couleur de la bordure lors de la mise au point */
        }

        select::-ms-expand { /* Pour Internet Explorer et Edge */
            appearance: none;
            background-image: url('data:image/svg+xml;base64,CB0TLiB4PTU3LjggYWN0aW9ucz0iU2VjdHJlYXM6IG5vbmU7IiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Q29udGVudD0iMCIgLz4=');
            background-repeat: no-repeat;
            background-position: right center;
            background-size: 10px 10px;
            padding-right: 30px; /* Ajuster la largeur du bouton fléché */
        }

        select::-ms-value { /* Pour Internet Explorer et Edge */
            color: #333; /* Changer la couleur du texte */
        }

        button {
            margin-top: 20px;
            padding: 10px 16px;
            background-color: #2196f3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
             /* Faire en sorte que le bouton occupe toute la largeur du formulaire  width: 100%; */
        }

        button:hover {
            background-color: #1779ba;
        }

        /* Style pour les champs de lot */
        .lot-item {
            margin-top: 20px;
        }

        .lot-item label {
            display: block;
            margin-bottom: 5px;
            font-size: 13px;
            color: #333;
        }

        .lot-item input[type="text"] {
            width: 100%;
            font-size: 15px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        /* Conteneur flex pour les champs "Type" et "Numéro d'Offre" */
        .flex-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px; /* Espacement en bas du conteneur */
        }

        .flex-item {
            width: 30%; /* Largeur des champs dans le conteneur flex */
        }

        /* Conteneur flex pour les champs de dates */
        .date-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px; /* Espacement en bas du conteneur */
        }

        .date-container label {
            display: block;
            margin-bottom: 5px;
            font-size: 13px;
            color: #333;
        }

        .date-container input[type="date"] {
            width: 30.33%; /* Largeur des champs dans le conteneur flex */
        }

        /* Conteneur flex pour les champs de documents */
        .document-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px; /* Espacement en bas du conteneur */
        }

        .document-container label {
            display: block;
            margin-bottom: 5px;
            font-size: 13px;
            color: #333;
        }

        .document-container input[type="file"] {
            width: calc(33.33% - 10px); /* Largeur des champs dans le conteneur flex */
        }
        
        form {
        background-color: #f4f4f4; /* Couleur de fond grise */
        /* Autres propriétés CSS restent inchangées */
    }

    </style>
</head>
<body>

<div id="Accueil" style="display: none;">
<h1>voila</h1>
</div>
@if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
          @endif

          <ul class="alert-danger">
              @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
          </ul>
<form enctype="multipart/form-data" method="POST">
    @csrf
    <div id="publication-form" style="display: none;">
    <!-- Conteneur flex pour les champs "Type" et "Numéro d'Offre" -->
    <div class="flex-container">
        <div class="flex-item">
            <label>Choisir le type de publication:</label>
            <select name="type">
                <option value="appel_offre">Appel d'Offre</option>
                <option value="avis_consultation">Avis de Consultation</option>
            </select>
        </div>
        <div class="flex-item">
            <label for="num_offre">Numéro d'Offre:</label>
            <input type="text" name="num_offre" id="num_offre">
        </div>

        <div class="flex-item">
           
            <label for="etat">État:</label>
    <input type="text" name="etat" id="etat">
        </div>
    </div>

    <label for="titre">Titre:</label>
    <input type="text" name="titre" id="titre">

    <label for="wilaya">Wilaya:</label>
    <select name="wilaya" id="wilaya">
        <option value="" selected disabled>Choisissez une wilaya</option>
        <option value="1">Adrar</option>
        <option value="2">Chlef</option>
        <option value="Laghouat">Laghouat</option>
        <option value="Oum El Bouaghi">Oum El Bouaghi</option>
        <option value="Batna">Batna</option>
        <option value="Béjaïa">Béjaïa</option>
        <option value="Biskra">Biskra</option>
    </select>

    <label for="description">Description:</label>
    <textarea name="description" id="description" cols="30" rows="2"></textarea>



    <!-- Conteneur flex pour les champs de dates -->
    <div class="date-container">
        <label for="date_publication">Date de Publication:</label>
        <input type="date" name="date_publication" id="date_publication">

        <label for="date_limite">Date limite:</label>
        <input type="date" name="date_limite" id="date_limite">

        <label for="date_prolongation">Date de Prolongation:</label>
        <input type="date" name="date_prolongation" id="date_prolongation">
    </div>

    
    <button id="ajouter_lot" type="button">Ajouter un lot</button>

    <div id="lots">
        <!-- Champ pour le Lot 1 (généré dynamiquement) -->
    </div>

    <!-- Conteneur flex pour les champs de documents -->
    <div class="document-container">
        <label for="document_offre">Document de l'offre:</label>
        <input type="file" name="document_offre" id="document_offre">

        <label for="document_prolongation">Document de Prolongation:</label>
        <input type="file" name="document_prolongation" id="document_prolongation">

        <label for="document_annulation">Document d'Annulation:</label>
        <input type="file" name="document_annulation" id="document_annulation">
    </div>

    <!-- Bouton de soumission -->
    <button type="submit">Ajouter</button>
    </div>
</form>
<script>
    // JavaScript pour afficher ou masquer les champs de lot en fonction de la sélection
    document.getElementById('ajouter_lot').addEventListener('click', function() {
        var lotsDiv = document.getElementById('lots');
        var lotItem = document.createElement('div');
        lotItem.classList.add('lot-item');

        var label = document.createElement('label');
        label.textContent = 'Description du Lot:';
        lotItem.appendChild(label);

        var description = document.createElement('input');
        description.type = 'text';
        description.name = 'description_lot[]'; // Utilisation de crochets pour permettre plusieurs valeurs
        description.placeholder = 'Description du Lot';
        lotItem.appendChild(description);

        lotsDiv.appendChild(lotItem);
    });
</script>
  
</section>
<!-- partial -->


</body>
</html>

<script>
 
 const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});

modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light mode";
  } else {
    modeText.innerText = "Dark mode";
  }
});

document.getElementById('publications-link').addEventListener('click', function() {
  // Afficher le formulaire
  document.getElementById('publication-form').style.display = 'block';
});

document.getElementById('accueil-link').addEventListener('click', function() {
  // Afficher l'accueil
  document.getElementById('Accueil').style.display = 'block';
});
       //lorsque on clique sur "Ajouter des Publications" dans la barre latérale, le formulaire sera affiché
   
       const navLinks = document.querySelectorAll('.nav-link');

       

     

// Ajoutez un gestionnaire d'événements à chaque lien
navLinks.forEach(link => {
  link.addEventListener('click', function() {
    // Supprimez la classe active de tous les liens
    navLinks.forEach(link => link.classList.remove('active'));
    // Ajoutez la classe active à l'élément cliqué
    this.classList.add('active');
  });
});
   
   
   
   </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Publications</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        :root {
            /* ===== Colors ===== */
            --body-color: #f4f4f4;
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
            padding: 20px;
            padding-left: 270px; /* Adjust to fit sidebar width */
        }

        body.dark {
            --body-color: #18191a;
            --sidebar-color: #242526;
            --primary-color: #3a3b3c;
            --primary-color-light: #3a3b3c;
            --toggle-color: #fff;
            --text-color: #ccc;
        }

        ::selection {
            background-color: var(--primary-color);
            color: #fff;
        }

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

        .section-title {
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
            color: var(--primary-color); /* Couleur primaire */
            padding: 10px 20px; /* Ajout de rembourrage autour du titre */
            border: 2px solid var(--primary-color); /* Ajout d'une bordure */
            border-radius: 10px; /* Ajout d'arrondis aux coins */
            background-color: #f8f8f8; /* Couleur de fond */
        }

        .publication-list {
            display: flex;
            flex-wrap: wrap; /* Permet à la liste de s'enrouler sur plusieurs lignes */
            justify-content: center; /* Centre les publications horizontalement */
            gap: 20px; /* Espace entre les publications */
        }

        .publication-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: calc(33.333% - 20px); /* Largeur de chaque publication */
            box-sizing: border-box;
            padding: 20px;
        }

        .publication-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .publication-item h3 {
            margin-top: 0;
            font-size: 1.5em;
            color: #333;
        }

        .publication-item p {
            color: #666;
        }

        .publication-item strong {
            color: #333;
        }

        .dark .publication-item {
            background-color: #333;
            color: #fff;
        }

        .dark .publication-item h3 {
            color: #fff;
        }

        .dark .publication-item p {
            color: #ccc;
        }
        
        
    </style>
</head>
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
<x-app-layout></x-app-layout>
<h2 class="section-title">Les publications créées par votre secteur</h2>
    <div class="publication-list">
   
        <!-- Utilisez cette section pour intégrer vos données de publication dynamiques -->
        @foreach ($publications as $publication)
            <div class="publication-item">
                <h3>{{ $publication->titre }}</h3>
                <p>{{ $publication->description }}</p>
                <p><strong>Type:</strong> {{ $publication->type }}</p>
                <p><strong>Date de Publication:</strong> {{ $publication->date_publication }}</p>
                <p><strong>État:</strong> {{ $publication->etat }}</p>
            </div>
        @endforeach
    </div>

    <script>
        const body = document.querySelector('body');
        const sidebar = document.querySelector('nav.sidebar');
        const toggle = sidebar.querySelector('.toggle');
        const modeSwitch = document.querySelector('.toggle-switch');
        const modeText = document.querySelector('.mode-text');

        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('close');
        });

        modeSwitch.addEventListener('click', () => {
            body.classList.toggle('dark');

            if (body.classList.contains('dark')) {
                modeText.innerText = 'Mode Clair';
            } else {
                modeText.innerText = 'Mode Sombre';
            }
        });
    </script>
</body>
</html>

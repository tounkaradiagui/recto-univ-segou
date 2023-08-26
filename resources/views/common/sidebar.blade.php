<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">G - <sup>Etudiant</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Etudiants
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#étudiants" aria-expanded="true" aria-controls="étudiants">
            <i class="fas fa-users"></i>
            <span>Gérer des étudiants</span>
        </a>
        <div id="étudiants" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Etudiants:</h6>
                <!-- <a class="collapse-item" href="{{route('chart.etudiant')}}">Student</a> -->
                <!-- <a class="collapse-item" href="{{route('get.students')}}">Student</a> -->
                <!-- <a class="collapse-item" href="{{route('form.etudiant')}}">Formulaire</a> -->
                <a class="collapse-item" href="{{route('list-etudiants')}}">Bacheliers CENOU</a>
                <a class="collapse-item" href="{{route('list-inscrit')}}">Néo bacheliers inscris</a>
                <a class="collapse-item" href="{{ route('import-etudiants') }}">Importer</a>
                <a class="collapse-item" href="{{ route('get.students-archives') }}">Anciens étudiants</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Facultés
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#établissements" aria-expanded="true" aria-controls="établissements">
            <i class="fas fa-list"></i>
            <span>Bacheliers par FAC</span>
        </a>
        <div id="établissements" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Facultés :</h6>
                <a class="collapse-item" href="{{route('bacheliers.fasso')}}">FASSO</a>
                <a class="collapse-item" href="{{route('bacheliers.fages')}}">FAGES</a>
                <a class="collapse-item" href="{{route('bacheliers.iufp')}}">IUFP</a>
                <a class="collapse-item" href="{{route('bacheliers.fama')}}">FAMA</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Utilisateurs
    </div>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#utilisateurs" aria-expanded="true" aria-controls="utilisateurs">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Gérer utilisateurs</span>
        </a>
        <div id="utilisateurs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Utilisateurs:</h6>
               <a class="collapse-item" href="{{route('users.index')}}">Voir la liste</a>
                <a class="collapse-item" href="{{route('users.create')}}">Ajouter un nouvel</a>
                <a class="collapse-item" href="{{route('import')}}">Importer</a>
                
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> -->

   
    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> -->

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('create-etudiants')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Inscription</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->
<?php
$current_route = $_SERVER['REQUEST_URI'];
?>

<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">

    <a href="/view/home.php" class="brand-link">
        <img src="/view/assets/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light h6">Aqua saver</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Start package Accueil -->
                <li class="nav-item">
                    <a href="/view/home.php"
                        class="nav-link <?php echo ($current_route == '/view/home.php') ? 'active' : ''; ?>">
                        <i class="fa-solid fa-house mr-2"></i>
                        <p class="">
                            Accueil
                        </p>
                    </a>
                </li>
                <!-- end package Accueil -->


                <!-- <li class="nav-item">
                    <a href="/view/personnels/index.php"
                        class="nav-link <?php echo (strpos($current_route, 'personnels') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-users mr-2"></i>
                        <p class="">
                            Personnels
                        </p>
                    </a>
                </li> -->

            </ul>
        </nav>
    </div>
</aside>
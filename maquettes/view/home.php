<!DOCTYPE html>
<html lang="fr">

<?php include_once "./layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "./layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "./layouts/aside.php" ?>

        <div class="content-wrapper pt-4">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Statistiques</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>10%</h3>
                                    <p>Current Water Consumption</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="/view/personnels/index.php" class="small-box-footer">Plus d'informations <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>20%</h3>
                                    <p>nnnnn</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/view/personnels/index.php" class="small-box-footer">Plus d'informations <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>0.5%</h3>
                                    <p>nnnnnn</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="/view/conge/index.php" class="small-box-footer">Plus d'informations <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>3.5%</h3>
                                    <p>nnnn</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/view/absences/index.php" class="small-box-footer">Plus d'informations <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </section>
        </div>
    </div>
</body>

<!-- get script -->
<?php include_once "./layouts/script-link.php"; ?>

</html>
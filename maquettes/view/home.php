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
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <a href="./create.php" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                                    <i class="fas fa-plus"></i> Ajouter nombre le compteur
                                </a>
                            </div>

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
                    <!-- <div class="card card-success">
                            <div class="card-header">
                            <h3 class="card-title">Bar Chart</h3>
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                            </button>
                            </div>
                            </div>
                            <div class="card-body">
                                <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 580px;" width="725" height="312" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                    </div>
                    <div class="card card-primary">
                            <div class="card-header">
                            <h3 class="card-title">Area Chart</h3>
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                            </button>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 580px;" width="725" height="312" class="chartjs-render-monitor"></canvas>
                            </div>
                            </div>
                    </div> -->
                </div>
            </section>
        </div>
    </div>

    <div class="modal fade show" id="modal-default" style="display: none;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                    <label for="input-">Nombre le compteur</label>
                    <input type="text" class="form-control" id="input-" placeholder="Enter email">
                </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- get script -->
<?php include_once "./layouts/script-link.php"; ?>

</html>
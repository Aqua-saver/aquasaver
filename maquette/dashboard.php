<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "./layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "./layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "./layouts/aside.php" ?>


        <div class="content-wrapper" style="min-height: 1302.4px;">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Liste des personnels</h1>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <a href="./create.php" class="btn btn-info">
                                    <i class="fas fa-plus"></i> Nouveau personnel
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header col-md-12">
                                    <div class="d-flex justify-content-end">
                                        <div class=" p-0">
                                            <div class="input-group input-group-sm">
                                                <input type="text" name="table_search" class="form-control"
                                                    placeholder="Recherche">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Matricule</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Téléphone</th>
                                                <th>Fonction</th>
                                                <th>Établissement</th>
                                                <th class="text-center">Attestation</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>123456</td>
                                                <td>Madani</td>
                                                <td>Mohamed</td>
                                                <td>+2129034704</td>
                                                <td>directeur</td>
                                                <td>solicode</td>
                                                <td class="text-center"><a href="./attestation.php" class='btn btn-default btn-sm'><i class="fa-regular fa-file"></i></a></td>
                                                <td class="text-center">
                                                    <a href="./show.php" class='btn btn-default btn-sm'>
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>124356</td>
                                                <td>Madani</td>
                                                <td>Ali</td>
                                                <td>+212645690304</td>
                                                <td>directeur</td>
                                                <td>ntic</td>
                                                <td class="text-center"><a href="./attestation.php" class='btn btn-default btn-sm'><i class="fa-regular fa-file"></i></a></td>
                                                <td class="text-center">
                                                    <a href="./show.php" class='btn btn-default btn-sm'>
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1098456</td>
                                                <td>Alami</td>
                                                <td>Mohamed</td>
                                                <td>+2129567704</td>
                                                <td>directeur</td>
                                                <td>ibn marhal</td>
                                                <td class="text-center"><a href="./attestation.php" class='btn btn-default btn-sm'><i class="fa-regular fa-file"></i></a></td>
                                                <td class="text-center">
                                                    <a href="./show.php" class='btn btn-default btn-sm'>
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1098456</td>
                                                <td>Ali</td>
                                                <td>Ayman</td>
                                                <td>+2129567704</td>
                                                <td>directeur</td>
                                                <td>ibn marhal</td>
                                                <td class="text-center"><a href="./attestation.php" class='btn btn-default btn-sm'><i class="fa-regular fa-file"></i></a></td>
                                                <td class="text-center">
                                                    <a href="./show.php" class='btn btn-default btn-sm'>
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="./edit.php" class="btn btn-sm btn-default"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-between p-2">
                                    <div class="col-6 align-self-end">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fa-solid fa-file-arrow-down"></i>
                                            IMPORTER</button>
                                        <button type="button" data-toggle="modal" data-target="#exampleModalCenter"
                                            class="btn  btn-default btn-sm mt-0 mx-2">
                                            <i class="fa-solid fa-file-export"></i>
                                            EXPORTER</button>
                                    </div>
                                    <div class="col-6">
                                        <ul class="pagination  m-0 float-right">
                                            <li class="page-item"><a class="page-link text-secondary" href="#">«</a>
                                            </li>
                                            <li class="page-item"><a class="page-link text-secondary active"
                                                    href="#">1</a></li>
                                            <li class="page-item"><a class="page-link text-secondary" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link text-secondary" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link text-secondary" href="#">»</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Inclure le pied de page -->
        <?php include_once "./layouts/footer.php" ?>

    </div>

    <!-- Inclure le script -->
    <?php include_once "./layouts/script-link.php" ?>
</body>

</html>
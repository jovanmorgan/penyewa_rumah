<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include 'fitur/head.php'; ?>

<!-- nama halaman -->
<?php include 'fitur/nama_halaman.php'; ?>
<?php include 'fitur/nama_halaman_proses.php'; ?>

<body>

    <!-- loader -->
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- navbar -->
            <?php include 'fitur/navbar.php'; ?>

            <div class="pcoded-main-container md-float-material ">
                <div class="pcoded-wrapper">

                    <!-- sidebar -->
                    <?php include 'fitur/sidebar.php'; ?>

                    <div class="pcoded-content">

                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h3 class="m-b-10"><?= $page_title ?></h3>
                                            <p class="m-b-0">"Selamat datang di dashboard kami! Pantau semua aktivitas
                                                dan kelola layanan rental dengan mudah di satu tempat."</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="home"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a
                                                    href="<?= $page_title_proses ?>"><?= $page_title ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="container-fluid">
                                        <div class="page-body">
                                            <div class="row">
                                                <div class="container mt-4">
                                                    <!-- Material statustic card start -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="card mat-clr-stat-card text-white green">
                                                                <div class="card-block">
                                                                    <div class="row">
                                                                        <div class="col-3 text-center bg-c-green">
                                                                            <i class="fas fa-home fa-2x mt-4"></i>
                                                                        </div>
                                                                        <div class="col-9 cst-cont">
                                                                            <h5>25</h5>
                                                                            <p class="m-b-0">Kontrakan</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="card mat-clr-stat-card text-white blue">
                                                                <div class="card-block">
                                                                    <div class="row">
                                                                        <div class="col-3 text-center bg-c-blue">
                                                                            <i class="fas fa-users fa-2x mt-4"></i>
                                                                        </div>
                                                                        <div class="col-9 cst-cont">
                                                                            <h5>20</h5>
                                                                            <p class="m-b-0">User</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="card mat-clr-stat-card text-white red">
                                                                <div class="card-block">
                                                                    <div class="row">
                                                                        <div class="col-3 text-center bg-c-red">
                                                                            <i class="fas fa-user-tie fa-2x mt-4"></i>
                                                                        </div>
                                                                        <div class="col-9 cst-cont">
                                                                            <h5>25</h5>
                                                                            <p class="m-b-0">Pemilik</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="card mat-clr-stat-card text-white yellow">
                                                                <div class="card-block">
                                                                    <div class="row">
                                                                        <div class="col-3 text-center bg-c-yellow">
                                                                            <i
                                                                                class="fas fa-shopping-cart fa-2x mt-4"></i>
                                                                        </div>
                                                                        <div class="col-9 cst-cont">
                                                                            <h5>12</h5>
                                                                            <p class="m-b-0">Pesanan</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="card proj-progress-card">
                                                        <div class="row">
                                                            <div class="card-block">
                                                                <div class=" col-lg-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>Bar Chart</h5>
                                                                            <span>lorem ipsum dolor sit amet,
                                                                                consectetur adipisicing elit</span>
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <div id=""></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    const ctx = document.getElementById('myChart').getContext('2d');
                                                    const myChart = new Chart(ctx, {
                                                        type: 'bar',
                                                        data: {
                                                            labels: ['Kontrakan', 'User', 'Pemilik', 'Pesanan'],
                                                            datasets: [{
                                                                label: '# Kontrakan',

                                                                data: [4000, 700, 4000, 500],
                                                                backgroundColor: [
                                                                    'rgba(40, 167, 69, 0.2)', // green
                                                                    'rgba(0, 123, 255, 0.2)', // blue
                                                                    'rgba(220, 53, 69, 0.2)', // red
                                                                    'rgba(255, 193, 7, 0.2)' // yellow
                                                                ],
                                                                borderColor: [
                                                                    'rgba(40, 167, 69, 1)', // green
                                                                    'rgba(0, 123, 255, 1)', // blue
                                                                    'rgba(220, 53, 69, 1)', // red
                                                                    'rgba(255, 193, 7, 1)' // yellow
                                                                ],
                                                                borderWidth: 1
                                                            }]
                                                        },
                                                        options: {
                                                            scales: {
                                                                y: {
                                                                    beginAtZero: true
                                                                }
                                                            }
                                                        }
                                                    });
                                                </script>
                                                <div class="col-xl-4">
                                                    <div class="card proj-progress-card">
                                                        <div class="row">
                                                            <div class="card-block">
                                                                <div class=" col-lg-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>Bar Chart</h5>
                                                                            <span>lorem ipsum dolor sit amet,
                                                                                consectetur adipisicing elit</span>
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <div id=""></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Project statustic end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js "></script>
    <!-- Morris Chart js -->
    <script src="assets/js/raphael/raphael.min.js"></script>
    <script src="assets/js/morris.js/morris.js"></script>

    <script type="text/javascript" src="assets/js/script.js "></script>
    <!-- custum -->
    <script src="assets/pages/chart/morris/morris-custom-chart.js"></script>

</body>

</html>
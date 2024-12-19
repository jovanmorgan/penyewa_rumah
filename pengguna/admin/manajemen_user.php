<!DOCTYPE html>
<html lang="en">

<?php include 'fitur/head.php'; ?>

<!-- nama halaman -->
<?php include 'fitur/nama_halaman.php'; ?>
<?php include 'fitur/nama_halaman_proses.php'; ?>

<body>
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

            <div class="pcoded-main-container md-float-material">
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
                                            <h3 class="m-b-12">Manajemen User</h3>
                                            <p class="m-b-0">"Kelola pengguna dengan mudah. Tambahkan, edit, atau hapus
                                                data pengguna sesuai dengan kebutuhan Anda."</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="home"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Manajemen User</a>
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
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>User Kontrakan</h4>
                                                            <span>Pihak yang menyewa rumah kontrakan atau tempat tinggal
                                                                dari pemilik kontrakan</span>
                                                            <div class="card-header-right">
                                                                <ul class="list-unstyled card-option">
                                                                    <li><i class="fa fa fa-wrench open-card-option"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-window-maximize full-card"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                                    <li><i class="fa fa-trash close-card"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-block table-border-style">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Tanggal</th>
                                                                            <th>Nama</th>
                                                                            <th>Hp</th>
                                                                            <th>Nama Kontrakan</th>
                                                                            <th>Pemilik</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">01-10-2021</th>
                                                                            <td>
                                                                                <img src="img/people.png" />
                                                                                <p>Minci</p>
                                                                            </td>
                                                                            <td>08212768</td>
                                                                            <td>Kontrakan Putri</td>
                                                                            <td>Timus</td>
                                                                            <td><span
                                                                                    class="status completed">Completed</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">01-10-2021</th>
                                                                            <td>
                                                                                <img src="img/people.png" />
                                                                                <p>Jacob</p>
                                                                            </td>
                                                                            <td>08212768</td>
                                                                            <td>Kontrakan Putri</td>
                                                                            <td>Thornton</td>
                                                                            <td><span
                                                                                    class="status process">Completed</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">01-10-2021</th>
                                                                            <td>
                                                                                <img src="img/people.png" />
                                                                                <p>Larry</p>
                                                                            </td>
                                                                            <td>08212768</td>
                                                                            <td>the Bird</td>
                                                                            <td>@twitter</td>
                                                                            <td><span
                                                                                    class="status pending">Pending</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Project statustic end -->
                                                <div class="container mt-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Pemilik Kontrakan</h5>
                                                            <span>Pihak yang menyewa rumah kontrakan atau tempat tinggal
                                                                dari pemilik kontrakan</span>
                                                            <div class="card-header-right">
                                                                <ul class="list-unstyled card-option">
                                                                    <li><i class="fa fa fa-wrench open-card-option"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-window-maximize full-card"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                                    <li><i class="fa fa-trash close-card"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-block table-border-style">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Tanggal</th>
                                                                            <th>Nama</th>
                                                                            <th>Hp</th>
                                                                            <th>Nama Kontrakan</th>
                                                                            <th>Pemilik</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">01-10-2021</th>
                                                                            <td>
                                                                                <img src="img/people.png" />
                                                                                <p>Minci</p>
                                                                            </td>
                                                                            <td>08212768</td>
                                                                            <td>Kontrakan Putri</td>
                                                                            <td>Timus</td>
                                                                            <td><span
                                                                                    class="status completed">Completed</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">01-10-2021</th>
                                                                            <td>
                                                                                <img src="img/people.png" />
                                                                                <p>Jacob</p>
                                                                            </td>
                                                                            <td>08212768</td>
                                                                            <td>Kontrakan Putri</td>
                                                                            <td>Thornton</td>
                                                                            <td><span
                                                                                    class="status process">Completed</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">01-10-2021</th>
                                                                            <td>
                                                                                <img src="img/people.png" />
                                                                                <p>Larry</p>
                                                                            </td>
                                                                            <td>08212768</td>
                                                                            <td>the Bird</td>
                                                                            <td>@twitter</td>
                                                                            <td><span
                                                                                    class="status pending">Pending</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
<!DOCTYPE html>
<html lang="en">

<!-- head -->
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

            <div class="pcoded-main-container">
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
                                            <p class="m-b-0">"Lihat dan kelola semua properti kontrakan yang sudah
                                                terdaftar. Perbarui informasi atau atur status kontrakan dengan cepat."
                                            </p>
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
                                    <div class="page-body button-page">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h4>Data Kontrakan</h4>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i>
                                                                </li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <!-- button Default -->

                                                        <div class="card-block table-border-style mb-5">
                                                            <div class="table-responsive">
                                                                <td class="align-middle">
                                                                    <button class="btn btn-info btn-sm">Tambah
                                                                        <i class="fas fa-plus"></i>
                                                                    </button>
                                                                    <button class="btn btn-warning btn-sm">Ekspor
                                                                        <i class="fas fa-file-export"></i>
                                                                    </button>
                                                                </td>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Tanggal</th>
                                                                            <th>Aksi</th>
                                                                            <th>Nama Kontrakan</th>
                                                                            <th>Harga</th>
                                                                            <th>No Hp</th>
                                                                            <th>foto </th>
                                                                            <th>status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <th scope="row">01-10-2021</th>
                                                                            <td class="align-middle">
                                                                                <button type="button"
                                                                                    class="btn-info  waves-effect waves-light"
                                                                                    data-toggle="tooltip"
                                                                                    title="Detail">
                                                                                    <i class="fas fa-info-circle"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn-danger waves-effect waves-light"
                                                                                    data-toggle="tooltip" title="Hapus">
                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn-success waves-effect waves-light"
                                                                                    data-toggle="tooltip"
                                                                                    title="Terima">
                                                                                    <i class="fas fa-check-circle"></i>
                                                                                </button>

                                                                            </td>
                                                                            <td>Kontrakan Putri</td>
                                                                            <td>Rp.500.000</td>
                                                                            <td>08212768</td>
                                                                            <td>
                                                                                <img src="img/people.png" />
                                                                                <p>Minci</p>
                                                                            </td>
                                                                            <td><span class="status completed"> Belum
                                                                                    Terverifikasi</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <th scope="row">01-10-2021</th>
                                                                            <td class="align-middle">
                                                                                <button type="button"
                                                                                    class="btn-info  waves-effect waves-light"
                                                                                    data-toggle="tooltip"
                                                                                    title="Detail">
                                                                                    <i class="fas fa-info-circle"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn-danger waves-effect waves-light"
                                                                                    data-toggle="tooltip" title="Hapus">
                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn-success waves-effect waves-light"
                                                                                    data-toggle="tooltip"
                                                                                    title="Terima">
                                                                                    <i class="fas fa-check-circle"></i>
                                                                                </button>

                                                                            </td>
                                                                            <td>Kontrakan Putri</td>
                                                                            <td>Rp.500.000</td>
                                                                            <td>08212768</td>
                                                                            <td>
                                                                                <img src="img/people.png" />
                                                                                <p>Minci</p>
                                                                            </td>
                                                                            <td><span class="status completed"> Belum
                                                                                    Terverifikasi</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <th scope="row">01-10-2021</th>
                                                                            <td class="align-middle">
                                                                                <button type="button"
                                                                                    class="btn-info  waves-effect waves-light"
                                                                                    data-toggle="tooltip"
                                                                                    title="Detail">
                                                                                    <i class="fas fa-info-circle"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn-danger waves-effect waves-light"
                                                                                    data-toggle="tooltip" title="Hapus">
                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn-success waves-effect waves-light"
                                                                                    data-toggle="tooltip"
                                                                                    title="Terima">
                                                                                    <i class="fas fa-check-circle"></i>
                                                                                </button>

                                                                            </td>
                                                                            <td>Kontrakan Putri</td>
                                                                            <td>Rp.500.000</td>
                                                                            <td>08212768</td>
                                                                            <td>
                                                                                <img src="img/people.png" />
                                                                                <p>Minci</p>
                                                                            </td>
                                                                            <td><span class="status completed">Belum
                                                                                    Terverifikasi</span></td>
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
                            </div>
                            <!-- Warning Section Starts -->

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Custom js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom js -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
                content: function() {
                    return $('#primary-popover-content').html();
                }
            });
        });
    </script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
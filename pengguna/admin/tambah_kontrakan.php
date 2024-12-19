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
                                            <h3 class="m-b-10"> Tambah Kontrakan</h3>
                                            <p class="m-b-0">"Tambahkan properti kontrakan baru di sini. Lengkapi detail
                                                informasi kontrakan untuk mempermudah pencarian oleh calon penyewa."</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="home"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Tambah Kontrakan</a>
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
                                <div class="row">
                                    <div class="col-sm-8"
                                        style="align-items: center; display: flex; justify-content: center; margin-left: 19%;">
                                        <!-- Basic Form Inputs card start -->
                                        <div class="card mt-5">
                                            <div class="card-header text-center">
                                                <h4>Tambah Kontrakan</h4>
                                            </div>
                                            <fo class="card-block">
                                                <form class="row g-4 ">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="inputEmail4">
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label for="inputPassword4" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="inputPassword4">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label for="inputCity" class="form-label">City</label>
                                                        <input type="text" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label for="inputEmail4" class="form-label">Pemilik</label>
                                                        <input type="email" class="form-control" id="inputEmail4">
                                                    </div>
                                                    <div class="col-md-6  mt-2">
                                                        <label for="inputEmail4" class="form-label">Nama
                                                            Kontrakan</label>
                                                        <input type="email" class="form-control" id="inputEmail4">
                                                    </div>
                                                    <div class="col-md-4  mt-2">
                                                        <label for="inputEmail4" class="form-label">Jumlah Kamar
                                                            Tamu</label>
                                                        <input type="email" class="form-control" id="inputEmail4">
                                                    </div>
                                                    <div class="col-md-4  mt-2">
                                                        <label for="inputEmail4" class="form-label">Jumlah Kamar
                                                            Tidur</label>
                                                        <input type="email" class="form-control" id="inputEmail4">
                                                    </div>
                                                    <div class="col-md-4  mt-2">
                                                        <label for="inputEmail4" class="form-label">Jumlah WC</label>
                                                        <input type="email" class="form-control" id="inputEmail4">
                                                    </div>
                                                    <div class="col-md-6  mt-2">
                                                        <label for="inputEmail4" class="form-label">Luas Tanah</label>
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="Luas Tanah">
                                                    </div>
                                                    <div class="col-md-6  mt-2">
                                                        <label for="inputEmail4" class="form-label">Jumlah Air</label>
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="Jenis Air">
                                                    </div>
                                                    <div class="col-md-4  mt-2">
                                                        <label for="inputEmail4" class="form-label">Harga</label>
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="Harga">
                                                    </div>
                                                    <div class="col-md-12  mt-2">
                                                        <label for="inputEmail4" class="form-label">Faslitas</label>
                                                        <textarea rows="5" cols="5" class="form-control"
                                                            placeholder="Fasilitas"></textarea>
                                                    </div>
                                                </form>
                                                <br>
                                                <h4 class="sub-title">Alamat</h4>
                                                <form class="row g-4 ">
                                                    <div class="col-md-4" style="position: relative; bottom: 10px;">
                                                        <label for="inputEmail4" class="form-label">Nama Jalan</label>
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="Nama Jalan">
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <label for="inputEmail4" class="form-label">RT</label>
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="RT">
                                                    </div>
                                                    <div class="col-md-2 mt-2">
                                                        <label for="inputEmail4" class="form-label">RW</label>
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="RW">
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <label for="inputEmail4" class="form-label">Kelurahan</label>
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="Kelurahan">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label for="inputEmail4" class="form-label">Upload File</label>
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </form>
                                                <div class="mt-5"
                                                    style="align-items:center; display: flex; justify-content: flex-end;">
                                                    <div>
                                                        <button type="button" class="btn btn-danger"
                                                            style="margin-right: 10px; padding: 10px 20px 10px 24px; border-radius: 24px;">
                                                            <i class="fas fa-times"></i> Batal
                                                        </button>
                                                        <button type="button" class="btn btn-primary"
                                                            style="margin-right: 10px; padding: 10px 20px 10px 20px; border-radius: 24px;">
                                                            <i class="fas fa-plus"></i> Tambah
                                                        </button>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- Basic Form Inputs card end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Warning Section Starts -->
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
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
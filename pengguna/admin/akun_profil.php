<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Material Able Bootstrap Admin Template by Codedthemes</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  </head>
  <body>
    <div class=  "pcoded-content ">
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-8">
              <div class="page-header-title">
                <h5 class="m-b-10">Profil Saya</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pcoded-inner-content">
        <div class="main-body">
          <div class="page-wrapper">
            <div class="page-body">
              <div class="row justify-content-md-center">
                <div class="col-md-6  ">
                  <div class="card">
                    <div class="card-header">
                      <h5>Informasi Profil</h5>
                    </div>
                    <div class="card-block">
                        <form id="profileForm">
                        <div class="form-group text-center">
                            <img src="assets/images/avatar-1.jpg" alt="Profile Picture" class="img-thumbnail" id="profilePicture" style="max-width: 150px; border-radius: 50%" />
                            <br />
                        <input type="file" class="form-control-file" id="profilePictureInput" style="display: none" />
                          <button type="button" class="btn btn-info mt-2" id="changePictureButton">Ubah Foto</button>
                        </div>
                        <div class="form-group">
                          <label for="name">Nama:</label>
                          <input type="text" class="form-control" id="name" name="name" value="Wiwin" />
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" name="email" value="wiwin@example.com" />
                        </div>
                        <div class="form-group">
                          <label for="phone">Telepon:</label>
                          <input type="tel" class="form-control" id="phone" name="phone" value="08123456789" />
                        </div>
                        <div class="mt-5" style="align-items:center; display: flex; justify-content: flex-end;"> 
                          <div>
                              <button type="button"  class="btn btn-primary" style="margin-right: 10px; padding: 10px 20px 10px 20px; border-radius: 24px;"> 
                                  <i class="fas fa-edit"></i>  edit
                              </button>
                              <button type="button"  class="btn btn-success" style="margin-right: 10px; padding: 10px 20px 10px 20px; border-radius: 24px;"> 
                                  <i class="fas fa-save"></i>  Simpan
                              </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>

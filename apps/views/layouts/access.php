<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?= $this->apps->name; ?>">
        <meta name="author" content="<?= $this->apps->companyname; ?>">
        <meta name="keyword" content="<?= $this->apps->name; ?>">
        <meta name="csrf" id="<?= $this->security->get_csrf_token_name(); ?>" 
              content="<?= $this->security->get_csrf_hash(); ?>">
        <!-- Favicon-->
        <link rel="icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">

        <title><?php echo $template['title']; ?></title><meta charset="UTF-8" />

        <!-- General CSS Files -->
        <link rel="stylesheet" href="<?= base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/stisla/modules/fontawesome/css/all.min.css'); ?>">

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="<?= base_url('assets/stisla/modules/bootstrap-social/bootstrap-social.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2/sweetalert2.css'); ?>"> 

        <!-- Template CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/stisla/css/style.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/stisla/css/components.css'); ?>">
        <style type="text/css">
            body{
                background-image: url("<?=base_url('assets/img/bg-3.jpg');?>");
                background-size: cover;
            }
        </style>

    </head>


    <body onload="getLocation();">
        <div id="app">
            <section class="section">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div class="login-brand">
                                <img src="<?= base_url('assets/img/logo.png'); ?>" alt="logo" width="100" class="shadow-light rounded-circle">
                            </div>
                            
                            <div class="text-center">
                                <h4><?= $this->apps->logintitle; ?></h4>
                            </div>
                            
                            <?php echo $template['body']; ?>

                            <div class="simple-footer">
                                <?php echo $this->apps->copyright . " - " . $this->apps->kd_cabang; ?> &copy; 2019
                                <br>
                                <small>
                                    <?php echo $this->apps->dept . ' | Engine Ver : ' . CI_VERSION . ' <br> Server Ver : ' . phpversion(); ?>
                                </small>
                                <br>
                                <small>
                                    Tampilan Terbaik Gunakan 
                                    <a style="color:#536c79;text-decoration: underline;" href="https://www.google.com/chrome/browser/desktop/" target="blank">Google Chrome</a> 
                                    Terbaru
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- General JS Scripts -->
        <script src="<?= base_url('assets/stisla/modules/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/stisla/modules/popper.js'); ?>"></script>
        <script src="<?= base_url('assets/stisla/modules/tooltip.js'); ?>"></script>
        <script src="<?= base_url('assets/stisla/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="<?= base_url('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
        <script src="<?= base_url('assets/stisla/modules/moment.min.js'); ?>"></script>
        <script src="<?= base_url('assets/stisla/js/stisla.js'); ?>"></script>

        <!-- JS Libraies -->
        
        <!-- Toast-->
        <script src="<?= base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.all.js'); ?>"></script>  
        <!-- Numeral.Js -->
        <script src="<?= base_url('assets/plugins/numeral/numeral.min.js'); ?>"></script> 

        <!-- Page Specific JS File -->

        <!-- Template JS File -->
        <script src="<?= base_url('assets/stisla/js/scripts.js'); ?>"></script>
        <script src="<?= base_url('assets/stisla/js/custom.js'); ?>"></script> 
        
        <script src="<?= base_url('assets/custom/js/my.js'); ?>"></script>  
        <script src="<?= base_url('assets/custom/js/login.js'); ?>"></script>  
    </body>
</html>

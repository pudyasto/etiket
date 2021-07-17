<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $this->apps->name; ?>">
    <meta name="author" content="<?= $this->apps->companyname; ?>">
    <meta name="keyword" content="<?= $this->apps->name; ?>">
    <meta name="csrf" id="<?= $this->security->get_csrf_token_name(); ?>" content="<?= $this->security->get_csrf_hash(); ?>">
    <meta charset="UTF-8" />
    <link rel="icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">

    <title><?php echo $template['title']; ?></title>


    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/simple-line-icons/css/simple-line-icons.css'); ?>" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/stisla/modules/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/stisla/modules/fontawesome/css/all.min.css'); ?>">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/jquery-ui/jquery-ui.css'); ?>">
    <!-- Chosen -->
    <link href="<?= base_url('assets/plugins/chosen/bootstrap-chosen.css'); ?>" rel="stylesheet">

    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= base_url('assets/stisla/modules/datatables/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/stisla/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/stisla/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'); ?>">

    <!-- Select2 -->
    <link href="<?= base_url('assets/plugins/select2/css/select2.css'); ?>" rel="stylesheet">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/animated/animate.css'); ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/stisla/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/stisla/css/components.css'); ?>">
    <!-- toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/custom/css/my.css'); ?>">


    <!-- General JS Scripts -->
    <script src="<?= base_url('assets/stisla/modules/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/stisla/modules/popper.js'); ?>"></script>
    <script src="<?= base_url('assets/stisla/modules/tooltip.js'); ?>"></script>
    <script src="<?= base_url('assets/stisla/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
    <script src="<?= base_url('assets/stisla/modules/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/stisla/js/stisla.js'); ?>"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>

    <!-- datepicker -->
    <script src="<?= base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>

    <!-- Chosen -->
    <script src="<?= base_url('assets/plugins/chosen/chosen.jquery.js'); ?>"></script>
    <!-- Toast-->
    <script src="<?= base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.all.js'); ?>"></script>

    <!-- datatables -->
    <script src="<?= base_url('assets/stisla/modules/datatables/datatables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/stisla/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/stisla/modules/datatables/Select-1.2.4/js/dataTables.select.min.js'); ?>"></script>

    <script src="<?= base_url('assets/stisla/modules/cleave-js/dist/cleave.min.js'); ?>"></script>
    <!-- Numeral.Js -->
    <script src="<?= base_url('assets/plugins/numeral/numeral.min.js'); ?>"></script>
    <!-- Chosen -->
    <script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js'); ?>"></script>
    <!--    jquery-form-->
    <script src="<?= base_url('assets/plugins/jquery.form/jquery.form.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery.form/jquery.form.js'); ?>"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('assets/stisla/js/scripts.js'); ?>"></script>
    <script src="<?= base_url('assets/stisla/js/custom.js'); ?>"></script>

</head>

<body class="">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('assets/stisla/img/avatar/avatar-1.png'); ?>" class="rounded mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Apoteker</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">
                                User
                            </div>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= site_url(); ?>"><?= $this->apps->title; ?></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= site_url(); ?>"><?= $this->apps->short_name; ?></a>
                    </div>
                    <ul class="sidebar-menu" style="line-height: 15px;">
                        <li class="menu-header">Menu Aplikasi</li>
                        <li class="active">
                            <a class="nav-link" href="<?= site_url('main'); ?>">
                                <i class="fas fa-dice"></i>
                                <span>E-Ticket</span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <?php echo $template['body']; ?>
                </section>


                <!-- Form Modal -->
                <div class="modal fade" id="form-modal" role="dialog" data-backdrop="static" aria-labelledby="form-modal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="" role="document">
                        <div class="modal-content animated fadeInDown">
                            <div class="modal-header">
                                <h4 class="modal-title" id="form-modal-title" style="font-size: 18px;"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="form-modal-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="mailto:pawdev.id@gmail.com?Subject=Support <?= $this->apps->copyright; ?>"><?= $this->apps->copyright; ?></a> © <?= (date('Y') > 2019) ? '2019 - ' . date('Y') : '2019'; ?>
                </div>
                <div class="footer-right">
                    Created by Pudyasto Adi Wibowo with <span class="text-danger"><i class="fa fa-heart"></i></span> | Powered by <a href="https://getstisla.com/">Stisla</a>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url('assets/custom/js/my.js?v=' . rand(1, 10)); ?>"></script>
    <script src="<?= base_url('assets/custom/js/main.js?v=' . rand(1, 10)); ?>"></script>
    <!-- Place your JS Here (End Section)-->
</body>

</html>
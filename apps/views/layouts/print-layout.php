<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo $template['title'];?> </title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url('assets/dist/img/favicon.png');?>" type="image/png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- jQuery 2.2.3 -->
    <script src="<?=base_url('assets/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <!-- Bootstrap 3.3.6 -->
    <script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url('assets/ionicons-2.0.1/css/ionicons.min.css');?>">
        <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets/dist/css/AdminLTE.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url('assets/dist/css/skins/_all-skins.min.css');?>">
    
<body class="hold-transition skin-red sidebar-mini">
    <?php echo $template['body'];?>
<script type="text/javascript">
window.print();
</script>
<!-- ./wrapper -->
</body>
</html>

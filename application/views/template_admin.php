<html lang="en">
<!DOCTYPE html>

<head>
    <title>BPRS Mitra Harmoni Yogyakarta</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url() ?>template_admin/assets/images/favicon.ico" type="image/x-icon">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- select2 -->
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/select2.min.css"> -->
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template_admin/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template_admin/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template_admin/assets/css/style.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">MHY APP</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
            <?php $this->load->view('dashboard_admin/sidebar'); ?>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <?php $this->load->view('dashboard_admin/header'); ?>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <?php echo $contents ?>
    <!-- [ Main Content ] end -->


    <!-- Required Js -->
    <!-- select2 -->
    <!-- <script src="<?php echo base_url() ?>assets/js/select2.min.js"></script> -->
    <!-- <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script> -->
    <script src="<?php echo base_url() ?>assets/js/klik.js"></script>

    <script src="<?php echo base_url() ?>template_admin/assets/js/vendor-all.min.js"></script>
	<script src="<?php echo base_url() ?>template_admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>template_admin/assets/js/pcoded.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabelnsb').DataTable();
        });
    </script>

</body>
</html>
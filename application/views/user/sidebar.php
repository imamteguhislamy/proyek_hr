<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?php echo base_url()?>bootstrap/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>bootstrap/assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />  
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange"><!--You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
            <div class="logo">
                <a class="simple-text logo-mini">HR</a>
                <a class="simple-text logo-normal">Human Resource</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url()?>user/daftar_jabatan">
                            <i class="now-ui-icons design_app"></i><p>Daftar Jabatan</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>user/daftar_sop">
                            <i class="now-ui-icons design_app"></i><p>Daftar SOP</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?=base_url()?>assets/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?=base_url()?>assets/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?=base_url()?>assets/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?=base_url()?>assets/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?=base_url()?>assets/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/AdminLTE/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="<?=base_url()?>assets/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <style>
    .tampil {
        color: white;
    }

    .tambah-2 {
        text-align: right;
        margin: 5px;

    }
    </style>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?=base_url()?>assets/AdminLTE/dist/img/AdminLTELogo.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!--<li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>-->
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <!---<a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>--->
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <!--<div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>-->
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <!---<div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>-->
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <!--<div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>-->
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <!--<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>-->
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <!--<li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" role="button">
                        <i class="fa fa-cog"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url()?>User_dashboard" class="brand-link">
                <img src="<?=base_url()?>assets/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Booking Apple Device</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?=base_url()?>assets/AdminLTE/dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>

                    <div class="info">

                        <div href="#" class="d-block">
                            <div class="tampil">
                                <?php echo $this->session->userdata('nama');?>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- SidebarSearch Form -->
                <!--<div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>-->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-close">
                            <a href="<?= base_url()?>User_dashboard" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>


                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>data_user" class="nav-link">
                                <i class="fas fa-user nav-icon "></i>
                                <p>
                                    Data User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-desktop"></i>
                                <p>
                                    Data Master
                                    <i class="fas fa-angle-down right"></i>
                                    <!--<span class="badge badge-info right">6</span>-->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url()?>tipe_device" class="nav-link">
                                        <i class=""></i>
                                        <p>Type Device Apple</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>harga_device" class="nav-link">
                                        <i class=""></i>
                                        <p>Harga</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url()?>nama_barang" class="nav-link">
                                        <i class=""></i>
                                        <p>Nama Barang</p>
                                    </a>
                                </li>

                            </ul>
                            <hr>
                        <li class="nav-item">
                            <a href="<?= base_url()?>peminjaman" class="nav-link">
                                <!--<i class="fas fa-user nav-icon "></i>-->
                                <p>
                                    Peminjaman
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>pengembalian" class="nav-link">
                                <!--<i class="fas fa-user nav-icon "></i>-->
                                <p>
                                    Pengembalian
                                </p>
                            </a>
                        </li>
                        </li>
                        <hr>

                        <li class="nav-item">
                            <a href="<?= base_url()?>user/user_logout" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon text-danger"></i>
                                <p>
                                    Sign Out
                                </p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php $tgl_pinjam = date('Y-m-d');
            $tujuh_hari = mktime(0,0,0,date('n'),date('j') + 7, date('y'));
            $tgl_kembali = date('Y-m-d', $tujuh_hari);
            ?>
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Input Data Peminjaman</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url()?>peminjaman/tambah">Tambah List
                                        Peminajaman
                                    </a>
                                </li>
                                <!--<li class="breadcrumb-item active">Dashboard v1</li>-->
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">List Peminjaman Device</h3>
                                </div>
                                <!-- /.card-header -->
                                <!----value=""---->
                                <!-- form start -->
                                <form method="POST" action="<?= base_url()?>peminjaman/simpan"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="idpeminjaman">SKU Barang</label>
                                            <input type="text" class="form-control" name="idpeminjaman"
                                                id="idpeminjaman" value="<?=$this->m_peminjaman->idpeminjaman()?>"
                                                readonly>
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="namabarangdevice">Nama Device</label>
                                            <input type="text" class="form-control" id="namabarangdevice"
                                                name="namabarangdevice" placeholder="Enter nama barang Device" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputemail">SN Device</label>
                                            <input type="text" class="form-control" id="sndevice" name="sndevice"
                                                placeholder="Enter email" required>
                                        </div>-->
                                        <!--<div class="form-group">
                                            <label for="inputalamat">Alamat User</label>
                                            <textarea name="alamat" class="form-control" id="alamat" rows="5" cols="5"
                                                required></textarea>
                                        </div>-->
                                        <div class="form-group">
                                            <label for="gender">Nama User</label>
                                            <div>
                                                <select name="id_user" id="id_user" class="form-control" required>
                                                    <option>- Pilih User -</option>
                                                    <?php 
                                                        foreach ($this->db->get('user')->result() as $row){?>
                                                    <option value="<?= $row->id_user;?>">
                                                        <?= $row->nama_user;?>
                                                    </option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="idharga">Produk</label>
                                            <div class="col-sm-16">
                                                <select name="idbarang" id="idbarang" class="form-control select2bs4"
                                                    required>
                                                    <option class="option">- Pilih Type Produk -</option>
                                                    <?php 
                                                        foreach ($this->db->get('namabarang')->result() as $row){?>
                                                    <option value="<?= $row->skubarang;?>">
                                                        <?= $row->namabarangdevice;?>
                                                    </option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="idharga">Tipe Device</label>
                                            <div class="col-sm-16">
                                                <select name="tipe" id="tipe" class="form-control select2bs4" required>
                                                    <option class="option">- Pilih Tipe Device -</option>
                                                    <?php 
                                                        foreach ($this->db->get('sewa_barang')->result() as $row){?>
                                                    <option value="<?= $row->id_jenis_device;?>">
                                                        <?= $row->jenis_device;?>
                                                    </option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tglpinjam">Tanggal Pinjam</label>
                                            <input type="date" class="form-control" name="tglpinjam"
                                                value="<?=$tgl_pinjam?>" id="idpeminjaman" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="tglkembali">Tanggal Kembali</label>
                                            <input type="date" class="form-control" name="tglkembali"
                                                value="<?=$tgl_kembali?>" readonly>
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="inputnotelp">No Handphone</label>
                                            <input type="tel" class="form-control" id="no_telp" name="no_telp"
                                                placeholder="Enter No Telp" required>
                                        </div>-->
                                        <!--<div class="form-group">
                                            <label for="tahunbarang">Tahun Barang</label>
                                            <div class="col-sm-16">
                                                <select name="tahunbarang" class="form-control select2bs4" required>

                                                </select>
                                            </div>
                                        </div>-->
                                        <!--<div class="form-group">
                                            <label for="inputnoktp">Tahun Barang </label>
                                            <input type="text" class="form-control" id="tahunbarang" name="tahunbarang"
                                                placeholder="Enter Tahun Barang" maxlength="16" minlength="16" required>
                                        </div>-->

                                        <!--<div class="form-group">
                                            <label for="exampleInputFile">Gambar Input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <?php echo form_open_multipart('upload/do_upload');?>
                                                    <input type="file" class="custom-file-input" name="gambar"
                                                        id="gambar" size="20">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        Photo</label>
                                                </div>

                                            </div>
                                        </div>-->
                                        <!--<div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>-->
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="<?= base_url()?>peminjaman" class="btn btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-success ">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                            <!-- general form elements -->

                            <!-- /.card -->

                            <!-- Input addon -->

                            <!-- /.card -->
                            <!-- Horizontal Form -->

                            <!-- /.card -->

                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="">Enjoy Your Booking</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">

            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?=base_url()?>assets/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/moment/moment.min.js"></script>
    <script src="<?=base_url()?>assets/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>assets/AdminLTE/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>assets/AdminLTE/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?=base_url()?>assets/AdminLTE/dist/js/pages/dashboard.js"></script>
    <!-- bs-custom-file-input -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <!-- Select2 -->
    <script src="<?=base_url()?>assets/AdminLTE/plugins/select2/js/select2.full.min.js"></script>

    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
    <script>
    //Initialize Select2 Elements

    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
    </script>

    <script>
    $('#tipe').change(function() {
        var id = $(this).val();
        $.ajax({
            url: '<?=base_url()?>peminjaman/jumlah_barang',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(hasil) {
                var stok = JSON.stringify(hasil.jumlah);
                var stok1 = stok.split('"').join('');
                if (stok1 <= 0) {
                    alert('Maaf, Stok Yang anda minta Sedang Kosong');
                    location.reload();
                }
            }
        });
    });
    </script>
</body>

</html>
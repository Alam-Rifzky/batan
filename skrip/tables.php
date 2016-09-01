<?php
session_start();
error_reporting(0);
if(!empty($_SESSION['email'])){
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/skripsi/skrip/index.php">';
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Badan Tenaga Nuklir Nasional</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Data Picker -->
  <!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php require_once("koneksi.php");?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">BATAN</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nama'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="signout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Table <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="tables.php">Table Data Operasi</a>
                            </li>
                            <li>
                                <a href="tablescram.php">Table Data Scram</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Form <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                               <a href="form.php">Form Data Operasi</a>
                            </li>
                            <li>
                                <a href="formscram.php">Form Data Scram</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Table Data Operasi
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                    <div class="col-lg-12">
                        <h2>Tabel </h2>
                           <a href="form.php">Tambah Data</a>
                            <div class="btn-group">
                                <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">All <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                     <?php
                                     $hasil=mysql_query("SELECT distinct teras from dataoperasi order by teras");
                                while ($row=mysql_fetch_array($hasil)) {
                                         ?>
                                    <li><a href="tables2.php?teras=<?php echo $row[0];?>"><?php echo $row[0];?></a></li>
<?php }?>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                             
 
                                    <script type="text/javascript">
                                    $(function() {

                                      $('input[name="datefilter"]').daterangepicker({
                                        singleDatePicker: true,
                                          autoUpdateInput: false,
                                          locale: {
                                              cancelLabel: 'Clear'
                                          }
                                      });

                                      $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                                          $(this).val(picker.startDate.format('DD/MM/YYYY'));
                                      });

                                      

                                    });
                                    </script>
                          <p>&nbsp</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Teras</th>
                                        <th>Kode Komponen</th>
                                        <th>Nama Komponen</th>
                                        <th>Tanggal</th>
                                        <th>Tabel Hasil Operasi</th>
                                        <th>Tabel Minimal </th>
                                        <th>Tabel Maksimal</th>
                                        <th>Keterangan</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                 <?php
                                             $q="SELECT * FROM dataoperasi";
                                            $q1=mysql_query($q);
                                            while ($row=mysql_fetch_array($q1)) {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $_SESSION['nama'];?> </td>
                                        <td><?php echo $row[1];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                        <td><?php echo $row[4];?></td>
                                        <td><?php echo $row[5];?></td>
                                        <td><?php echo $row[6];?></td>
                                        <td><?php echo $row[7];?></td>
                                        <td><?php echo $row[8];?></td>
                                        <td><i class="fa fa-pencil-square-o" aria-hidden="true"><a  href="update.php?id=<?php echo $row[0];?>">Update</i></td>
                                        <td><i class="fa fa-trash-o" aria-hidden="true"><a href="delete.php?id=<?php echo $row[0];?>">Delete</i></td>
                                    </tr>
                                </tbody>
                                <?php 

                                    }

                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                
                      <div class="text-center">
                                    <p>Copyright Badan Tenaga Nuklir Nasional</p>
                                </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!--
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php }?>
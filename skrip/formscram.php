<?php
session_start();

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

    <!-- Data Picker -->
  <!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />



    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-table"></i> Table <i class="fa fa-fw fa-caret-down"></i></a>
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
                            Forms Data Scram
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" role="form">

                            <div class="form-group">
                                    <label for="disabledSelect">Teras</label>
                                    <select name="teras" id="disabledSelect" class="form-control">
                                        <option>Teras 35</option><option>Teras 36</option><option>Teras 37</option><option>Teras 38</option><option>Teras 39</option><option>Teras 40</option>
                                    </select>
                                </div>

                                 <div class="form-group">
                                <label>Awal Tanggal</label>
                               <input class="form-control" type="text" name="datefilterawal" value="" />
 
                                    <script type="text/javascript">
                                    $(function() {

                                      $('input[name="datefilterawal"]').daterangepicker({
                                        singleDatePicker: true,
                                          autoUpdateInput: false,
                                          locale: {
                                              cancelLabel: 'Clear'
                                          }
                                      });

                                      $('input[name="datefilterawal"]').on('apply.daterangepicker', function(ev, picker) {
                                          $(this).val(picker.startDate.format('DD/MM/YYYY'));
                                      });

                                      

                                    });
                                    </script>
                            </div>

                             <div class="form-group">
                                <label>Jam Mulai</label>
                                <input class="form-control" name="jammulai" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label>Akhir Tanggal</label>
                               <input class="form-control" type="text" name="datefilterakhir" value="" />
 
                                    <script type="text/javascript">
                                    $(function() {

                                      $('input[name="datefilterakhir"]').daterangepicker({
                                        singleDatePicker: true,
                                          autoUpdateInput: false,
                                          locale: {
                                              cancelLabel: 'Clear'
                                          }
                                      });

                                      $('input[name="datefilterakhir"]').on('apply.daterangepicker', function(ev, picker) {
                                          $(this).val(picker.startDate.format('DD/MM/YYYY'));
                                      });

                                      

                                    });
                                    </script>
                            </div>
                                  <?php
                                             $q="SELECT * from datascram";
                                            $q1=mysql_query($q);
                                            while ($row=mysql_fetch_array($q1)) {
                                             $a= $row[9];
                                         }

                                    ?>

                             <div class="form-group">
                                <label>Jam Selesai</label>
                                <input class="form-control" name="jamselesai" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label>Lama Jam</label>
                                <input class="form-control" name="lamajam" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label>Daya</label>
                                <input class="form-control" id="daya" name="daya" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label>MWD</label>
                                <input class="form-control" id="mwd" name="mwd" onkeydown="hitung();" placeholder="Enter text">
                            </div>


                             <div class="form-group">
                                <label>&isin; MWD</label>
                                <input class="form-control" id="ket" name="jml_mwd" placeholder="Enter text">
                            </div>

                             <div class="form-group">
                                <label>Penyebab</label>
                                <input class="form-control" name="penyebab" placeholder="Enter text">
                            </div>

                            <button type="submit" name="submit" class="btn btn-default">Submit Button</button>

                             <div class="text-center">
                                    <p>Copyright Badan Tenaga Nuklir Nasional</p>
                                </div>

                        </form>
                            <?php
                            error_reporting(0);
                            if(isset($_POST['submit'])){
                                $teras = $_POST['teras'];
                                $Tanggalawal = $_POST['datefilterawal'];

                                $karakter=explode("/",$Tanggalawal);

                                $tglawal=$karakter[2]."-".$karakter[0]."-".$karakter[1];

                                $jammulai=$_POST['jammulai'];

                                $Tanggalakhir = $_POST['datefilterakhir'];

                                $karakter=explode("/",$Tanggalakhir);

                                $tglakhir=$karakter[2]."-".$karakter[0]."-".$karakter[1];

                                $jamselesai=$_POST['jamselesai'];
                                $lamajam=$_POST['lamajam'];
                                $daya=$_POST['daya'];
                                $mwd=$_POST['mwd'];
                                $jml_mwd= $a + $mwd;
                                $penyebab=$_POST['penyebab'];

                                

                                $query = mysql_query("insert into datascram values('', '$teras', '$tglawal', '$jammulai', '$tglakhir', '$jamselesai', '$lamajam','$daya', '$mwd', '$jml_mwd', '$penyebab')") or die(mysql_error());
                            
                                    if ($query) {
                                            ?>
                                        <script> alert('Data kami sudah di input'); </script>
                                            <?php
                                        }
 
                                        }
                                
                            ?>

                    </div>
                    

                        </form>

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

    <script>
        function hitung(){
            var mwd=parseFloat(document.getElementById("mwd").value);
            var daya=parseFloat(document.getElementById('daya').value);
            var temp=mwd+daya;

           
            document.getElementById('ket').value=temp;
           
        }
    </script>

</body>

</html>
<?php }?>
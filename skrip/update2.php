<?php $no = $_GET['id'];
session_start();
include 'koneksi.php';

echo $no;
$query = "SELECT * FROM datascram WHERE id='".$no."'";
$hasil = mysql_query($query)or die (mysql_error());
//$data  = mysql_fetch_array($hasil);
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
                    
                    <ul class="dropdown-menu message-dropdown">
                        
                        
                        
                         
                                                
                    </ul>
                </li>

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
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms Data Scram
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">


                            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" role="form">
                            <?php
                                while ($row=mysql_fetch_array($hasil)) {
                             ?>
                            <div class="form-group">
                                    <label for="disabledSelect">Teras</label>
                                    <select name="teras" id="disabledSelect" class="form-control">
                                    <option values="<?php echo $row[1];?>"><?php echo $row[1];?></option>
                                        <option values="teras35">Teras 35</option><option values="teras36">Teras 36</option><option values="teras37">Teras 37</option><option values="teras38">Teras 38</option><option values="teras39">Teras 39</option><option values="teras40">Teras 40</option>
                                    </select>
                                </div>


                            <div class="form-group">
                                <label> AwalTanggal</label>
                            
                               <input class="form-control" type="text" name="datefilter" value="<?php echo $row[2];?>" />
 

                               <div class="form-group">
                                <label>Jam Awal</label>
                                <input class="form-control" name="nkom" placeholder="Enter text" value="<?php echo $row[3];?>">
                            </div>

                             <div class="form-group">
                                <label>Akhir Tanggal</label>
                            
                               <input class="form-control" type="text" name="datefilter" value="<?php echo $row[4];?>" />

                            <div class="form-group">
                                <label>Jam Selesai</label>
                                <input class="form-control" name="nkom" placeholder="Enter text" value="<?php echo $row[5];?>">
                            </div>

                             <div class="form-group">
                                <label>Lama Jam</label>
                                <input class="form-control" name="nkom" placeholder="Enter text" value="<?php echo $row[6];?>">
                            </div>

                            <div class="form-group">
                                <label>Daya</label>
                                <input class="form-control" name="jam" placeholder="Enter text" value="<?php echo $row[7];?>">
                            </div>


                            <div class="form-group">
                                <label>MWD</label>
                                <input class="form-control" name="jml_jam" placeholder="Enter text" value="<?php echo $row[8];?>">
                         
                            </div>

                            <div class="form-group">
                                <label>&isin; MWD</label>
                                <input class="form-control" id="top" name="top" placeholder="Enter text" value="<?php echo $row[9];?>">
                            </div>
                             <div class="form-group">
                                <label>Keterangan</label>
                                <input class="form-control" id="ket" name="ket" placeholder="Enter text" value="<?php echo $row[10];?>">
                            </div>

                            <input type="submit" name="submit" class="btn btn-default" value="submit">

                             <div class="text-center">
                                    <p>Copyright Badan Tenaga Nuklir Nasional</p>
                                </div>
                            <?php }?>
                        </form>
                           
                    </div>
                    
                   
                       
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
            var tmax=document.getElementById("tmax").value;
            var to=document.getElementById('top').value;
            var temp=to-tmax;

           if(tmax>=to){
            document.getElementById('ket').value="Bahaya";
           }

           if(tmax<to){
            if (temp==1) {
                document.getElementById('ket').value="Bahaya";
            }else{
                document.getElementById('ket').value="Normal";
            }
           }
        }
    </script>

</body>

</html>
 <?php
                            error_reporting(0);
                            if(isset($_POST['submit'])){
                                $teras = $_POST['teras'];
                                $Tanggal = $_POST['datefilter'];
                                $nkom = $_POST['nkom'];
                                $jam = $_POST['jam'];
                                $jml_jam = $_POST['jml_jam'];
                                $tho = $_POST['top'];
                                $tmin = $_POST['tmin'];
                                $tmax = $_POST['tmax'];
                                $ket = $_POST['ket'];
                                $query = mysql_query("update dataoperasi set teras='$teras', tanggal='$Tanggal', nama_komponen='$nkom', jam='$jam', jml_jam='$jml_jam', tekanan_hasil_operasi='$tho', tekanan_hasil_minimal='$tmin', tekanan_hasil_maksimal='$tmax', keterangan='$ket' WHERE id='$no'") or die(mysql_error());
                            
                                    if ($query) {
                                            ?>
                                        <script> alert('Data kami sudah di input'); </script>
                                            <?php
                                        } else {
                                         echo mysql_error();   
                                        }
 
                                        }
                                
                            ?>
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
      $(this).val(picker.startDate.format('MM/DD/YYYY'));
  });

  

});
</script>
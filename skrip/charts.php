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


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
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
                    <li class="dropdown">
                          <a href="javascript" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-table"></i> Tables<i class="fa fa-fw fa-caret-down"></i></a>
                          <ul class="dropdown-menu" class="collapse" role="menu">
                            <li><a href="tables.php"><i class="fa fa-fw fa-table">Table Data Operasi</i></a></li>
                            <li><a href="tablescram.php">Table Data Scram</a></li>
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
                            Grafik Data Operasi
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Grafik Data Operasi
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                

                <!-- Morris Charts -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Grafik</h2>
                         <div class="coba">  
                           <div class="btn-group" role="group">
                            <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">All <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                     <?php
                                     $hasil=mysql_query("SELECT distinct teras from datascram order by teras");
                                while ($row=mysql_fetch_array($hasil)) {
                                         ?>
                                    <li><a href="tables4.php?teras=<?php echo $row[0];?>"><?php echo $row[0];?></a></li>
<?php }?>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                          <p>&nbsp</p>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Grafik Data Operasi Teras</h3>
                            </div>
                            <div class="panel-body">
                       <div id="graph"></div>
<div id="code" class="prettyprint linenums">


<script>
  var day_data = [  
  <?php 
  /*
    include "koneksi.php";

    $q=mysql_query("Select * from dataoperasi");
    $n=0;
    $n1=0;
    while($row=mysql_fetch_array($q)){
    $n++;

    echo "{tanggal: '".$row[4]."',minimal:".$row[6].", maximal:".$row[5]."},";
    
    $n1=$n-1;
    }
    */
    ?>

 
//{tanggal: '08/06/2016',minimal:0, maximal:0,barang:'komponen 1'}
];
Morris.Line({
  element: 'graph',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>   
</div>


                            </div>
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
   <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
  <script src="../js/morris.js-0.5.1/morris.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
  <script src="../js/morris.js-0.5.1/examples/lib/example.js"></script>
  <link rel="stylesheet" href="../js/morris.js-0.5.1/examples/lib/example.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
  <link rel="stylesheet" href="../js/morris.js-0.5.1/morris.css">

</body>

</html>
<?php }?>
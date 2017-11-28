<?php
session_start();
require_once('helper.php');
require_once('connect.php');

//case user not login yet
if (!isset($_SESSION['current_ID'])){
  header('Location: homepage.php');
  exit;
}
//case user type isn't Customer
if (isset($_SESSION['current_type'])){
  if ($_SESSION['current_type']!="Admin"){
    header('Location: homepage.php');
    exit;
  }
}else{
  header('Location: homepage.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ninodezign.com, ninodezign@gmail.com">
  <meta name="copyright" content="ninodezign.com"> 
  <title>Eve | Event booking</title>

  <!-- start: Css -->
  <link rel="shortcut icon" href="images/poster/v-icon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min3.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
  <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
  <link rel="stylesheet" type="text/css" href="css/unslider.css" />
  <link rel="stylesheet" type="text/css" href="css/template.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min3.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/nouislider.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/bootstrap-material-datetimepicker.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <!-- start: Content -->
  <body id="mimin" class="dashboard">
    <!-- start: Header -->
    <header id="nino-header2">
      <?php header_zone(); ?>
    </header>
    <div class="container-fluid mimin-wrapper">
      <!-- start:Left Menu -->
      <div id="left-menu">
        <div class="sub-left-menu scroll">
          <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time">
              <h1 class="animated fadeInLeft">21:00</h1>
              <p class="animated fadeInRight">Sat,October 1st 2029</p>
            </li>
            <p class="text-center"> Welcome MyAdmin</p>
            <li class="active ripple">
              <a class="tree-toggle nav-header"><span class="icon-user icons icon text-right"></span> Users 
                <span class="fa-angle-right fa right-arrow text-right"></span>
              </a>
              <ul class="nav nav-list tree">
                <li><a href="admin_search_organ.php">Organizer</a></li>
                <li><a href="admin_search_user.php">Customer</a></li>
              </ul>
            </li>
            <li class="ripple">
              <a class="tree-toggle nav-header">
                <span class="fa fa-calendar-o"></span> Event
                <span class="fa-angle-right fa right-arrow text-right"></span>
              </a>
              <ul class="nav nav-list tree">
                <li><a href="topnav.html">Open Events</a></li>
                <li><a href="boxed.html">Closed Events</a></li>
              </ul>
            </li>
            
          </ul>
        </div>
      </div>
      <!-- end: Left Menu -->
      <div id="content">
        <div class="col-md-12">
          <div class="panel form-element-padding">
            <div class="panel-heading">
             <?php
             if (isset($_POST['submit'])) {
              $Fname = $_POST['fname'];
              $Lname = $_POST['lname'];
              $Email = $_POST['email'];
              $Oname = $_POST['oname'];
              $Phone = $_POST['phone'];                           
            }
            ?>
            <h4>Searching Filter</h4>
          </div>                        
          <div class="panel-body"">
            <form action="" method="post">
             <div>
              <div class="col-md-12">
                <div class="col-md-12"><label class="col-sm-1 control-label text-right">First Name</label>
                  <div class="col-sm-5"><input name="fname" type="text" class="form-control border-bottom"></div>
                  <label class="col-sm-1 control-label text-right">Last Name</label>
                  <div class="col-sm-5"><input name="lname" type="text" class="form-control border-bottom"></div>   
                </div>
                <div class="col-md-12">
                  <label class="col-sm-1 control-label text-right">Organizer Name</label>
                  <div class="col-sm-5"><input name="oname" type="text" class="form-control border-bottom"></div>

                  <label class="col-sm-1 control-label text-right">Organizer Email</label>
                  <div class="col-sm-5"><input name="email" type="text" class="form-control border-bottom"></div>

                </div>
                <div class="col-md-12">
                 <label class="col-sm-1 control-label text-right">Phone Number</label>
                 <div class="col-sm-3"><input name="phone" type="text" class="form-control border-bottom"></div>
               </div>     
             </div>                       
           </div>
           <div class="col-md-12 text-right">
            <input class="submit btn btn-danger" type="submit" value="Search" name="submit" >
          </div>   

        </form>
      </div>
    </div>
  </div>
  <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><h3>Data Tables</h3></div>
        <div class="panel-body">
          <div class="responsive-table">
            <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Account ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Organizer Name</th>
                  <th>Organizer Address</th>
                  <th>Organizer Email</th>
                  <th>Phone number</th>
                  <th>Status</th>
                </tr>
              </thead>
              <?php
              if (isset($_POST['submit'])) {
                if (!$_POST['fname']=='') {
                  $sfname = " and account_fname LIKE '%".$Fname."%' ";
                }else{
                  $sfname = "";
                }
                if (!$_POST['lname']=='') {
                  $slname = " and account_lname LIKE '%".$Lname."%' ";
                }else{
                  $slname = "";
                }
                if (!$_POST['email']=='') {
                  $semail = " and organizer_email LIKE '%".$Email."%' ";
                }else{
                  $semail = "";
                }
                if (!$_POST['oname']=='') {
                  $soname = " and organizer_name LIKE '%".$Oname."%' ";
                }else{
                  $soname = "";
                }
                if (!$_POST['phone']=='') {
                  $sphone = " and organizer_phone= '".$Phone."' ";
                }else{
                  $sphone = "";
                }                                                                     
                $q = "SELECT * FROM account,organizer WHERE account_Type = 'Organizer' and account.account_ID=organizer.account_ID".$sfname.$slname.$semail.$soname.$sphone;
                $result=$mysqli->query($q);                    
                if(!$result){
                  echo "Select failed. Error: ".$mysqli->error ;
                }
                ?>
                <tbody>
                  <?php
                  while($row=$result->fetch_array()){
                    echo "<tr>";
                    echo "<td>".$row['account_ID']."</td>";
                    echo "<td>".$row['account_fname']."</td>";
                    echo "<td>".$row['account_lname']."</td>";
                    echo "<td>".$row['organizer_name']."</td>";
                    echo "<td>".$row['organizer_address']."</td>";
                    echo "<td>".$row['organizer_email']."</td>";
                    echo "<td>".$row['organizer_phone']."</td>";
                    echo "<td>".$row['organizer_status']."</td>";
                    echo "</tr>";
                  }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>
<!-- end: content -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/fullcalendar.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.vmap.min.js"></script>
<script src="asset/js/plugins/maps/jquery.vmap.world.js"></script>
<script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
<script src="asset/js/plugins/chart.min.js"></script>
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
</body>
</html>
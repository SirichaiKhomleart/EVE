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
  <!-- HTML5 shim AND Respond.js IE8 support of HTML5 elements AND media queries -->
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
              $Ename = $_POST['ename'];
              $Oname = $_POST['oname'];
              $Location = $_POST['location'];
              $Etype = $_POST['etype'];
              $Status = $_POST['status'];
              $Day = $_POST['day'];
              $Month = $_POST['month'];
              $Year = $_POST['year'];
              $Optionsearch = $_POST['optionsearch'];
            }
            ?>
            <h4>Searching Filter</h4>
          </div>                        
          <div class="panel-body"">
            <form action="" method="post">
             <div>
              <div class="col-md-12">
                <div class="form-group"><label class="col-sm-1 control-label text-left"><strong>Event Name</strong></label>
                  <div class="col-sm-4"><input name="ename" type="text" class="form-control border-bottom"></div>
                  <label class="col-sm-1 control-label text-left"><strong>Organizer Name</strong></label>
                  <div class="col-sm-4"><input name="oname" type="text" class="form-control border-bottom"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div>
                  <div class="form-group">
                    <label class="col-sm-1 control-label text-left"><strong>Location</strong></label>
                    <div class="col-sm-4"><input name="location" type="text" class="form-control border-bottom"></div>
                    <label class="col-sm-1 control-label text-right"><strong>Event Type</strong></label>
                    <div class="col-sm-2">
                      <select class="form-control" name="etype">
                        <option value="-1">All</option>
                        <?php
                        $q = "SELECT eventtype_name FROM eventtype";
                        $result=$mysqli->query($q);                    
                        if(!$result){
                          echo "Select failed. Error: ".$mysqli->error ;
                        }
                        $i = 0;
                        while($row=$result->fetch_array()){
                          echo "<option value='".$i."''>".$row['eventtype_name']."</option>";
                          $i = $i+1;
                        }
                        ?>
                      </select>
                    </div>
                    <label class="col-sm-1 control-label text-right"><strong>Status</strong></label>
                    <div class="col-sm-2">
                      <select class="form-control" name="status">
                        <option value="2">All</option>
                        <option value="1">Approve</option>
                        <option value="0">Disapprove</option>
                      </select>
                    </div>
                  </div>
                </div>                
              </div>
              <div class="col-md-12">
                <label class="col-sm-2 control-label text-left" style="padding-top: 10px"><strong>Date Search</strong></label>
                <div class="col-md-12">
                  <div>
                    <div class="form-group">
                      <label class="col-sm-1 control-label text-right">Day</label>
                      <div class="col-sm-1">
                        <select class="form-control" name="day">
                          <option value="0">Day</option>
                          <?php
                          for ($i=1; $i < 31; $i++) { 
                            echo "<option value='".$i."''>".$i."</option>";
                          }
                          ?>
                        </select>
                      </div>
                      <label class="col-sm-1 control-label text-right">Month</label>
                      <div class="col-sm-2">
                        <select class="form-control" name="month">
                          <option value="0">Month</option>
                          <option value="1">January</option>
                          <option value="2">Febuary</option>
                          <option value="3">March</option>
                          <option value="4">April</option>
                          <option value="5">May</option>
                          <option value="6">June</option>
                          <option value="7">July</option>
                          <option value="8">August</option>
                          <option value="9">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                        </select>
                      </div>
                      <label class="col-sm-1 control-label text-right">Year</label>
                      <div class="col-sm-1"><input name="year" type="text" pattern="\d{4}" maxlength="4" class="form-control border-bottom"></div>
                    </div>
                    <label class="col-sm-2 control-label text-center">Option Date Search</label>
                    <div class="col-sm-2">
                      <select class="form-control" name="optionsearch">
                        <option value="0">Start Before</option>
                        <option value="1">Start After</option>
                        <option value="2">End Before</option>
                        <option value="3">End After</option>
                      </select>
                    </div>
                  </div>                
                </div>
                <div class="col-md-12 text-right">
                  <input class="submit btn btn-danger" type="submit" value="Search" name="submit" style="align-items: flex-end;">                     
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading"><h3>Event Tables</h3></div>
          <div class="panel-body">
            <div class="responsive-table">
              <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Created Time</th>
                    <th>Event ID</th>
                    <th>Event Name</th>
                    <th>Organizer Name</th>
                    <th>Event Type</th>
                    <th>Event Location</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Event Time</th>
                    <th>Detail</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <?php
                if (isset($_POST['submit'])) {
                  if (!$_POST['ename']=='') {
                    $sename = " AND event_name LIKE '%".$Ename."%' ";
                  }else{
                    $sename = "";
                  }
                  if (!$_POST['oname']=='') {
                    $soname = " AND organizer_name LIKE '%".$Oname."%' ";
                  }else{
                    $soname = "";
                  }
                  if (!$_POST['location']=='') {
                    $slo = " AND event_location LIKE '%".$Location."%' ";
                  }else{
                    $slo = "";
                  }
                  if (!($_POST['etype']==(-1))) {
                    $setype = " AND eventType_ID='".$Etype."' ";
                  }else{
                    $setype = "";
                  }
                  if (!($_POST['status']==2)) {
                    $sstatus = " AND event_approveStatus='".$Status."' ";
                  }else{
                    $sstatus = "";
                  }
                  if (!($_POST['day']==0 OR $_POST['month']==0 OR $_POST['year']=='')) {
                    if(!($_POST['month'] == 1 or $_POST['month'] == 3 or $_POST['month'] == 5 or $_POST['month'] == 7 or $_POST['month'] == 8 or $_POST['month'] == 10 or $_POST['month'] == 12)){
                      if($_POST['month'] == 2 and $_POST['day'] > 29){
                        $correctdate = false;
                      }else{
                        if($_POST['day'] > 30){
                          $correctdate = false;
                        }else{
                          $correctdate = true;
                        }
                      }
                    }
                    if ($correctdate) {
                      $date = date_create($Year."-".$Month."-".$Day);
                      $datesearch = date_format($date, 'y-m-d');
                      if ($Optionsearch==0) {
                        $code = " AND event_dateStart<= ";
                      }elseif ($Optionsearch==1) {
                        $code = " AND event_dateStart>= ";
                      }elseif ($Optionsearch==2) {
                        $code = " AND event_dateEnd<= ";
                      }elseif ($Optionsearch==3) {
                        $code = " AND event_dateEnd>= ";
                      }
                      $sdate = $code."'".$datesearch."' ";
                    }else{
                      echo "<font color=".'#FF0000'."><strong>Date Search Parameters Error! Day not match with Month.</strong></font>";
                      $sdate = "";
                    }
                  }
                  elseif(!($_POST['day']==0 AND $_POST['month']==0 AND $_POST['year']=='')){
                    echo "<font color=".'#FF0000'."><strong>Date Search Parameters Error! Please, Fill all parameters(Day, Month, and Year) if you want to search.</strong></font>";
                    $sdate = "";
                  }else{
                    $sdate = "";
                  }
                  $q = "SELECT * FROM event,eventtype,organizer WHERE event.event_typeID=eventtype.eventType_ID AND event.event_organizerID=organizer.account_ID".$sename.$soname.$slo.$setype.$sstatus.$sdate;
                  $result=$mysqli->query($q);                    
                  if(!$result){
                    echo "Select failed. Error: ".$mysqli->error ;
                  }
                  ?>
                  <tbody>
                    <?php
                    while($row=$result->fetch_array()){
                      echo "<tr>";
                      echo "<td>".$row['event_createTimeStamp']."</td>";
                      echo "<td>".$row['event_ID']."</td>";
                      echo "<td>".$row['event_name']."</td>";
                      echo "<td>".$row['organizer_name']."</td>";
                      echo "<td>".$row['eventType_name']."</td>";
                      echo "<td>".$row['event_location']."</td>";
                      echo "<td>".$row['event_dateStart']."</td>";
                      echo "<td>".$row['event_dateEnd']."</td>";
                      echo "<td>".$row['event_timeStart']." to ".$row['event_timeEnd']."</td>";
                      echo "<td>".$row['event_detail']."</td>";
                      if($row['event_approveStatus']==0){
                        $statusname = "Disapprove";
                      }elseif ($row['event_approveStatus']==1) {
                        $statusname = "Approve";
                      }else{
                        $statusname = "Undefined";
                      }
                      echo "<td>".$statusname."</td>";
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
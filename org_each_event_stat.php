<?php
session_start();
require_once('helper.php');
require_once('connect.php');
$event_ID=$_GET['event'];

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
    <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
<header id="nino-header2">
    <?php header_zone(); ?>
  </header>
      <!-- end: Header -->

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
                    <p class="text-center"> Welcome SIIT Organizer</p>
                    <li class="active ripple" onclick="location.href='org_index_stat.php';">
                      <a class="tree-toggle nav-header" href=""><span class="fa-home fa"></span> Home 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                    </li>
<!--                     <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="icon-user icons icon text-right"></span> Attendees 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-calendar-o"></span> Your Event
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                    </li> -->
                    
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

      
          <!-- start: content -->
            <div id="content">
                <div class="col-md-12" style="padding:0px 10px;">
                    <div class="col-md-12 card-wrap padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="col-md-12 padding-0">
                              <div class="col-md-12" style="padding:0px 15px;">
                                <div class="panel" style="padding:20px 0px;">
                                  <?php
                                            $q = "SELECT event_name FROM `event` WHERE event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
                                  <h3 class="text-center"><?php echo $row['event_name']; ?></h3>
                                  <p class="text-center">20 October 2017</p>
                                    <hr align="center" width="50%"> 
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-4">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Visit</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                         <?php
                                            $q = "SELECT COUNT(ticket_ID) FROM `ticket`,`event`WHERE ticket.event_ID=event.event_ID AND event.event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
                                        <h1><?php echo $row['COUNT(ticket_ID)']; ?></h1>
                                        <p>Attendees</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Income</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <i class="fa fa-money"></i>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <?php
                                            $q = "SELECT SUM(payment_money) FROM `paymentLog`,`event` WHERE paymentLog.event_ID=event.event_ID AND event.event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
                                        <h1><?php echo 0+$row['SUM(payment_money)'];?> ฿
                                        </h1>
                                        <p>Bath</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Refund Request</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="fa fa-tag"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <?php
                                            $q = "SELECT COUNT(refund_ID) FROM `refundLog`,`ticket`,`event` WHERE refundLog.ticket_ID=ticket.ticket_ID AND ticket.event_ID=event.event_ID AND event.event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
                                        <h1><?php echo $row['COUNT(refund_ID)'];?></h1>
                                        <p>Requests</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                  <div class="col-md-12 card-wrap padding-0">
                    <div class="col-md-6">
                        <div class="panel">
                          <div class="panel-heading bg-white border-none" style="padding:20px;">
                            <div class="col-md-6 col-sm-6 col-sm-12 text-left">
                              <h4>Your Customer</h4>
                            </div>

                          </div>
                          <div class="panel-body" style="padding-bottom:50px;">
                              <div id="canvas-holder1">
                                    <canvas class="line-chart" style="margin-top:30px;height:200px;"></canvas>
                              </div>
                              <div class="col-md-12" style="padding-top:20px;">
                                  <div class="col-md-12 col-sm-4 col-xs-6 text-center">
                                    <?php
                                            $q = "SELECT COUNT(ticket_ID) FROM `ticket`,`event`WHERE ticket.event_ID=event.event_ID AND event.event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
                                      <h2 style="line-height:.4;"><?php echo $row['COUNT(ticket_ID)']; ?></h2>
                                      <small>Total Customers</small>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                          <div class="panel-heading bg-white border-none" style="padding:20px;">
                            <div class="col-md-6 col-sm-6 col-sm-12 text-left">
                              <h4>Tickets</h4>
                            </div>

                          </div>
                          <div class="panel-body" style="padding-bottom:50px;">
                              <div id="canvas-holder1">
                                    <canvas class="bar-chart" style="margin-top:30px;height:200px;"></canvas>
                              </div>
                              <div class="col-md-12" style="padding-top:20px;">
                                  <div class="col-md-4 col-sm-4 col-xs-6 text-center">
                                    <?php
                                            $q = "SELECT COUNT(*) FROM `paymentLog` WHERE event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
                                      <h2 style="line-height:.4;"><?php echo $row['COUNT(*)']; ?></h2>
                                      <small>Total Tickets</small>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-6 text-center">
                                    <?php
                                            $q = "SELECT SUM(payment_money) FROM `paymentLog` WHERE event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
                                      <h2 style="line-height:.4;"><?php echo 0+$row['SUM(payment_money)']; ?> ฿</h2>
                                      <small>Total Price</small>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-6 text-center">
                                    <?php
                                            $q = "SELECT COUNT(refund_ID) FROM `refundLog`,`ticket`,`event` WHERE refundLog.ticket_ID=ticket.ticket_ID AND ticket.event_ID=event.event_ID AND event.event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
                                      <h2 style="line-height:.4;"><?php echo $row['COUNT(refund_ID)'];?></h2>
                                      <small>Total Refunds</small>
                                  </div>
                              </div>
                          </div>

                          
                        </div>
                    </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading"><h3>Tickets Details</h3></div>
                 <div class="panel-body">   
                  <?php
                    $q = "SELECT ticketType.ticketType_name,ticketType.ticketType_totalSeats,ticketType.ticketType_price,COUNT(ticket.ticket_ID) FROM `event`,`ticket`,`ticketType` WHERE ticket.ticketType_ID=ticketType.ticketType_ID AND ticket.event_ID=event.event_ID AND event.event_ID=".$event_ID." GROUP BY ticketType_name ORDER BY ticketType.ticketType_ID";
                    $result=$mysqli->query($q);                    
                    if(!$result){
                        echo "Select failed. Error: ".$mysqli->error ;
                    }
                    while($row=$result->fetch_array()){?>             
                  <div class="col-md-12 list-timeline">
                    <div class="col-md-12 list-timeline-section bg-light">
                      <div class="col-md-12 list-timeline-detail">
                        <h4>
                          <span class="icon-notebook icons list-timeline-icon"></span>
                          <?php echo $row['ticketType_name']?>
                          <small><?php echo $row['ticketType_totalSeats']?> Tickets</small>
                        </h4>
                        <p>
                          Ticket Price : <?php echo $row['ticketType_price']?> ฿ <br>
                          Sold out : <?php echo $row['COUNT(ticket.ticket_ID)']?> Tickets <br>
                          Total Income : <?php 
                                          $totalprice=$row['COUNT(ticket.ticket_ID)']*$row['ticketType_price']; 
                                          echo $totalprice; ?> ฿
                        </p>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>

                </div>
            </div>
          <!-- end: content -->

      

    <!-- start: Javascript -->
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


    <!-- custom -->
     <script src="asset/js/main.js"></script>
     <script type="text/javascript">
      (function(jQuery){

        // start: Chart =============

        Chart.defaults.global.pointHitDetectionRadius = 1;
        Chart.defaults.global.customTooltips = function(tooltip) {

            var tooltipEl = $('#chartjs-tooltip');

            if (!tooltip) {
                tooltipEl.css({
                    opacity: 0
                });
                return;
            }

            tooltipEl.removeClass('above below');
            tooltipEl.addClass(tooltip.yAlign);

            var innerHtml = '';
            if (undefined !== tooltip.labels && tooltip.labels.length) {
                for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                    innerHtml += [
                        '<div class="chartjs-tooltip-section">',
                        '   <span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
                        '   <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                        '</div>'
                    ].join('');
                }
                tooltipEl.html(innerHtml);
            }

            tooltipEl.css({
                opacity: 1,
                left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
                top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
                fontFamily: tooltip.fontFamily,
                fontSize: tooltip.fontSize,
                fontStyle: tooltip.fontStyle
            });
        };
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(124, 232, 178,0.4)",
                strokeColor: "rgba(124, 232, 178,1)",
                pointColor: "rgba(124, 232, 178,0.3)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(124, 232, 178,1)",
                <?php
                    $q = "SELECT COUNT(ticket_ID) FROM account,ticket,event WHERE event.event_ID = ".$event_ID." AND ticket.account_ID=account.account_ID AND ticket.event_ID=event.event_ID AND account.account_gender='Male'";
                    $result=$mysqli->query($q);                    
                    if(!$result){
                      echo "Select failed. Error: ".$mysqli->error ;
                    }
                    $row=$result->fetch_array();
                    ?>
                 data: [0,0,0,0,0,0,<?php echo $row['COUNT(ticket_ID)']; ?>,<?php echo $row['COUNT(ticket_ID)']; ?>]
            }, {
                label: "My Second dataset",
                fillColor: "rgba(110,160,210,0.5)",
                strokeColor: "rgba(110,160,210,1)",
                pointColor: "rgba(110,160,210,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(110,160,210,1)",
                <?php
                    $q = "SELECT COUNT(ticket_ID) FROM account,ticket,event WHERE event.event_ID = ".$event_ID." AND ticket.account_ID=account.account_ID AND ticket.event_ID=event.event_ID AND account.account_gender='Female'";
                    $result=$mysqli->query($q);                    
                    if(!$result){
                      echo "Select failed. Error: ".$mysqli->error ;
                    }
                    $row=$result->fetch_array();
                    ?>
                 data: [0,0,0,0,0,0,<?php echo $row['COUNT(ticket_ID)']; ?>,<?php echo $row['COUNT(ticket_ID)']; ?>]
            }]
        };

 
        var barChartData = {
                <?php
                    $q = "SELECT ticketType.ticketType_name,COUNT(ticket.ticket_ID) FROM `ticketType`,`ticket`,`event` WHERE ticket.event_ID=event.event_ID AND ticket.ticketType_ID=ticketType.ticketType_ID AND event.event_ID=".$event_ID." GROUP BY ticketType_name ORDER BY ticket_ID";
                    $result=$mysqli->query($q);                    
                    if(!$result){
                        echo "Select failed. Error: ".$mysqli->error ;
                    }
                    $type_array = array();
                    while($row=$result->fetch_array()){
                      $type_array[] = "\"".$row['ticketType_name']."\""; // get the username field and add to the array above with surrounding quotes
                     }

                  $type_string = implode(",", $type_array); // implode the array to "stick together" all the usernames with a comma inbetween each
                  ?>   
                labels: [<?php  echo $type_string; ?>],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(124, 232, 178,0.4)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(124, 232, 178,0.2)",
                        highlightStroke: "rgba(124, 232, 178,0.2)", 
                        <?php
                    $q = "SELECT tickettype.ticketType_name,COUNT(ticket.ticket_ID) FROM `ticket`,`event`,`account`,`tickettype` WHERE ticket.event_ID=event.event_ID AND ticket.account_ID=account.account_ID AND account.account_gender='Male' AND event.event_ID=".$event_ID." AND ticket.ticketType_ID=tickettype.ticketType_ID GROUP BY ticketType_name ORDER BY tickettype.ticketType_ID";
                    $result=$mysqli->query($q);                    
                    if(!$result){
                        echo "Select failed. Error: ".$mysqli->error ;
                    }
                    $type_array = array();
                    while($row=$result->fetch_array()){
                      $type_array[] = $row['COUNT(ticket.ticket_ID)']; // get the username field and add to the array above with surrounding quotes
                     }

                  $type_string = implode(",", $type_array); // implode the array to "stick together" all the usernames with a comma inbetween each
                  ?>
                        data: [<?php echo $type_string; ?>]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(110,160,210,0.5)",
                        strokeColor: "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(110,160,210,0.2)",
                        highlightStroke: "rgba(110,160,210,0.2)",
                        <?php
                    $q = "SELECT ticketType.ticketType_name,COUNT(ticket.ticket_ID) FROM `ticket`,`event`,`account`,`ticketType` WHERE ticket.event_ID=event.event_ID AND ticket.account_ID=account.account_ID AND account.account_gender='Female' AND event.event_ID=".$event_ID." AND ticket.ticketType_ID=ticketType.ticketType_ID GROUP BY ticketType_name ORDER BY ticketType.ticketType_ID";
                    $result=$mysqli->query($q);                    
                    if(!$result){
                        echo "Select failed. Error: ".$mysqli->error ;
                    }
                    $type_array = array();
                    while($row=$result->fetch_array()){
                      $type_array[] = $row['COUNT(ticket.ticket_ID)']; // get the username field and add to the array above with surrounding quotes
                     }

                  $type_string = implode(",", $type_array); // implode the array to "stick together" all the usernames with a comma inbetween each
                  ?>
                        data: [<?php echo $type_string; ?>]
                    }
                ]
            };

         window.onload = function(){


                var ctx2 = $(".line-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx2).Line(lineChartData, {
                     responsive: true,
                        showTooltips: true,
                        multiTooltipTemplate: "<%= value %>",
                     maintainAspectRatio: false
                });

                var ctx3 = $(".bar-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx3).Bar(barChartData, {
                     responsive: true,
                        showTooltips: true
                });

                

            };
        
        //  end:  Chart =============



      })(jQuery);
     </script>
      <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
  <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script type="text/javascript" src="js/unslider-min.js"></script>
  <script type="text/javascript" src="js/template.js"></script>
  <script src="js/custom-file-input.js"></script>
  <script src="js/addInput.js" type="text/javascript"></script>
  <!-- end: Javascript -->
  </body>
</html>
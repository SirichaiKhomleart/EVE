<?php
function print_menus(){

    if(isset($_SESSION['current_ID'])){
        if($_SESSION['current_type']=="Customer") {
            if ($_SESSION['current_customer_status']==0){
                echo '<a href="homepage.php">Home</a>';
                echo '<a href="customer_index.php">My Account</a>';
                echo '<a href="logout.php">Log Out</a>';
            }else{
                echo '<a href="homepage.php">Home</a>';
                echo '<a href="customer_index.php">My Tickets</a>';
                echo '<a href="customer_payment.php">Payments history</a>';
                echo '<a href="logout.php">Log Out</a>';
            }
        }elseif ($_SESSION['current_type']=="Organizer"){
            if ($_SESSION['current_organizer_status']==0){
                echo '<a href="homepage.php">Home</a>';
                echo '<a href="organizer_index.php">My Account</a>';
                echo '<a href="logout.php">Log Out</a>';
            }else{
                echo '<a href="homepage.php">Home</a>';
                echo '<a href="organizer_createEvent.php">Create Event</a>';
                echo '<a href="organizer_index.php">My Events</a>';
                echo '<a href="org_index_stat.php">Statistic</a>';
                echo '<a href="refundinbox.php">Notification</a>';
                echo '<a href="logout.php">Log Out</a>';
            }
        }elseif ($_SESSION['current_type']=="Admin"){
            echo '<a href="homepage.php">Home</a>';
            echo '<a href="admin_index.php">Admin System</a>';
            echo '<a href="createinbox.php">Notification</a>';
            echo '<a href="logout.php">Log Out</a>';
        }

    }else{
        echo '<a href="homepage.php">Home</a>';
        echo '<a href="login.php">Log In</a>';
        echo '<a href="signup.php">Sign Up</a>';
    }

}
?>


<?php
function header_zone(){
 ?>
    <div id="nino-header2Inner">
        <nav id="nino-navbar" class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="homepage.php">Eve | Online Event Booking</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="nino-menuItem pull-right">
                    <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?php print_menus(); ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
 <?php
}
?>


<?php
function html_headcode() {
    ?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ninodezign.com, ninodezign@gmail.com">
    <meta name="copyright" content="ninodezign.com">
    <title>Eve | Online Event Booking</title>

    <!-- favicon -->
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
    <link rel="stylesheet" type="text/css" href="css/component.css" />

    <?php
}?>
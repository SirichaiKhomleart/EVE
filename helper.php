<?php
function print_menus(){

    if(isset($_SESSION['current_ID'])){
        if($_SESSION['current_type']=="Customer") {
            echo '<a href="index.php">Home</a>';
            echo '<a href="customer_index.php">My Tickets</a>';
            echo '<a href="logout.php">Log Out</a>';
        }elseif ($_SESSION['current_type']=="Organizer"){
            echo '<a href="index.php">Home</a>';
            echo '<a href="organizer_index.php">My Events</a>';
            echo '<a href="logout.php">Log Out</a>';
        }elseif ($_SESSION['current_type']=="Admin"){
            echo '<a href="index.php">Home</a>';
            echo '<a href="admin_index.php">Admin System</a>';
            echo '<a href="logout.php">Log Out</a>';
        }

    }else{
        echo '<a href="index.php">Home</a>';
        echo '<a href="login.php">Log In</a>';
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
                    <a class="navbar-brand" href="index.php">Eve</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="nino-menuItem pull-right">
                    <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
                        <ul class="nav navbar-nav1">
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

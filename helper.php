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
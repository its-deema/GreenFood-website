<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style3.css">
    <!-- the icon in browser's title bar -->
    <link rel="icon" href="green foodi.ico">
     <title>information</title>
</head>
<body>
    <header>
    <!-- logo in menu bar -->
    <div class="logo">
        <img src="green food.png">
    </div>

    <ul class="navmenu">
        <!-- here we have to link pages together at the end -->
        <li><a href="index.html">Home</a></li>
        <li><a href="Menu.html">Meals</a></li>
        <li><a href="Registration.html" class="active">Registration</a></li>
    </ul>

    <div class="nav-icon">
        <!-- To send an Email -->
        <a href="mailto:GreenFood@gmail.com" class="btn">Contact</a>
    </div>
</header>
<hr><hr>
<div class="container">
    <div class="title">subscriptions</div>
    <p id="77" style="font-weight:bold;">your informations</p>
<?php
//settingg session variable
session_start();
$_SESSION['firstname']=$_POST['fn'];
$_SESSION['lastname']=$_POST['ln'];
$_SESSION['phone']=$_POST['ph'];
$_SESSION['email']=$_POST['mail'];
$new_date = date('Y-m-d', strtotime($_POST['D']));

//print 
echo "name: ".$_SESSION['firstname']." ".$_SESSION['lastname']."<br>"
                               ."phone number: ".$_SESSION['phone']."<br>"
                               ."email: ".$_SESSION['email']."<br>";

 ?>
<br><p id="55" style="font-weight:bold;">your package details</p>
<?php 
// using array
 $a = $_POST['packages'];
 $b=$_POST['period'];
 $c=$_POST['quantity'];
 $pack = array($a,$b,$c);
 foreach ($pack as $value) {
	echo $value ."<br>";
}
echo "starting date: ".$new_date."<br>";
echo "price: ";
// Bluking
if( ($_POST['packages']=="Bluking-package") && ($_POST['period']=="2 Weeks") && ($_POST['quantity']=="1 Meal") ){
    echo "299SR";
 }
else if( ($_POST['packages']=="Bluking-package") && ($_POST['period']=="2 Weeks") && ($_POST['quantity']=="2 Meals") ){
    echo "599SR";
}
else if( ($_POST['packages']=="Bluking-package") && ($_POST['period']=="2 Weeks") && ($_POST['quantity']=="3 Meals") ){
    echo "899SR";
}
else if( ($_POST['packages']=="Bluking-package") && ($_POST['period']=="1 Month") && ($_POST['quantity']=="1 Meal") ){
    echo "599SR";
}
else if( ($_POST['packages']=="Bluking-package") && ($_POST['period']=="1 Month") && ($_POST['quantity']=="2 Meals") ){
    echo "1149SR";
}
else if( ($_POST['packages']=="Bluking-package") && ($_POST['period']=="1 Month") && ($_POST['quantity']=="3 Meals") ){
    echo "1549SR";
}
// sliming
else if( ($_POST['packages']=="sliming-package") && ($_POST['period']=="2 Weeks") && ($_POST['quantity']=="1 Meal") ){
    echo "199SR";
 }
else if( ($_POST['packages']=="sliming-package") && ($_POST['period']=="2 Weeks") && ($_POST['quantity']=="2 Meals") ){
    echo "449SR";
}
else if( ($_POST['packages']=="sliming-package") && ($_POST['period']=="2 Weeks") && ($_POST['quantity']=="3 Meals") ){
    echo "699SR";
}
else if( ($_POST['packages']=="sliming-package") && ($_POST['period']=="1 Month") && ($_POST['quantity']=="1 Meal") ){
    echo "399SR";
}
else if( ($_POST['packages']=="sliming-package") && ($_POST['period']=="1 Month") && ($_POST['quantity']=="2 Meals") ){
    echo "799SR";
}
else if( ($_POST['packages']=="sliming-package") && ($_POST['period']=="1 Month") && ($_POST['quantity']=="3 Meals") ){
    echo "1199SR";
}
// both
else if( ($_POST['packages']=="Both") && ($_POST['period']=="2 Weeks") && ($_POST['quantity']=="1 Meal") ){
    echo "249SR";
 }
else if( ($_POST['packages']=="Both") && ($_POST['period']=="2 Weeks") && ($_POST['quantity']=="2 meals") ){
    echo "449SR";
}
else if( ($_POST['packages']=="Both") && ($_POST['period']=="2 Weeks") && ($_POST['quantity']=="3 meals") ){
    echo "749SR";
}
else if( ($_POST['packages']=="Both") && ($_POST['period']=="1 Month") && ($_POST['quantity']=="1 Meal") ){
    echo "499SR";
}
else if( ($_POST['packages']=="Both") && ($_POST['period']=="1 Month") && ($_POST['quantity']=="2 meals") ){
    echo "849SR";
}
else if( ($_POST['packages']=="Both") && ($_POST['period']=="1 Month") && ($_POST['quantity']=="3 meals") ){
    echo "1249SR";
}
?>

</div>

<footer>
    <!-- "&copy" for copy icon -->
    <p>* Copyright &copy; Green Food</p>
</footer>
</body>
</html>
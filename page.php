<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Virtual Tourist Guide</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<!-- <div class="banner">


	<div class="container">
		<meta name="viewport" content="width=device-width, initial-scale=1">
 			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s;color:Black;text-align:right; animation-name: zoomIn;">Welcome to Goa</h1>
	</div>
</div> -->
<!--- /banner-1 ---->
<!--- privacy ---->
<!-- <div class="privacy">
	<div class="container">
									 -->	<!-- <?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{		

?> -->


	<!-- 	<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"><?php 	echo $_GET['type'] ?></h3>
		
		
	<p>
	<?php 	echo $result->detail; ?>


	</p> 
<?php } }?>
	

		
	</div>
</div> -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #ccffe6;#99ffcc;#ffffcc;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>Trio India</h1>
  <p>Virtual Tourist guide emerges as a potential Game Changer.</p>
  <p>Cater's Government with statistical data for adopting the necessary services.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/guide4.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Akshay Anand</h2>
        <p class="title">Team Leader</p>
        <p>akshayanand771@gmail.com</p>
       <!--  <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/guide4.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Aishwarya B</h2>
        <p class="title">Developer</p>
        
        <p>aishurbhat@gmail.com</p>
        <!-- <p><button>Contact</button></p> -->
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/guide4.jpg" alt="John" style="width:100% " >
      <div class="container">
        <h2>Swarnamalya M</h2>
        <p class="title">Developer</p>
        <p>swarnamalya65@gmail.com</p>
        <!-- <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/guide4.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Akash Kunwar</h2>
        <p class="title">Developer</p>
        
        <p>akashkunwar08@gmail.com</p>
       <!--  <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/guide4.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Akash Anand</h2>
        <p class="title">Developer</p>
        
        <p>akashanand4166@gmail.com</p>
       <!--  <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/guide4.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>T Sai Srujan</h2>
        <p class="title">Developer</p>
        
        <p>saisrujant@gmail.com</p>
        <!-- <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>
</div>

</body>
</html>

<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>
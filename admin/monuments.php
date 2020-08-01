<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>VTG | Admin Monuments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
     <div class="mother-grid-inner">
<!--header start here-->
<?php include('includes/header.php');?>
<!--header end here-->
   <!--  <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol> -->
<!--four-grids here-->
    <!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 44.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

h4 {
  word-spacing: 8.5px;
}


.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>Number Of Visitors</h2>
<h3>Vistors for each Monument</h3>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" >
      <img src="images/monu2.png" alt="Cinque Terre" width="800" height="800">
    </a>
    <div class="desc"><strong>Baga Beach</strong>
      <h4>Jan:68732  Feb:48696  Mar:60964  Apr:56395</h4>
      <h4>May:43245  Jun:18959  Jul:14576  Aug:32472</h4>
      <h4>Sep:37946  Oct:55585  Nov:80427  Dec:80701</h4>
    </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" >
      <img src="images/monu3.png" alt="Forest" width="800" height="800">
    </a>
   <div class="desc"><strong>Se Cathedral</strong>
      <h4>Jan:2696  Feb:1497   Mar:2036   Apr:3692</h4>
      <h4>May:2152  Jun:2407   Jul:2077   Aug:2780</h4>
      <h4>Sep:1890  Oct:1984   Nov:4542   Dec:4401</h4>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" >
      <img src="images/monu4.png" alt="Northern Lights" width="800" height="800">
    </a>
   <div class="desc"><strong>Aguada Fort</strong>
      <h4>Jan:164 Feb:142  Mar:186  Apr:205</h4>
      <h4>May:122 Jun:171  Jul:11   Aug:74</h4>
      <h4>Sep:150 Oct:239  Nov:327  Dec:314</h4>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" >
      <img src="images/monu5.png" alt="Mountains" width="800" height="800">
    </a>
   <div class="desc"><strong>Anjuna Beach</strong>
      <h4>Jan:7209 Feb:6329  Mar:9645  Apr:6815</h4>
      <h4>May:6131 Jun:2600  Jul:1843  Aug:5396</h4>
      <h4>Sep:4972 Oct:5445  Nov:9070  Dec:10258</h4>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" >
      <img src="images/monu6.png" alt="Mountains" width="800" height="800">
    </a>
    <div class="desc"><strong>Dudhsagar Falls</strong>
      <h4>Jan:64013 Feb:48188  Mar:57237  Apr:53315</h4>
      <h4>May:74199 Jun:18038  Jul:12886  Aug:35572</h4>
      <h4>Sep:45534 Oct:61933  Nov:76464  Dec:87858</h4>
    </div>
  </div>
</div>

<div class="clearfix"></div>



</body>
</html>

<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include('includes/footer.php');?>
</div>
</div>

      <!--/sidebar-menu-->
        <?php include('includes/sidebarmenu.php');?>
                <div class="clearfix"></div>    
              </div>
              <script>
              var toggle = true;
                    
              $(".sidebar-icon").click(function() {                
                if (toggle)
                {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
                }
                else
                {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                  $("#menu span").css({"position":"relative"});
                }, 400);
                }
                      
                      toggle = !toggle;
                    });
              </script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->     
<!-- morris JavaScript -->  
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
  $(document).ready(function() {
    //BOX BUTTON SHOW AND CLOSE
     jQuery('.small-graph-box').hover(function() {
      jQuery(this).find('.box-button').fadeIn('fast');
     }, function() {
      jQuery(this).find('.box-button').fadeOut('fast');
     });
     jQuery('.small-graph-box .box-close').click(function() {
      jQuery(this).closest('.small-graph-box').fadeOut(200);
      return false;
     });
     
      //CHARTS
      function gd(year, day, month) {
      return new Date(year, month - 1, day).getTime();
    }
    
    graphArea2 = Morris.Area({
      element: 'hero-area',
      padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
      data: [
        {period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
        {period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
        {period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
        {period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
        {period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
        {period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
        {period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
        {period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
        {period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
        {period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
      ],
      lineColors:['#ff4a43','#a2d200','#22beef'],
      xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
      pointSize: 2,
      hideHover: 'auto',
      resize: true
    });
    
     
  });
  </script>
</body>
</html>
<?php } ?>
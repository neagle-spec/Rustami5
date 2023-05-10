<?php
session_start();
$language = "English";
if(isset($_COOKIE["language"])) {
	$language = $_COOKIE["language"];
}

$head = array("English"=>"Community Auto Maintenance", "Dari"=>"Community Auto Maintenance", "Pushto"=>"د ټولنې اتومات ساتنه");
$tagline = array("English"=>"Best Auto Maintenance in town", "Dari"=>"Best Auto Maintenance in town", "Pushto"=>"په ښار کې غوره اتومات ساتنه");

$services = array("English"=>"Services", "Dari"=>"دری خدمات", "Pushto"=>"خدمتونه");
$brakes = array("English"=>"Brakes", "Dari"=>"ترمز", "Pushto"=>"خدمتونه");
$engines = array("English"=>"Engines", "Dari"=>"موتور", "Pushto"=>"انجنونه");
$tires = array("English"=>"Tires", "Dari"=>"تایرها", "Pushto"=>"ټایرونه");
$trans = array("English"=>"Transmission", "Dari"=>"ترانسمیسیون", "Pushto"=>"لیږد");
$oils = array("English"=>"Oil & Fluids", "Dari"=>"روغن و مایعات", "Pushto"=>"غوړ او مایعات");
$electrical = array("English"=>"Electrical", "Dari"=>"الکتریکال", "Pushto"=>"بریښنایی");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Community Auto Maintenance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  
  <link rel="stylesheet" href="css/style.css?v=1">

</head>
<body>

<?php include('includes/header.php') ?>
<div style="justify-content: space-between">
	<div class="jumbotron text-center">
		<h1><?php echo $head[$language] ?></h1>
		<p><?php echo $tagline[$language] ?></p>
	</div>

	<nav class="navbar">
		<ul style="display: inline; " class="navbar-nav">
			<li class="menu-item"><a class="nav__link"  href="index.php"> <i class="fa fa-home"></i> <?php echo $home[$language] ?></a></li>
			<li class="menu-item"><a class="nav__link"  href="contact.php"><?php echo $contact[$language] ?></a>
			<li class="menu-item "><a class="nav__link"  href="admin.php">Admin</a>
		</ul>
	</nav>
</div>

  
<div class="container">

	<div class="row">

		<div class="col-sm-12 mb-4">
			<div class="navbar-menu" id="open-navbar1">
				<h4 style=" text-align: center; color: #fefefe; font-weight: bold;"><?php echo $services[$language] ?></h4>
			</div>
		</div>

	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="row boxes-row">
			<div class="col-sm-6 mb-3"><a href="#"><button type="submit" class="btn btn-primary service-button" id="Brakes"><?php echo $brakes[$language] ?></button></a></div>
			<div class="col-sm-6 mb-3"><a href="#"><button type="submit" class="btn btn-primary service-button" id="Engines"><?php echo $engines[$language] ?></button></a></div>
			<div class="col-sm-6 mb-3"><a href="#"><button type="submit" class="btn btn-primary service-button" id="Tires"><?php echo $tires[$language] ?></button></a></div>
			<div class="col-sm-6 mb-3"><a href="#"><button type="submit" class="btn btn-primary service-button" id="Transmission"><?php echo $trans[$language] ?></button></a></div>
			<div class="col-sm-6 mb-3"><a href="#"><button type="submit" class="btn btn-primary service-button" id="Oil & Fluids"><?php echo $oils[$language] ?></button></a></div>
			<div class="col-sm-6 mb-3"><a href="#"><button type="submit" class="btn btn-primary service-button" id="Electrical"><?php echo $electrical[$language] ?></button></a></div>
		</div>
	</div>
	<div class="col-sm-3"></div>
    <div id="heading"></div>
  </div>


  

</div>

<?php include('includes/footer.php') ?>
<script>
    var heading = document.getElementById('heading');
    let buttons = document.querySelectorAll('.service-button');

        for(let i=0; i<buttons.length; i++) {
            buttons[i].onclick = function(e) {
                let target = e.target;
                var currentSelectedDiv = target.getAttribute('id');
                heading.innerHTML = ['You have selected ', currentSelectedDiv].join('');
                localStorage.setItem('service-selected', currentSelectedDiv);
                console.log(currentSelectedDiv);
                window.location.href = "services.php";
            }
        }
</script>
<script src="js/script.js"></script>
<script src="../../capstone/Community-Auto-Works/js/servicesJS.js"></script>

</body>
</html>

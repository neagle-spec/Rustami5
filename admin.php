<?php
session_start();
$language = "English";
if(isset($_COOKIE["language"])) {
    $language = $_COOKIE["language"];
}

$head = array("English"=>"Community Auto Maintenance", "Dari"=>"Community Auto Maintenance", "Pushto"=>"د ټولنې اتومات ساتنه");
$tagline = array("English"=>"Best Auto Maintenance in town", "Dari"=>"Best Auto Maintenance in town", "Pushto"=>"په ښار کې غوره اتومات ساتنه");

$services = array("English"=>"Services", "Dari"=>"Services", "Pushto"=>"خدمتونه");
$brakes = array("English"=>"Brakes", "Dari"=>"Brakes", "Pushto"=>"خدمتونه");
$engines = array("English"=>"Engines", "Dari"=>"Engines", "Pushto"=>"انجنونه");
$tires = array("English"=>"Tires", "Dari"=>"Tires", "Pushto"=>"ټایرونه");
$trans = array("English"=>"Transmission", "Dari"=>"Transmission", "Pushto"=>"لیږد");
$oils = array("English"=>"Oil & Fluids", "Dari"=>"Oil & Fluids", "Pushto"=>"غوړ او مایعات");
$electrical = array("English"=>"Electrical", "Dari"=>"Electrical", "Pushto"=>"بریښنایی");

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

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/adminLanguages.js"></script>

</head>
<body>

<?php include('includes/header.php') ?>

<div class="admin-container">
    <div class="col">
        <button>Add New Language</button>
        <button>Update Language</button>
        <button>Delete Language</button>
    </div>
    <div class="col">
        <select>
            <option>Pages</option>
            <option value="home">Home Page</option>
            <option value="services">Services</option>
            <option value="contact">Contact</option>
        </select>
    </div>

    </div>
<?php include('includes/footer.php') ?>

</body>
</html>

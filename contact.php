<?php
session_start();
$language = "English";
if(isset($_COOKIE["language"])) {
	$language = $_COOKIE["language"];
}


$head = array("English"=>"INQUIRE", "Dari"=>"INQUIRE", "Pushto"=>"پوښتنه وکړئ");
$sub = array("English"=>"Send us a message", "Dari"=>"Contact us using the form below", "Pushto"=>"موږ ته یو پیغام واستوئ");
$name = array("English"=>"Your name", "Dari"=>"Your name", "Pushto"=>"ستاسو نوم");
$email = array("English"=>"Your Email Address", "Dari"=>"Your Email Address", "Pushto"=>"ستاسو د بریښنالیک پته");
$phone = array("English"=>"Your Phone Number ", "Dari"=>"Your Phone Number ", "Pushto"=>"ستاسو د تلیفون شمیره (اختیاري)");
$msg = array("English"=>"Type your message here....", "Dari"=>"Type your message here....", "Pushto"=>"خپل پیغام دلته ولیکئ....");
$submit = array("English"=>"Submit", "Dari"=>"Submit", "Pushto"=>"سپارل");
$thak = array("English"=>"Thankyou", "Dari"=>"Thankyou", "Pushto"=>"له تاسو مننه");
$contactUss = array("English"=>"Contact Us", "Dari"=>"Contact Us", "Pushto"=>"موږ سره اړیکه ونیسئ");



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
  <link rel="stylesheet" href="css/contact.css?v=1">

</head>
<body>

<?php include('includes/header.php') ?>

<div class="container">

  <div id="contact" class="row my-5">
    <div class="col-md-4">
      <div class="responsive-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.5756374866432!2d-122.23969242317554!3d47.38120040351465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549059561f2d2f8f%3A0x9bfc68a5decc434a!2s124%204th%20Ave%20S%2C%20Kent%2C%20WA%2098032!5e0!3m2!1sen!2sus!4v1682438426375!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-4">
      <h3 class="mb-3"><?php echo $contactUss[$language] ?></h3>
      <h4><i class="fa fa-envelope" aria-hidden="true"></i> fauzia.ameeri@gmail.com</h4>
      <h4><i class="fa fa-map-marker" aria-hidden="true"></i> 124 4th Ave S Kent, WA 98031 </h4>
      <h4><i class="fa fa-phone" aria-hidden="true"></i> 2532635881</h4>
    </div>
    <div class="col-md-4">
      <div class="contact-container">  
        <form action="handler.php" method="post">
          <h3 class="mb-3"><?php echo $sub[$language] ?></h3>
          <fieldset>
            <input placeholder="<?php echo $name[$language] ?>" type="text" name="name" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="<?php echo $email[$language] ?>" type="email" name="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="<?php echo $phone[$language] ?>" type="tel" name="phone" tabindex="3" required>
          </fieldset>
          <fieldset>
            <textarea placeholder="<?php echo $msg[$language] ?>" tabindex="5" name="msg" required></textarea>
          </fieldset>
          <fieldset>
            <input type="hidden" name="send-email">
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending"><?php echo $submit[$language] ?></button>
          </fieldset>
          <p class="copyright"><?php echo $thak[$language] ?></a></p>
        </form>
      </div>
    </div>
  </div>


</div>


<?php include('includes/footer.php') ?>


<script src="js/script.js"></script>



</body>
</html>

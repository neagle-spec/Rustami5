<?php

$home = array("English"=>"Home", "Dari"=>"Home", "Pushto"=>"کور");
$contact = array("English"=>"Contact Us", "Dari"=>"Contact Us", "Pushto"=>"موږ سره اړیکه ونیسئ");

$sure = array("English"=>"Are you sure?", "Dari"=>"Are you sure?", "Pushto"=>"تاسو ډاډه یاست؟");
$really = array("English"=>"Do you really want to change your current language!", "Dari"=>"Do you really want to change your current language!", "Pushto"=>"ایا تاسو واقعیا غواړئ خپله اوسنۍ ژبه بدله کړئ!");

$yes = array("English"=>"Yes, I am!", "Dari"=>"Yes, I am!", "Pushto"=>"هو زه يم!");
$no = array("English"=>"No, I'm Not", "Dari"=>"No, I'm Not", "Pushto"=>"نه زه نه یم");

?>


<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" />

<nav class="navbar">

    <div class="navbar-header">
      <button class="navbar-toggler" data-toggle="open-navbar1">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a href="index.php">
        <h4 class="header-icon">Community<span>AutoMaintenances</span></h4>
      </a>
    </div>

    <div class="navbar-menu" id="open-navbar1">
      <ul class="navbar-nav">
<!--        <li class="menu-item"><a class="nav__link"  href="index.php"> <i class="fa fa-home"></i> --><?php //echo $home[$language] ?><!--</a></li>-->
<!--        <li class="menu-item"><a class="nav__link"  href="contact.php">--><?php //echo $contact[$language] ?><!--</a>-->
<!--        <li class="menu-item "><a class="nav__link"  href="admin.php">Admin</a>-->
      </ul>

      <div class="dropdown" style=" display: inline-block; margin-right: 20px">
            <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="flag-icon flag-icon-us me-1"></span> <span>English</span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item" id="English" href="#"><span class="flag-icon flag-icon-us me-1"></span> <span>English</span></a>
                </li>
                <li>
                    <a class="dropdown-item" id="Dari" href="#"><span class="flag-icon flag-icon-af me-1"></span> <span>Dari</span></a>
                </li>
                <li>
                    <a class="dropdown-item" id="Pushto" href="#"><span class="flag-icon flag-icon-af me-1"></span> <span>Pushto</span></a>
                </li>
               
            </ul>
        </div>


    </div>
</nav>

<script>

    var element = $("#<?php echo $language ?>");
    $(".dropdown-menu .dropdown-item").removeClass("active");
    $(element).addClass("active"); 
    $(element) .parents(".dropdown") .find(".btn") .html("<span class='flag-icon flag-icon-us me-1'></span>" + $(element).text());


  if ($(".dropdown").length) {
    $(document).on("click", ".dropdown-menu .dropdown-item", function (e) {
        e.preventDefault();
        if (!$(this).hasClass("active")) {

            if (!$(this).hasClass("active")) {
                $(".dropdown-menu .dropdown-item").removeClass("active");
                $(this).addClass("active");
                $(this)
                    .parents(".dropdown")
                    .find(".btn")
                    .html("<span class='flag-icon flag-icon-us me-1'></span>" + $(this).text());
            }


            spans = this.getElementsByTagName('span');
            console.log(spans[1].innerText)


            document.cookie = "language=" + spans[1].innerText;

            location.reload();
        }
    });
}
</script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

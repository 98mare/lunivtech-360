<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Lunivatech" />

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <link rel="stylesheet" href="images/luniva/luniva_edited.css" type="text/css" />
    <link rel="shortcut icon" href="images/luniva/favicon-50x50.png" type="image/x-icon" />
    
    <link rel="stylesheet" href="css/lightbox.min.css" type="text/css" />
    
    

    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- Document Title -->
    <title>Lunivatech</title>

</head>

<body class="stretched">

    <!-- Document Wrapper -->
    <div id="wrapper" class="clearfix">

        <?php include('./common/header.php') ?>

        <?php 
        if (!isset($_GET["page"])) {
            include 'contents/home.php';
        } else {
            $filename = "contents/{$_GET["page"]}.php";
            if (file_exists($filename))
                include $filename;
        } ?>

        <?php include('./common/footer.php') ?>

    </div>
    <!-- #wrapper end -->

    <!-- Go To Top -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>

    <!-- Footer Scripts -->
    <script src="js/functions.js"></script>

    <script>
        // $('.toggle').on('mouseenter', function(e){
        //     let selHov = $(this);
        //     selHov.toggleClass('toggle-active');
        //     $(this.lastElementChild).toggle('fast');
        // })
        // $('.toggle').on('mouseleave', function(e){
        //     let selHov = $(this);
        //     selHov.toggleClass('toggle-active');
        //     $(this.lastElementChild).toggle('fast');
        // })
    </script>
    <!-- <script src="js/lightbox.js"></script> -->
    <script src="js/lightbox.min.js"></script>
</body>

</html>
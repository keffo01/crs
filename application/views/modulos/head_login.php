<head>
    <title><?=EMPRESA?> </title>
  
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?=base_url();?>\files\assets\images\cruz-roja-favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\icon\themify-icons\themify-icons.css">
      <!-- owl carousel css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\bower_components\owl.carousel\css\owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\bower_components\owl.carousel\css\owl.theme.default.css">
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\bower_components\swiper\css\swiper.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\icon\icofont\css\icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\icon\font-awesome\css\font-awesome.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\icon\feather\css\feather.css">
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\pages\notification\notification.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\bower_components\animate.css\css\animate.css">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\pages\prism\prism.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\css\style.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\css\jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\css\pcoded-horizontal.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>\files\assets\css\estilos.css">
    <script>
        function launchFullScreen(element) {
            if (element.requestFullScreen) {
                element.requestFullScreen();
            } else if (element.mozRequestFullScreen) {
                element.mozRequestFullScreen();
            } else if (element.webkitRequestFullScreen) {
                element.webkitRequestFullScreen();
            }
        }
    </script>
    <?php if (!empty($opengraph)):?>
			<?php echo facebook_opengraph_meta($opengraph);?>
		<?php endif;?>
</head>

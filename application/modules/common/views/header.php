<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title> <?php if(isset($site_title)){echo $site_title;}else{echo "Sri Lanka Customs";} ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<?php
		if(isset($meta_array) && !empty($meta_array)){
			foreach($meta_array AS $item){
				echo '<meta name="'.$item['name'].'" content="'.$item['content'].'" />';
				}
		}
	?>
	<?php
		if(isset($meta_og_array) && !empty($meta_og_array)){
			foreach($meta_og_array AS $item){
				echo '<meta property="'.$item['property'].'" content="'.$item['content'].'" />';
				}
		}
	?>
	
	<!-- Bootstrap Core Css -->
    <link href="<?php echo BASEURL; ?>public/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo BASEURL; ?>public/vendor/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo BASEURL; ?>public/vendor/animate-css/animate.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="<?php echo BASEURL; ?>public/vendor/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo BASEURL; ?>public/vendor/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo BASEURL; ?>public/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo BASEURL; ?>public/css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<!-- <link rel="stylesheet" href="<?php	echo BASEURL;?>public/fonts/webfonts/stylesheet.css"> -->

	<?php

		if(isset($css_array) && !empty($css_array)){

			foreach($css_array AS $item){
					echo '<link rel="stylesheet" href="'.BASEURL.'public/css/'.$item.'" type="text/css" />'."\n";
				}

		}

	?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Jquery Core Js -->
    <script src="<?php echo BASEURL; ?>public/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo BASEURL; ?>public/vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo BASEURL; ?>public/vendor/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo BASEURL; ?>public/vendor/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo BASEURL; ?>public/vendor/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo BASEURL; ?>public/vendor/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo BASEURL; ?>public/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo BASEURL; ?>public/vendor/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo BASEURL; ?>public/vendor/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo BASEURL; ?>public/vendor/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo BASEURL; ?>public/vendor/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo BASEURL; ?>public/vendor/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo BASEURL; ?>public/vendor/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo BASEURL; ?>public/vendor/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo BASEURL; ?>public/vendor/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo BASEURL; ?>public/js/admin.js"></script>
    <script src="<?php echo BASEURL; ?>public/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo BASEURL; ?>public/js/demo.js"></script>
	
	<?php

	if(isset($js_array) && !empty($js_array))
	{
		foreach($js_array AS $item){
				echo  '<script type="text/javascript"  src="'.BASEURL.'public/js/'.$item.'"  ></script>'."\n";

		}

	}

	?>
  </head>


<body class="theme-red">
	<div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
                </svg>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>

<script>
$(document).ready(function(){

});
</script>
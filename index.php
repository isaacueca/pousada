<?php
include("header.php")
?>
<?php

$page = $_GET['page'];

?>

<?php if ($page == "home" || $page == ""){?>
<body id="home">
<? }else{ ?>
<body>
	
<?php } ?>

<?php


if ($page == "home" || $page == ""){
	include("home.php");
}elseif ($page == "about"){
	include("about.php");
}elseif ($page == "lazer"){
	include("lazer.php");
}
elseif ($page == "eventos"){
	include("eventos.php");
}
elseif ($page == "fotos"){
	include("fotos.php");
}
elseif ($page == "comochegar"){
	include("comochegar.php");
}
elseif ($page == "contato"){
	include("contato.php");
}
?>


<?php
include("footer.php")
?>

<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAD0Z7Y-9dw5zNt6cEdVKVILHdt76ohqGs&sensor=false"></script>
<script src="js/jquery.scripts.js"></script>

<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="js/selectivizr-min.js"></script>
<![endif]-->

</body>
</html>
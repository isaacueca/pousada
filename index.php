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
<script src="js/jquery.scripts.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#contactForm").validate({
		debug: false,
		rules: {
			nome: "required",
			email: {
				required: true,
				email: true
			},
			mensagem: "required"
		},
		messages: {
			nome: "Favor entrar seu nome.",
			email: "Favor entrar um email válido.",
			mensagem: "Favor entrar uma mensagem."
		},
		submitHandler: function(form) {
			// do other stuff for a valid form
			$.post('submit_mail.php', $("#contactForm").serialize(), function(data) {
				$('.results').html("");
				alert("Mensagem enviada com sucesso!")
				$('.results').html(data);
				//clean form
				$('#contactForm')[0].reset();
			});
		}
	});
});
</script>
<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="js/selectivizr-min.js"></script>
<![endif]-->

</body>
</html>
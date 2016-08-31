<header class="container-fluid paymentHeader">
	<section class="payment">
		<div class="logo-holder">
			<img class="" src="<?php echo $this->webroot;?>img/Logo-Home.png">
		</div>
	</section>
</header>

<section class="container success_container">
	<div class="success_message" style="background-color:#121317; color:#fff;">
		<span>Su pago ésta siendo procesado, en breves momentos recibirá un correo con la información.</span>
	</div>
</section>

<footer class="clearfix">
		<section class="footer">
			<div class="social-net" style="float:left;">
				<div class="right resp-opt">
					<img onclick="window.open('https://www.facebook.com/3dlinkVzla');" src="<?php echo $this->webroot;?>img/facebook-ico.png">
					<img onclick="window.open('https://www.instagram.com/3dlinkvzla/');" src="<?php echo $this->webroot;?>img/instagram-ico.png" style="padding-left: 10px;">
				</div>
			</div>
			<div class="copyright" style="float:left;">
				<p class="right">All rights reserved, 3D Link. 2016</p>
			</div>
		</section>
</footer>

<script type="text/javascript">
$(document).ready(function(){
	$(".success_container").height(window.innerHeight - $("header").height() - 97 );

	$(window).resize(function(){
		$(".success_container").height(window.innerHeight - $("header").height() - 97 );
	});
})

</script>
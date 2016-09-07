<header class="container-fluid paymentHeader">
	<section class="payment">
		<div class="logo-holder">
			<a href="<?php echo $this->webroot;?>"> <img class="" src="<?php echo $this->webroot;?>img/Logo-Home.png"></a>
		</div>
	</section>
</header>

<div class="container success_container">
	<div style = "width:100%; display:table-cell; vertical-align: middle;">
		<div class="success_message" style="background-color: #f2dede; color: #a94442;">
			<span><?php echo __("Your payment has not been made ​​, in a few moments you will receive an email with the information.") ?></span>
		</div>

		<div class="back-btn">
			<a href="<?php echo $this->webroot; ?>"><button class="btn btn-primary"><?php echo __("Back") ?></button></a>
		</div>
	</div>
</div>

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
	$(".success_container").height(window.innerHeight - $("header").height() - 90 );

	$(window).resize(function(){
		$(".success_container").height(window.innerHeight - $("header").height() - 90 );
	});
})

</script>
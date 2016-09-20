<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		3D Link
	</title>
	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('awesome');

	echo $this->Html->css('owl.carousel');
	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('dlink');
	echo $this->Html->css('flip');
	echo $this->Html->css('slick');
	echo $this->Html->css('animate');
	echo $this->Html->css('multiple-select');
	echo $this->Html->css('toastr.min');

	echo $this->Html->script('jquery-2.2.0.min');
	echo $this->Html->script('owl.carousel.min');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('parallax');
	echo $this->Html->script('slick.min');
	echo $this->Html->script('scrollTo');
	echo $this->Html->script('multiple-select');
	echo $this->Html->script('toastr.min');


	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.8, user-scalable=no">
</head>
<body>
	<script type="text/javascript">
		$( "body" ).scrollTop( 0 );
		$("body").css("overflow", "hidden");
		$(window).load(function(){
			$("body").css("overflow-y", "scroll");
			$('#loading').css('display', 'none');
		})
		var WEBROOT = '<?php $this->webroot; ?>';
		$(function () {
			$('.navbar-menu2').css('height', $(window).height() );
			$('.navbar-toggler').on('click', function(event) {
				event.preventDefault();
				$(this).closest('.navbar').toggleClass('open');
			})


			// $('.menu-options-mobile a').on('click', function(){
			// 	$('.myMenuMobile .navbar-toggler').click();
			// })

			$('.myMenuMobile .navbar-toggler').on('click', function(event) {
				event.preventDefault();
				$('.navbar-menu2').toggleClass('open2');
				$(this).closest('.navbar2').toggleClass('open2');

				if( $('.navbar2').hasClass('open2') ){
					$('section').css('display', 'none');
					$( ".navbar-menu2" ).animate({
						height: "show"
					}, 2000);
				}
				else{
					$('section').css('display', 'block');
					$( ".navbar-menu2" ).animate({
						height: "toggle"
					}, 2000);
				}
			})

			if( $(window).width() <= 770 ){
				if( $(window).width() > $(window).height() ){
					$('.navbar-menu2').css('min-height', '550px' );
				}
			}

			$(window).resize(function(){
				if( $(window).width() > 770 ){
					if($('.navbar-menu2').hasClass('open2')){
						$('.myMenuMobile .navbar-toggler').click();
					}
					$('.navbar-menu2').css('display', 'none');
					$('.myMenuWeb ul').css('display', 'block');
				}
				else{
					if($('.navbar-menu').hasClass('open')){
						$('.myMenuWeb .navbar-toggler').click();
					}
					$('.navbar-menu').css('display', 'none');
				}
				$('.navbar-menu2').css('height', $(window).height() );
			})


		});
	</script>
	<div id="content" style="position:relative;">
		<div class="navbar-menu2">
			<div style="text-align: center;">
				<img class="menuMobileImg" src="img/Logo-Home.png">
			</div>
			<div class="menu-options-mobile">
				<a onclick="$('.myMenuMobile .navbar-toggler').click(); setTimeout(function() {$('body').scrollTo('#aboutus',2000);}, 2200);" class="animate2">
					<span class="desc animate2">
						<?php 
        					if ($this->session->read('Config.language') == 'eng'){
          						echo __("About Us");
					        }
					        else{
					          	echo "Sobre Nosotros";
					        }
					    ?>
					</span>
				</a>
				<div class="liner-menu" style="margin: 0 auto; margin-top:6vh; margin-bottom:6vh;"></div>

				<a onclick="$('.myMenuMobile .navbar-toggler').click(); setTimeout(function() {$('body').scrollTo('#o-work',2000);}, 2200);" class="animate2">
					<span class="desc animate2"> 
						<?php 
        					if ($this->session->read('Config.language') == 'eng'){
          						echo __("Our Work");
					        }
					        else{
					          	echo "Nuestro Trabajo";
					        }
					    ?>
					</span>
				</a>
				<div class="liner-menu" style="margin: 0 auto; margin-top:6vh; margin-bottom:6vh;"></div>

				<a onclick="$('.myMenuMobile .navbar-toggler').click(); setTimeout(function() {$('body').scrollTo('#w-offer',2000);}, 2200);"  class="animate2">
					<span class="desc animate2"> 
						<?php 
        					if ($this->session->read('Config.language') == 'eng'){
          						echo __("What We Offer");
					        }
					        else{
					          	echo "Lo Que Ofrecemos";
					        }
					    ?>
					</span>
				</a>
				<div class="liner-menu" style="margin: 0 auto; margin-top:6vh; margin-bottom:6vh;"></div>

				<a onclick="$('.myMenuMobile .navbar-toggler').click(); setTimeout(function() {$('body').scrollTo('#contactus',2000);}, 2150);" class="animate2">
					<span class="desc animate2"> 
						<?php 
        					if ($this->session->read('Config.language') == 'eng'){
          						echo __("Contact Us");
					        }
					        elseif ($this->session->read('Config.language') == 'esp'){
					        	echo "Contáctanos";
					        }
					    ?>
					</span>
				</a>
			</div>
		</div>
		<nav class="myMenuMobile navbar2 navbar-fixed-right" role="navigation">
			<div class="navbar-toggler ">
				<span class="menu-icon"></span>
			</div>
		</nav>




		<nav class="myMenuWeb navbar navbar-fixed-left" role="navigation">
			<div class="navbar-toggler animate2">
				<span class="menu-icon"></span>
			</div>
			<ul class="navbar-menu animate2">
				<li>
					<a onclick="$('body').scrollTo('#aboutus',2000);"  class="animate2">
						<span class="desc animate2">
						<?php 
        					if ($this->session->read('Config.language') == 'eng'){
          						echo __("About Us");
					        }
					        else{
					          	echo "Sobre Nosotros";
					        }
					    ?>
					</span>
					</a>
				</li>
				<div class="liner-menu"></div>
				<li>
					<a onclick="$('body').scrollTo('#o-work',2000);" class="animate2">
						<span class="desc animate2"> 
						<?php 
        					if ($this->session->read('Config.language') == 'eng'){
          						echo __("Our Work");
					        }
					        else{
					          	echo "Nuestro Trabajo";
					        }
					    ?>
					</span>
					</a>
				</li>
				<div class="liner-menu"></div>
				<li>
					<a onclick="$('body').scrollTo('#w-offer',2000);"  class="animate2">
						<span class="desc animate2"> 
						<?php 
        					if ($this->session->read('Config.language') == 'eng'){
          						echo __("What We Offer");
					        }
					        else{
					          	echo "Lo Que Ofrecemos";
					        }
					    ?>
					</span>
					</a>
				</li>
				<div class="liner-menu"></div>
				<li>
					<a onclick="$('body').scrollTo('#contactus',2000);" class="animate2">
						<span class="desc animate2"> 
						<?php 
        					if ($this->session->read('Config.language') == 'eng'){
          						echo __("Contact Us");
					        }
					        elseif ($this->session->read('Config.language') == 'esp'){
					        	echo "Contáctanos";
					        }
					    ?>
					</span>
					</a>
				</li>
			</ul>
		</nav>


		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	</div>




	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

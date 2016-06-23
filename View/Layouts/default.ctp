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

		echo $this->Html->script('jquery-2.2.0.min');
		echo $this->Html->script('owl.carousel.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('parallax');
		echo $this->Html->script('slick.min');
		echo $this->Html->script('scrollTo');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.8, user-scalable=no">
</head>
<body>
		<script type="text/javascript">
		var WEBROOT = '<?php $this->webroot; ?>';

		$(function () {
    
	    	$('.navbar-toggler').on('click', function(event) {
				event.preventDefault();
				$(this).closest('.navbar-minimal').toggleClass('open');
			})
		});
		</script>
		<div id="content">

			<nav class="navbar navbar-fixed-left navbar-minimal animate2" role="navigation">
					<div class="navbar-toggler animate2">
						<span class="menu-icon"></span>
					</div>
					<ul class="navbar-menu animate2">
						<li>
							<a onclick="$('body').scrollTo('#aboutus',2000);"  class="animate2">
								<span class="desc animate2"> About Us </span>
								<span class="glyphicon glyphicon-user"></span>
							</a>
						</li>
						<li>
							<a onclick="$('body').scrollTo('#o-work',2000);" class="animate2">
								<span class="desc animate2"> Our Work </span>
								<span class="glyphicon glyphicon-phone"></span>
							</a>
						</li>
						<li>
							<a onclick="$('body').scrollTo('#w-offer',2000);"  class="animate2">
								<span class="desc animate2"> What We Offer </span>
								<span class="glyphicon glyphicon-info-sign"></span>
							</a>
						</li>
						<li>
							<a onclick="$('body').scrollTo('#contactus',2000);" class="animate2">
								<span class="desc animate2"> Contact Us </span>
								<span class="glyphicon glyphicon-comment"></span>
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

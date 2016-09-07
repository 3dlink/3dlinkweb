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


		/* Daniel */
		echo $this->Html->css('payment');
		/* Daniel */

		echo $this->Html->script('jquery-2.2.0.min');
		echo $this->Html->script('owl.carousel.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('parallax');
		echo $this->Html->script('slick.min');
		echo $this->Html->script('scrollTo');
		echo $this->Html->script('multiple-select');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.8, user-scalable=no">
</head>
<body>

<?php
	$uri = explode("?", $_SERVER['REQUEST_URI'])[0];
?>

		<div id="content" style="position:relative;">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		<div class="language">
			<ul>
				<li class="flag"><a href="<?php echo $uri .'?language=esp'; ?>"><img src="<?php echo $this->webroot;?>img/Flag_of_Spain.png"></a></li>
				<li class="flag"><a href="<?php echo $uri .'?language=eng'; ?>"><img src="<?php echo $this->webroot;?>img/Flag_of_United_Kingdom.png"></a></li>
			</ul>
		</div>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

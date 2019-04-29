<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_2_Wordpress
 */

?>

<?php wp_footer(); ?>

<!-- SIGN UP  -->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-6 col-sm-offset-3">
				<p>Are you ready to take your coding skills to the <span>next level</span>?</p>
				<a href="" class="btn btn-success btn-lg btn-block">
					Yes, sign me up!
				</a>
			</div>
		</div>
	</div>
</section>

<!-- MODAL -->
<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="modalLabel"><i class="fa fa-envelope"> Subscribe to our mailing list</i></h4>
			</div>
			<div class="modal-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sit dolores optio illo debitis harum cumque explicabo aut adipisci laudantium error neque quod ipsam deleniti magni aliquid, eum <em>pariatur iure!</em>
				</p>
				<form class="form-inline" role="form">
					<div class="form-group">
						<label for="subscribe-name" class="sr-only">
							Your first name
						</label>
						<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
					</div>
					<div class="form-group">
						<label for="subscribe-email" class="sr-only">
							Your email
						</label>
						<input type="email" class="form-control" id="subscribe-email" placeholder="Your email">
					</div>

					<input type="submit" class="btn btn-danger" value="subscribe">

				</form>
				<hr />

				<p>
					<small>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis delectus, dicta perspiciatis. A fuga minima, accusantium dicta. Natus, officia, ullam?
					</small>
				</p>

			</div>
		</div>
	</div>
</div>

<a href="#top" class="scroll2Top">
	<i class="fa fa-arrow-up"></i>
</a>

<!-- FOOTER -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="">
			</div>
			<div class="col-sm-6">
				<nav>

					<?php
						wp_nav_menu( array(
							'theme_location'		=>		'footer',
							'container'					=>		'ul',
							'menu_class'				=>		'list-unstyled footer-navbar'
						));
					?>

				</nav>
			</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-3">
				<a href="http://wwproject.eu">WWProjects Studio &copy; <?php echo date('Y'); ?></a>
			</div>
		</div>
	</div>
</footer>

<!-- BOOTSTRAP SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js" charset="utf-8"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js" charset="utf-8"></script>

</body>
</html>

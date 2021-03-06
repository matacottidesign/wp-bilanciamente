<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="bg-dark">
	<div class="container">
		<div class="row pt-5">
			<div class="col-6 col-md-3 footer-col pb-5">
				<div class="logo-svg mb-5"></div>
				<span>Orgogliosamente sviluppato con il <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-suit-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/></svg> da <a style="color: #a1daf8;" href="matacottidesign.it">Matacotti Design</a></span>
				<br>
				<a href="http://www.freepik.com"> Progettato da slidesgo / Freepik </a>
				<a href="#">Privacy Policy</a>
			</div>

			<div class="col-6 col-md-3 footer-col pb-5">
				<h3>Scopri BilanciaMente</h3>
				<ul>
					<li>
						<a style="color: #f8f9fa;" href="#">Blog</a>
					</li>
					<li>
						<a style="color: #f8f9fa;" href="#">Libri</a>
					</li>
					<li>
						<a style="color: #f8f9fa;" href="#">Esercizi</a>
					</li>
				</ul>
			</div>

			<div class="col-6 col-md-3 footer-col pb-5">
				<h3>Categorie</h3>
				<ul>
					<li>
						<a style="color: #f8f9fa;" href="#">Tempo</a>
					</li>
					<li>
						<a style="color: #f8f9fa;" href="#">Produttività</a>
					</li>
					<li>
						<a style="color: #f8f9fa;" href="#">Crescita personale</a>
					</li>
					<li>
						<a style="color: #f8f9fa;" href="#">Catalogo libri</a>
					</li>
					<li>
						<a style="color: #f8f9fa;" href="#">Esercizi</a>
					</li>
				</ul>
			</div>

			<div class="col-6 col-md-3 footer-col pb-5">
				<h3>Social</h3>
				<ul>
					<li>
						<a style="color: #f8f9fa;" href="#">Instagram</a>
					</li>
					<li>
						<a style="color: #f8f9fa;" href="#">Facebook</a>
					</li>
					<li>
						<a style="color: #f8f9fa;" href="#">Twitter</a>
					</li>
					<li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<button type="button" class="btn-tornasu btn fixed-bottom mb-3 ml-3">
<a href="#">
<svg width="35px" height="35px" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg>
</a>
</button>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


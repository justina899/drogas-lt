<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drogas.lt
 */

get_header();


$query = new WP_Query(
	array(
		'post_type' => 'merchandices'
	)
);


?>
<div class="container">
	<main id="primary" class="site-main">

		<table class="table table-hover border border-1 mt-4 mb-5">
			<thead>
				<tr>
					<th>pavadinimas</th>
					<th>kaina</th>
					<th>photo</th>
				</tr>
			</thead>
			<tbody>
				<?php
                if ($query->have_posts()) {
	                while ($query->have_posts()) {
		                $query->the_post();
                ?>
				<tr>

					<td>
						<?= get_field('pavadinimas', get_the_ID()); ?>
					</td>
					<td>
						<?= get_field('kaina', get_the_ID()); ?>
					</td>
					<td>
					<img src=<?= get_field('pic', get_the_ID())['url'] ?> class="small" alt="...">

					</td>
				</tr>
				<?php
	                }
                }
                ?>
			</tbody>
		</table>
		<!-- <img src="<?php echo get_bloginfo('template_url') ?>/images/img1.jpg"/> -->

		<div class="row">
			<?php
        if ($query->have_posts()) {
	        while ($query->have_posts()) {
		        $query->the_post();
        ?>		
			<div class="col-md-3">
				<div class="card mt-2" style="width: 18rem;">
					<img src=<?= get_field('pic', get_the_ID())['url'] ?> class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">
							<?= get_field('pavadinimas', get_the_ID()); ?>
						</h5>
						<p class="card-text">
							<?= get_field('kaina', get_the_ID()); ?>
						</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<?php }
        } ?>
		</div>
	</main><!-- #main -->
</div>
<?php
// get_footer();

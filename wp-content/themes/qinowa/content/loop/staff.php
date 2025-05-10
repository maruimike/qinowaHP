<?php
$title = get_field('p_title');
$name = get_field('p_name');
$store = get_field('p_store');
$position = get_field('p_position');

?>
<article class="archive">
	<a href="<?php the_permalink(); ?>" class="archive_link">
		<h2 class="archive_head">
			<?php echo $title; ?>
		</h2>
		<div class="archive_body">
			<?php if(has_post_thumbnail()) : 
				$image = oc_get_image_src( get_post_thumbnail_id() );
				?>
				<div class="archive_eyecatch">
					<img src="<?php echo $image;?>" class="fitimg" alt="">
				</div>
			<?php endif; ?>
			<div class="archive_summery">
				<?php
				if ($name) {
					?>
					<p class="archive_name"><?php echo $name; ?></p>
				<?php
				}?>
				
				<?php
				if ($store) {
					?>
					<p class="archive_label"><span><?php echo $store; ?></span></p>
				<?php
				}?>
				
				<?php
				if ($position) {
					?>
					<div class="archive_lead">
						<p><?php echo $position; ?>
						</p>
					</div>
					<?php
				}
				?>


			</div>
		</div>
	</a>
</article>
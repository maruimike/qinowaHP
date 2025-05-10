
	<div class="column-categories">
		<ul class="column-categories_list">
			<?php
                        $terms = get_terms('category');
                        if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                echo '<li><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li> ';
                            }
                        }
                    ?>
		</ul>
	</div>
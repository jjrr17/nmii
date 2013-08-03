<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
  <?php the_secondary_content('Header text'); ?>
<?php
	$parents = get_post_ancestors($post->ID);
	$slideshow = false;
	$startat = false;
	if (count($parents) === 0) {
		// Overview page
		$slideshow = true;
		$sec = get_pages(array('sort_column'=>'menu_order', 'sort_order'=>'ASC', 'child_of' => $post->ID));
		$first_img = get_the_post_thumbnail( $post->ID, 'full' );
		for ($i=0, $max=count($sec); $i<$max; $i++) {
			if (stristr($sec[$i]->post_title, 'project showcase')) {
				$startat = $sec[$i]->ID;
				break;
			}
		}
	} else {
		$title = get_the_title();
		if (stristr($title, 'project showcase')) {
			$slideshow = true;
			$startat = $post->ID;
			$first_img = get_the_post_thumbnail( $post->ID, 'full' );
		}
	}
	if (!$slideshow):
		$img = get_the_post_thumbnail( $post->ID, 'full' );
?>
		<div id="headerImage">
			<?php echo $img; ?>
		</div>
<?php	else: 
	if ($startat) {
	$projects = get_pages(array('sort_column'=>'menu_order', 'sort_order'=>'ASC', 'child_of' => $startat));
	}
	?>
	<div id="slideshow"><div id="slides">
		<?php echo $first_img; ?>
		<?php if ($startat): ?>
		<?php for ($i=0, $max=count($projects); $i<$max; $i++) : ?>
			<a href="<?php echo get_page_link($projects[$i]->ID)?>" title="<?php echo $projects[$i]->post_title ?>"><?php echo get_the_post_thumbnail( $projects[$i]->ID, 'full' )?></a>
		<?php endfor; ?>
		<?php else : 
		// Custom section slideshow, temporary workaround until section is live
			for ($i=1; $i<7; $i++) {
				echo '<img src="/wp-content/themes/nmi/img/energy-slideshow/energy'.$i.'.jpg" />';
			}
		?>
		<?php endif; ?>
		</div>
		<div id="controlBar">
		</div>
	</div>

<?php endif; ?>
<?php
		echo '<div id="left-submenu">';
		$children = '';
		$top = '';

		$count = count(get_post_ancestors($post->ID));
		$mainSelected = false;
		if(is_page() && $count == 0) {
			$mainSelected = true;
			$mainID = $post->post_ID;
			$children .= wp_list_pages("title_li=&child_of={$post->ID}&echo=0");
		} else if ($count == 1) {
			$mainID = $post->post_parent;
			$children .= wp_list_pages("title_li=&child_of={$post->post_parent}&echo=0");
		} else if($count == 2) {
			$grandparent = get_post($post->post_parent);
			$mainID = $grandparent;
			$children .= wp_list_pages("title_li=&child_of={$grandparent->post_parent}&echo=0");
		}

		if (strlen($slideID) < 1) $slideID = $post->post_ID;
		$p = get_pages(array('sort_column'=>'menu_order', 'sort_order'=>'ASC', 'child_of' => $mainID));
		if ($children) {
			echo '<ul class="nav">';
			// Handle "overview page"
			echo '<li class="';
			if ($mainSelected) { echo 'current_page_item'; }
			echo '"><a href="', get_permalink($mainID), '">';
			echo strip_tags(get_secondary_content('Menu Title', $mainID));
			echo '</a></li>';
			// ****
			echo $children;
			echo '</ul>';

			if ($top) echo '</ul>';
		}
		echo '</div>';
?>							

			<div class="content">
							<?php the_content(); ?>
			</div>
<?php endwhile; ?>		
			

<?php get_footer(); ?>

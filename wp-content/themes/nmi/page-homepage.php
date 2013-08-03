<?php
/*
Template Name: Homepage
*/
?>

<?php 
$class = 'home';
get_header();
global $post;
if (have_posts()) {
	while (have_posts()) {
?>

	<div id="slideshow"><div id="slides">
		<?php 
			$sec = get_pages(array('sort_column'=>'menu_order', 'sort_order'=>'ASC', 'parent'=>0));
			for ($i=1, $max=count($sec); $i<$max; $i++) { ?>
			<a href="<?php echo get_page_link($sec[$i]->ID)?>" title="<?php echo $sec[$i]->post_title ?>"><?php echo get_the_post_thumbnail( $sec[$i]->ID, 'full' )?></a>
			<?php } ?>
			</div>
		<div id="controlBar">
		</div>
	</div>

		<div class="container">
			<h1>design <span class="dot"></span> build <span class="dot"></span> install <span id="icont">industrial contractor</span></h1>
			<div class="row" id="homeIntro">
				<div class="span3 lCol">
					<h2>Millwright Experts</h2>
					<p>Turnkey Solutions from Initial Drawing to Final Installation</p>
				</div>
				<div class="span9">
							<?php
							the_post();
							the_content();
				?>	
				</div>
			</div>
			<hr />
		</div>
		<?php /* ********** Industries */ ?>
		<div class="row">
			<div class="span3 lCol">
			<?php get_sidebar('sidebar2'); // sidebar 2 ?>
				<h2>Industry Solutions</h2>
				<p>Select your industry with a click to learn how our capabilities can help you achieve greater success.</p>
			</div>
<?php
			$portals = get_pages(array('parent'=>'0', 'sort_column'=>'menu_order', 'offset'=>1));
			for ($i=1, $max=count($portals); $i<$max; $i++) :
				$img = '';
				$css = ($i > 3)?' row2':'';
				$css .= ($i % 4 === 0)?' offset3':'';
				$p = $portals[$i];
				$title = str_ireplace(' solutions', '', $p->post_title);
				$link = get_permalink($p->ID);
				$img_html = get_secondary_content('Thumbnail Image', $p->ID);
				if ($img_html) {
					$doc = new DOMDocument();
					$doc->loadHTML($img_html);
					$img_tags = $doc->getElementsByTagName('img');
					foreach ($img_tags as $tag) {
						$img = $tag->getAttribute('src');
						break;
					}
				}
				?>
				<div class="span3 <?php echo $css; ?>"><a id="tn_<?php echo $p->post_name;?>" class="portalSubLinks" href="<?php echo $link?>"><img src="<?php echo $img; ?>"><span><?php echo $title;?></span></a></div>
				<?php endfor; ?>
		</div>
		<?php /* ********* /Industries */ ?>
			
<?php
	}
}
?>

<?php get_footer(); ?>

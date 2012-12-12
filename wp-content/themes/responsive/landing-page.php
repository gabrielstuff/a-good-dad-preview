<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Landing Page Template
 *
   Template Name:  Landing Page (no menu)
 *
 * @file           landing-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/landing-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

        <div id="content-full" class="grid col-940">
        
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="post-title"><?php the_title(); ?></h1> 
                
                <div class="post-entry">
                    <?php the_content(__('Read more &#8250;', 'responsive')); ?>
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->
                
                <?php if ( comments_open() ) : ?>
                <div class="post-data">
				    <?php the_tags(__('Tagged with:', 'responsive') . ' ', ', ', '<br />'); ?> 
                    <?php the_category(__('Posted in %s', 'responsive') . ', '); ?> 
                </div><!-- end of .post-data -->
                <?php endif; ?>             
            
            </div><!-- end of #post-<?php the_ID(); ?> -->

            
        <?php endwhile; ?> 
        
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
        <div class="navigation">
			<div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'responsive' ) ); ?></div>
            <div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'responsive' ) ); ?></div>
		</div><!-- end of .navigation -->
        <?php endif; ?>

	    <?php else : ?>

        <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
        <h6><?php _e( 'You can return', 'responsive' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'responsive' ); ?>"><?php _e( '&larr; Home', 'responsive' ); ?></a> <?php _e( 'or search for the page you were looking for', 'responsive' ); ?></h6>
        <?php get_search_form(); ?>

<?php endif; ?>  
      
        </div><!-- end of #content-full -->

         <div id="widgets" class="home-widgets">
            <?php

            $blocks = simple_fields_get_post_group_values(get_the_id(), "Blocks", true, 2);
            //print_r($blocks);
            $count_block = 1;
            $nb_block = 3;
            foreach ($blocks as $block) { ?>
                <div class="grid col-<?php echo $nb_block;?>00<?php if($count_block%$nb_block == 0){echo " fit";}?>">                
                    <div class="widget-wrapper">
                        <div class="widget-title-home"><h3><?php echo $block["Title"]; ?></h3></div>
                        <div class="textwidget"><?php echo $block["content"]; ?></div>
                    </div><!-- end of .widget-wrapper -->
                </div><!-- end of .col-300 -->                
            <?php
            $count_block++;
            }
            ?>
           </div><!-- end of #widgets -->
            <div class="post-edit"><?php edit_post_link(__('Edit', 'responsive')); ?></div> 

<?php get_footer(); ?>

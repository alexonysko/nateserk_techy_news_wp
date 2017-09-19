<?php
/**
 * Template part for displaying a mini post/item.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */

?>
<!--item-->
<div class="pure-g pure-u-sm-1 pure-u-md-10-24 pure-u-10-24 content-item-mini">
    <div class="pure-u-md-1 pure-u-sm-1 pure-u-1"><a href="<?php echo esc_url( get_permalink() ); ?>">
      <?php
        $recent_html = nateserk_techy_news_setup_recent_label();
        $tb_size = array();
        $tb_attr = array("class"=>'pure-u-1', "title"=>get_the_title() );
        if( has_post_thumbnail() ){
          echo get_the_post_thumbnail( null, $tb_size, $tb_attr);
        } else {
          echo '<img src="' .get_template_directory_uri() .'/assets/img/300x190_fff.png" class="pure-u-1 pure-u-sm-1 pure-u-md-1"/></a>';
        }
      ?>
    </div>
    <div class="pure-u-md-1 pure-u-sm-1 pure-u-1">
      <?php
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' .$recent_html ); ?>
      <?php
        the_content( sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( '<button class="button-error pure-button site-primary-reading_button">Continue reading<span class="screen-reader-text"> "%s"</span></button>', 'nateserk_techy_news' ),
            array(
              'span' => array(
                'class' => array(),
              ),
              'button'=>array(
                'class'=> array()
              )
            )
          ),
          get_the_title()
        ) );
        ?>

    </div>
</div>
<!--item-->

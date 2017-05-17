<?php get_header(); ?>

 <!-- パンくず -->
      <?php get_template_part('banner');?>
    <div class="row">
    <div class="large-12 columns"  id="single_cont">
     

      <?php $cat = get_the_category(); ?>
      <?php $cat = $cat[0]; ?>
      <h1><?php echo get_cat_name($cat->term_id); ?></h1>
      </div>
      </div> 

    <div class="row">
    <div class="large-9 columns"  id="single_cont">

      <?php
      global $wp_query;
      $args = array_merge( $wp_query->query, array( 'posts_per_page' => 10 ) );
      query_posts( $args );        
      $x = 0;
      while (have_posts()) : the_post(); ?>                       

      <?php ?>

        <div class="panel row">
          <div class="large-3 columns ">
            <a href="<?php the_permalink(); ?>" class="th" role="button" aria-label="Thumbnail">
            <?php if ( has_post_thumbnail() ) {?>
              <?php the_post_thumbnail('home-post-box'); ?>
            <?php }elseif(my_post_thumbnail() !=""){ ?>
              <?php my_post_thumbnail(); ?>
            <?php } ?>
            </a>
          </div>

          <div class="large-9 columns ">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php echo mb_substr(get_the_excerpt(),0, 100);?>...
            <a href="<?php the_permalink();?>">Read more</a>
          </div>
          
         </div>
         <br>


        <?php if($x == 2) { $x = -1; ?>
          <div class="clear"></div>
        <?php } ?>
      
      <?php $x++; ?>
      <?php endwhile; ?>                
      
      <!-- Nabigasion -->
      <ul class="pagination ">
        <li class="arrow large-2 columns"><?php next_posts_link('&laquo;　前へ'); ?></li>
        <li class="arrow large-2 columns"><?php previous_posts_link('次へ　&raquo;'); ?></li>
      </ul>

    </div>
    <div class="large-3 columns sidebar"  id="single_cont">
      <?php dynamic_sidebar('sidebar'); ?>
    </div>
<?php get_footer(); ?>   
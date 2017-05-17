<?php 

get_header(); ?>


    <div class="row">
    <div class="large-12 columns small-12 columns"  id="single_cont">
      <!-- パンくず -->

<?php get_template_part('banner');?>

    <!-- 記事 -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>          

      <h2 class="single_title"><?php the_title(); ?></h2>
      <hr/>
      <div>
      
      <?php the_content(); ?>
      

      </div><!--//single_inside_content-->
      <br /><br />
      
      <!-- コメントは使用しない -->
      <?php /*comments_template();*/ ?>

    <?php endwhile; else: ?>
      <h3>Sorry, no posts matched your criteria.</h3>
    <?php endif; ?>                       
    

    </div>
      </div>

      <div class="row">
        <div class="large-12 small-12 columns">
        <a class="th" role="button" aria-label="Thumbnail" target="_blank" href="http://inacosara.com/" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/inacosara-banner2.png">
          </a>
        </div>
      </div>
<?php get_footer(); ?>   
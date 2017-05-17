<?php get_header(); ?>
    <div class="row">
    <div class="large-12 columns small-12 columns"  id="single_cont">
      <!-- パンくず -->
    <?php get_template_part('banner');?>


    <!-- 記事 -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>          

      <!-- Nabigasion -->
      <ul class="pagination ">
        <li class="arrow large-2 columns"><?php previous_post_link('%link', '&laquo;　前の記事へ'); ?></li>
        <li class="arrow large-2 columns"><?php next_post_link('%link', '次の記事へ　&raquo;'); ?></li>
      </ul>


      <h2 class="single_title"><?php the_title(); ?></h2>
      <hr/>
      <div>
      
      <?php the_content(); ?>
      

      </div><!--//single_inside_content-->
      <br /><br />
      
      <!-- コメントは使用しない -->
      <?php /*comments_template();*/ ?>

      <!-- Nabigasion -->
       <ul class="pagination ">
        <li class="arrow large-2 columns"><?php previous_post_link('%link', '&laquo;　前の記事へ'); ?></li>
        <li class="arrow large-2 columns"><?php next_post_link('%link', '次の記事へ　&raquo;'); ?></li>
      </ul>

    <?php endwhile; else: ?>
      <h3>Sorry, no posts matched your criteria.</h3>
    <?php endif; ?>                       
    


    </div>
      </div>
<?php get_footer(); ?>   
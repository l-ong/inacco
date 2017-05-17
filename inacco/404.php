<?php 

get_header(); ?>
    <div class="row">
    <div class="large-12 columns small-12 columns"  id="single_cont">
      <!-- パンくず -->
      <p >
        <?php if(function_exists('bcn_display_list'))
        {
            bcn_display();
        }?>
      </p>

      <h3>Sorry, no posts matched your criteria.</h3>    

    </div>
      </div>
<?php get_footer(); ?>   
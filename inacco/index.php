<?php get_header(); ?>

      <div class="row">
        <div class="large-4 small-4 columns">
        <a class="th" role="button" aria-label="Thumbnail" href="食べ物イラスト/食べ物イラストwatercolor/" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-1.png">
          </a>
        </div>
        <div class="large-4 small-4 columns">
          <a class="th" role="button" aria-label="Thumbnail" href="食べ物イラスト/食べ物イラストvectorwork/" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-2.png"></a>
        </div>
        <div class="large-4 small-4 columns">
          <a class="th" role="button" aria-label="Thumbnail" href="食べ物イラスト/食べ物イラストother" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-3.png"></a>
        </div>
      </div>

      <div class="row">
        <hr>
        <div class="large-9 columns small-12 columns">
          <h4>イナコ ： イラストレーター／グラフィックデザイナー</h4>
          <p>
          ポップでかわいいイラストと、シズルを意識した食べ物イラスト、
写真おこしのパス画、ゆるめなタッチのイラストなど
様々なイラストを描くことができます。イラストからデザインと、トータルで仕事を受注できます。
<a href="お問合せ/">お問い合わせはフォーム</a>からお願いいたします。
          </p>
          <a href="イラスト製作について/" class="button small"><i class="fi-info"></i> イラスト制作について</a>
        　
        </div>
        <div class="large-3 small-12 columns">
          <img src="http://inacco.com/wp-content/uploads/INACCOINFO.png">
        </div>
      </div>


    <div class="row"  >
      <hr>
        <div class="large-12 columns panel">
          <h4><a href="news/"><i class="fi-megaphone"></i> メインコンテンツ</a></h4>
          <?php dynamic_sidebar('mai_ncontents'); ?>
          </div>

    </div>


      <!-- 最新情報 -->
      <div class="row">
        <hr>
        <div class="large-12 columns panel">
          <h4><a href="news/"><i class="fi-megaphone"></i> 最新情報</a></h4>

          <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
 
            <?php
                 $loop = new WP_Query(array("post_type" => "news","posts_per_page"=>4));
                 if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
            ?>

            <li>
              <a class="th" role="button" aria-label="Thumbnail" href="<?php the_permalink(); ?>" >
               <?php the_post_thumbnail( 'index-box' ); ?></a>
               <div><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></div>
              
            </li>

          <!-- /.container -->
          <?php endwhile; endif; ?>
          </ul>
        </div>
        </div> 

      <!-- いなこにっき -->
      <div class="row ">
        <div class="large-12 columns panel">
          <h4><a href="blog/category/いなこにっき/"><i class="fi-book"></i> いなこにっき</a></h4>
          <p>日々のできごとをユルっと書いています。</p>
          <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
 
            <?php
                 $loop = new WP_Query(array("post_type" => "","posts_per_page"=>4));
                 if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
            ?>

            <li>
              <a class="th" role="button" aria-label="Thumbnail" href="<?php the_permalink(); ?>" >
 <?php the_post_thumbnail( 'index-box' ); ?></a>
              <div><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></div>
            </li>

          <!-- /.container -->
          <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>

      <!-- いなこさら -->
      <div class="row">
        <div class="large-12 small-12 columns panel">
          <h4><a href="いなこさら"><i class="fi-shopping-cart"></i> いなこさら</a></h4>
          <p>いなこが作る印判皿です。</p>
          <a class="th" role="button" aria-label="Thumbnail" href="いなこさら" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/inacosara-banner.png">
          </a>
        </div>
        </div> 

<?php get_footer(); ?>   
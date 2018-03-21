<?php get_header(); ?>
    <header class="jumbotron">
        <div class="container">
            <a href="<?php bloginfo('home'); ?>"><h1><?php the_title(); ?></h1></a>
            <p><?php the_author(); ?></p>
        </div>
    </header>

    <div>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="container">
                    <div class="col-md-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 title-wrapper">
                            <a href="<?php the_permalink() ?>"><h3 class="title"><?php the_title(); ?></h3></a>
                            <span class="date"><?php the_time('j F Y') ?></span>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="col-md-2 tags">
                        <?php
                        if(get_the_tags()){
                            echo "برچسب‌ها <br>";
                            the_tags('','، ','');
                        }
                        ?>

                    </div>
                    <div class="col-md-8 content">
                        <?php the_content('Read More'); ?>
                        <?php comments_template(); ?>
                    </div>
                    <div class="col-md-2 author">
                        نوشته‌شده توسط<br>
                        <?php the_author_posts_link(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <div class="container">
            <div class="navigation" style="text-align: center;">
                <?php posts_nav_link(' | ', 'نوشته‌های جدیدتر', 'نوشته‌های قدیمی‌تر'); ?>
            </div>
        <?php else : ?>
            <div class="row">
          <span class="col-lg-8" id="no-post" >
              <h2>خطای ۴۰۴ | چیزی پیدا نشد.</h2>
              <span>محتوای مورد نظر شما احتمالا حذف شده است. لطفا جستجو نمایید.</span>
              <br><br><br><br>
          </span>
            </div>
            </div>
        <?php endif; ?>
    </div>


<?php wp_footer(); ?>
<?php get_footer(); ?>
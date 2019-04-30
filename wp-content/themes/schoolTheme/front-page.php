<?php get_header(); ?>
    <div id="banner">
        <h1>School Management</h1>
        <h3>Dedicated to Excellence</h3>
    </div>
    <main>
        <a href="/blog">
            <h2 class="section-heading">All Blogs</h2>
        </a>
        <section>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
        );
        $blogposts = new WP_Query($args);
            while($blogposts->have_posts()){
                $blogposts->the_post();
        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="card image">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
                </div>
            </div>  
            <?php } wp_reset_query(); ?>
        </section>
        
        <h2 class="section-heading">Programs</h2>
        <section>
        <?php
        $args = array(
            'post_type' => 'program',
            'posts_per_page' => 2,
        );
        $programs = new WP_Query($args);
            while($programs->have_posts()){
                $programs->the_post();
        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="card image">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
                </div>
            </div>  
            <?php } wp_reset_query(); ?>
            </section>
            <h2 class="section-heading">Admission</h2>
            <section id="section-source">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente reiciendis impedit nam earum veritatis dolorem doloribus in tempore maiores, architecto, sit laudantium minus? Sequi natus quisquam optio modi harum! Id.
                </p>
                <a href="admission.html" class="btn-readmore">Admission Process</a>
            </section>
<?php get_footer(); ?>
<?php wp_footer(); ?>

<div class = "container">

    <div class = "jumbotron">
        <?php query_posts('posts_per_page=1');
        while(have_posts()) : the_post(); ?>
            <div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>

            </div>
        <?php endwhile; wp_reset_query();?>
    </div>

    <div class = "panel panel-default panel-body">
        <div class = "row">
            <div class = "col-md-2">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href = "#">Category One</a></li>
                    <li><a href = "#">Category Two</a></li>
                    <li><a href = "#">Category Three</a></li>
                    <li><a href = "#">Category Four</a></li>
                </ul>
            </div>
            <div class = "col-md-10">
                <a href = "#"><h3>This random post is really awesome!</h3></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class = "text-muted">Posted by Ahsan on January 1st 2014</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>


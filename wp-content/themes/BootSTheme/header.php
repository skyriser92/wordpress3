<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(' | ',true,'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class = "navbar navbar-inverse navbar-static-top">
    <div class = "container">

        <a href = "#" class = "navbar-brand">Bootstrap WordPress Theme</a>

        <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
        </button>

        <div class = "collapse navbar-collapse navHeaderCollapse">

            <ul class = "nav navbar-nav navbar-right">

                <li><a href = "#">Home</a></li>
                <li class = "dropdown">

                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Blog <b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li><a href = "#">Item One</a></li>
                        <li><a href = "#">Item Two</a></li>
                        <li><a href = "#">Item Three</a></li>
                        <li><a href = "#">Item Four</a></li>
                    </ul>

                </li>
                <li class = "dropdown">

                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li><a href = "#">Twitter</a></li>
                        <li><a href = "#">Facebook</a></li>
                        <li><a href = "#">Google+</a></li>
                        <li><a href = "#">Instagram</a></li>
                    </ul>

                </li>
                <li><a href = "#">About</a></li>
                <li><a href = "#contact" data-toggle="modal">Contact</a></li>

            </ul>

        </div>

    </div>
</div>

<div class="panel panel-default panel-body">
    <div>
        <div>
            <ul>
                <?php wp_list_categories('orderby=name&title_li='); ?>
            </ul>
        </div>
    </div>
</div>

<div>
    <?php while(have_posts()) : the_post(); ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php the_excerpt(); ?></p>
    <p> posted by <?php the_author(); ?>
        <?php endwhile; wp_reset_query(); ?>
</div>

<?php echo get_stylesheet_uri(); ?>
<?php wp_head(); ?>

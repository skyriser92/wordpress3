<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(' | ',true,'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Wordpress Blog</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="">Home</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </div>
</nav>





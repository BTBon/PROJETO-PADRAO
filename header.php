<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>">
        
        <title><?php bloginfo('name');?> | <?php is_home() ? bloginfo('description') : wp_title('');?></title>
        
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url');?>/images/icon.png"/>
        <link rel="icon" href="<?php bloginfo('template_url');?>/images/favicon.ico"/>
        <link rel="profile" href="http://gmpg.org/xfn/11"/>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
        
        <!-- Open Graph meta -->
        <meta name="description" content="<?php is_single() ? single_post_title('', true) : bloginfo('name'); echo " - "; bloginfo('description');?>"/>  
        <meta property="og:type" content="website"/>
        <meta name="og:title" content="<?php bloginfo('name');?>"/>
        <meta name="og:description" content="<?php bloginfo('description');?>"/>
        <meta name="og:image" content="<?php bloginfo('template_url');?>/images/icon.png"/>
        <meta name="og:url" content="<?php bloginfo('url');?>"/>
        <meta name="og:locale" content="<?php bloginfo('language');?>"/>
        <link rel="canonical" href="<?php bloginfo('url');?>"/>
        
        <!-- CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>
        <!-- JS -->
        <script>
            var url = "<?php bloginfo('template_url');?>";
            var root = "<?php bloginfo('url');?>";
        </script>
        <!--[if lt IE 9]>
        <script src="dist/html5shiv.js"></script>
        <![endif]-->
        
<?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <header>
            <?php wp_nav_menu();?>
        </header>
        
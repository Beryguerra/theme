<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>"><!-- agarra o utf -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title> <!-- nome do site -->
    <?php wp_head();?><!--tras os standard WP scripts, o top menu WP, e hooka plugins -->
</head>
<body <?php body_class();?>>

<div class="container">

        <header class="site-header">

                    <h1><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
                    <!-- 
                    => <?php bloginfo('name');?> nome do site WORDPRESS 
                        => <a href="<?php echo home_url();?>"> torna o nome do site um link para a nosso home page
                    -->
                    <h5> <?php bloginfo('description');?> </h5><!--Descricao do site ANOTHER WP SITE-->

        </header>


        
    

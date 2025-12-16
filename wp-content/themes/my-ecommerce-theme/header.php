<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php wp_head(); ?>
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="menu">
                <div class="nav-bar">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>
                    <div class="menu-nav">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Products</a></li>
                            <li><a href="">Category</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="user-menu">
                        <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                        <a href=""><i class="fa-regular fa-user"></i></a>
                    </div>    
                </div>
            </div>
        </div>
    </header>
</body>
</html>
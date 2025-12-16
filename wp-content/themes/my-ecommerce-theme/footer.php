<!-- </main>
<footer>
<p>© <?php echo date('Y'); ?> My Shop</p>
</footer>
<?php wp_footer(); ?>
</body></html> -->



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body <?php body_class(); ?>>
    <footer class="site-footer">
        <div class="footer-container">

            <div class="footer-column">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="<?php bloginfo('name'); ?>">
                </a>
                <p><i style="color: #ff0000;" class="fa-solid fa-phone"></i> Franchise InquiriesFranchise Inquiries</p>
                <h3 style="color: #000000ff;" >Franchise@joyo_mart.com</h3>
            </div>

            <div class="footer-column">
                <h4>Menu</h4>
                <ul>
                    <li><a href="<?php echo home_url('/Home'); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/Products'); ?>">Products</a></li>
                    <li><a href="<?php echo home_url('/Category'); ?>">Category</a></li>
                    <li><a href="<?php echo home_url('/About'); ?>">About</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Contact</h4>
                <p>Email: joyo_mart@gmail.com</p>
                <p>Phone: +1 234 567 890</p>
                <p>Address: 123 Joyo St, Commerce City, CO</p>
                <i class="fa-brands fa-weibo"></i>
                <i class="fa-solid fa-comment"></i>
            </div>

        </div>

        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> Privacy Policy | Copyright © 2025 JOYO MART P备2021004007号.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
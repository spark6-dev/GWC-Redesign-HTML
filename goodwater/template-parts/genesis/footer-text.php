<?php if( get_field('footer-text') ):?>
    <div class="container">
        <footer class="footer-text"><?php echo esc_html(get_field('footer-text'));?></footer>
    </div>
<?php endif;?>
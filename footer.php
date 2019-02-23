    <footer class="site-footer">

        <!-- ****************************footer nav tem k ser registado no functions.php*****************-->
        <nav class="footer-nav">
                <?php

                    $args = array(
                        'theme_location' => 'footer',
                    );
                ?>
                                <?php wp_nav_menu($args);?><!-- agarra a nav-->
         </nav>
           <!--******************************** fim do nav menu******************************-->
           
            <p><?php bloginfo( 'name' );?> - &copy; <?php echo date('Y');?></p>
            <!--

            =>   &copy - faz o simbolo do copy right
            =>  <?php echo date('Y');?> para a data
            
            -->

    </footer>
</div><!-- close container vem do header.php-->

<?php wp_footer();?><!--para agarrar as plugins -->
</body>
</html>
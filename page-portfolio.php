<!-- controla o que vai na pagina  do portfolio expecificamente-->
<?php get_header(); ?><!-- agarra o header -->

<?php if (have_posts()) : while(have_posts()) : the_post();?><!--para mostar conteudo dos posts-->

        <article class="post page">

        <!-- COLUMN CONTAINER-->
                <div class="column-container clearfix">
                    
                    <!--TITLE COLUMN-->
                    <div class="title-column">
                        <h2><?php the_title();?></h2><!--mostra o titulo-->
                    <!--TEXT COLUMN-->
                    <div class="text-column">

                         <?php the_content();?><!--mostra o conteudo-->

                    </div>

                    </div>
                
                </div>
                
        </article>

    <?php endwhile;?>  <!-- Fim do WHILE LOOP-->

    <?php else : ?>

            <?php echo'<p> Content not found </p>'?>

<?php endif;?><!--fim do loop para mostrar conteudo-->


<?php get_footer(); ?><!-- Agarra o footer-->
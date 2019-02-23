<?php get_header(); ?><!-- agarra o header -->

<?php if (have_posts()) : while(have_posts()) : the_post();?><!--para mostar conteudo dos posts-->

        <article class="post">
                <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
                <!--
                    => <?php the_title();?> mostra o titulo do post
                    => <a href="<?php the_permalink();?>"> faz do titulo um link 
                -->
                <?php the_content();?><!--mostra o conteudo-->
        </article>

    <?php endwhile;?>  <!-- Fim do WHILE LOOP-->

    <?php else : ?>

            <?php echo'<p> Content not found </p>'?>

<?php endif;?><!--fim do loop para mostrar conteudo-->


<?php get_footer(); ?><!-- Agarra o footer-->
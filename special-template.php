<!-- controla o que vai na pagina -->

<!--
    Template Name: Special Layout

    acima serve para criar um template k pode ser usado em diferentes paginas sem ter k mudar 1a a 1a
-->
<?php get_header(); ?><!-- agarra o header -->

<?php if (have_posts()) : while(have_posts()) : the_post();?><!--para mostar conteudo dos posts-->

        <article class="post page">
                <h2><?php the_title();?></h2>
                <!--
                    => <?php the_title();?> mostra o titulo do post
                    => <a href="<?php the_permalink();?>"> faz do titulo um link 
                -->

                <!-- INFO BOX-->
                <div class="info-box">
                    <h4> Disclaimer Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreet dolore
                         magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco  laborum.</p>
                </div><!-- END OF INFO BOX-->


                <?php the_content();?><!--mostra o conteudo-->
        </article>

    <?php endwhile;?>  <!-- Fim do WHILE LOOP-->

    <?php else : ?>

            <?php echo'<p> Content not found </p>'?>

<?php endif;?><!--fim do loop para mostrar conteudo-->


<?php get_footer(); ?><!-- Agarra o footer-->
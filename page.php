<!-- controla o que vai na pagina -->
<?php get_header(); ?><!-- agarra o header -->

<?php if (have_posts()) : while(have_posts()) : the_post();?><!--para mostar conteudo dos posts-->

        <article class="post page">

        <!-- Mostra as children pages da current page mostrada-->
        <?php $args = array('child_of' => get_top_ancestor_id(), 'title_li' => '');?>
                <?php wp_list_pages($args);?>
                <!--'title_li' => '' retira o pages no topo da lista de child pages-->
       <!--   FIM de mostrar as children pages    -->

                <h2><?php the_title();?></h2>
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
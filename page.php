<!-- controla o que vai na pagina -->
<?php get_header(); ?><!-- agarra o header -->

<?php if (have_posts()) : while(have_posts()) : the_post();?><!--para mostar conteudo dos posts-->

        <article class="post page">

                <?php if (has_children() OR $post->post_parent > 0) {?>

                         <nav class="site-nav children-links clearfix">

                                <!-- mostra sempre no topo da lista o parent das restantes paginas  -->
                                <span class="parent-link"><a href="<?php echo get_permalink(get_top_ancestor_id());?>"><?php echo get_the_title( get_top_ancestor_id() );?></a></span>

                                <!-- Mostra as children pages da current page mostrada-->
                                <ul><?php $args = array('child_of' => get_top_ancestor_id(), 'title_li' => '');?>
                                <?php wp_list_pages($args);?></ul>
                                <!--'title_li' => '' retira o pages no topo da lista de child pages-->

                                <!--   FIM de mostrar as children pages    -->
                         </nav> 

                <?php } ?>
                 
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
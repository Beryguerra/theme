<?php get_header(); ?><!-- agarra o header -->

<?php if (have_posts()) : while(have_posts()) : the_post();?><!--para mostar conteudo dos posts-->

        <article class="post">
                
                <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
                <!--
                    => <?php the_title();?> mostra o titulo do post
                    => <a href="<?php the_permalink();?>"> faz do titulo um link 
                -->

                <!--                    Autor, hora, categorias              -->
                <p class="post-info"><?php the_time('F jS, Y');
                ?> | by <a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> Posted in
                
                <!--
        =>?php the_time('F jS, Y');?> da-nos o tempo em k o post foi criado
        =><a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>"> permite k ao carregar no autor veja-mos posts so dele
        =><?php the_author();?> da-nos o autor do post
-->

                <?php
                /* get categories com link */
                $categories = get_the_category();
                $separator = ", ";
                $output = '';
                
                if ($categories) {
                        foreach($categories as $category){
                                $output .= '<a href="' . get_category_link( $category->term_id ) .'">' . $category->cat_name . '</a>' . $separator;//.= permite-nos adicionar conteudo a var, k criamos vazia
                        }

                        echo trim($output, $separator);//echo trim php function
                }
                ?>


<!-- Funcao para obter categorias sem link
<?php
                /* get categories */
                $categories = get_the_category();
                $separator = ", ";
                $output = '';
                
                if ($categories) {
                        foreach($categories as $category){
                                $output .= $category->cat_name . $separator;//.= permite-nos adicionar conteudo a var, k criamos vazia
                        }

                        echo trim($output, $separator);//echo trim php function
                }
                ?>
-->
                <!--                 para output a feature image e controlado pelo functions.php    -->
                <?php the_post_thumbnail('banner-image');?> 
                <!--              FIM DO OUTPUT DA FEATURED IMAGE -- >
-->
                
          <?php the_content();?> <!-- mostra o conteudo mas pode ser trocado por 
          the_excerpt para cortar o post em single.php deve ficar the_content e get_the_excerpt no index.php-->
               <!--<?php the_excerpt();?>   funciona como o the_content so k corta o post a meio-->
        </article>

    <?php endwhile;?>  <!-- Fim do WHILE LOOP-->

    <?php else : ?>

            <?php echo'<p> Content not found </p>'?>

<?php endif;?><!--fim do loop para mostrar conteudo-->


<?php get_footer(); ?><!-- Agarra o footer-->
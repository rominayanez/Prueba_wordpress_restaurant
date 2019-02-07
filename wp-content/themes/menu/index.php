<?php get_header(); ?>
<!-- Header-->
<div class="">
    <figure class="snip1543">
        <img src="<?php echo get_template_directory_uri(); ?>\assets\img\sitio\pizza.jpg" alt="sample108" />
        <figcaption>
            <h3>Il Fonti Di Modena</h3>
            <p>Ven a disfrutar de la comida italiana en nuestro restaurant ubicado en Av. Colón 161, Providencia. Revisa toda nuestra carta y no olvides reservar una mesa. ¡Te esperamos!</p>
        </figcaption>
        <a href="#"></a>
    </figure>

</div>


<<section id="carta">
    <h1 class="text-center menu">Nuestra Carta</h1>

    </section>




    <!-- Antipastos-->
    <div class="row container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foto_carta">
            <figure class="snip1556">
                <figcaption>
                    <h3>Antipastos</h3>
                </figcaption><img src="<?php echo get_theme_file_uri( '\assets\img\platos\peperonata-400x300.jpg' ) ?>" class="img-fluid mb-3"/>

                <a href="#"></a>
            </figure>
        </div>


        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 carta_item">

            <?php
            $arg = array(
                      'category_name' => 'ANTIPASTOS',
                      'post_type'         => 'plato',
                      'posts_per_page' => 10
                  );

              $get_arg = new WP_Query($arg);

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <p class="name col-xs-12 col-sm-10 col-md-10 col-lg-10"> <?php the_field('nombre') ?></p>
            <p class="price  col-xs-12 col-sm-1 col-md-1 col-lg-1"><?php the_field('precio') ?></p>
            <p class="description col-xs-12 col-sm-11 col-md-11 col-lg-11"><?php the_field('descripcion') ?></p>
        <?php } wp_reset_postdata(); ?>
    </div>

    </div>
    <!-- Ensaladas-->
    <div class="container red">

        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 carta_item">

            <?php
              $arg2 = array(
                  'category_name' => 'ENSALADAS',
                  'post_type'         => 'plato',
                  'posts_per_page' => 10
              );

              $get_arg2 = new WP_Query( $arg2 );

              while ( $get_arg2->have_posts() ) {
                $get_arg2->the_post();
              ?>
            <p class="name col-xs-12 col-sm-10 col-md-10 col-lg-10 white"> <?php the_field('nombre') ?></p>
            <p class="price  col-xs-12 col-sm-1 col-md-1 col-lg-1 white"><?php the_field('precio') ?></p>
            <p class="description col-xs-12 col-sm-11 col-md-11 col-lg-11 white"><?php the_field('descripcion') ?></p>
        <?php } wp_reset_postdata();  ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foto_carta">
            <figure class="snip1556">
                <figcaption>
                    <h3>Ensaladas</h3>
                </figcaption><img src="<?php echo get_theme_file_uri( '\assets\img\platos\insalatta_danubio-400x300.jpg' ) ?>" class="img-fluid mb-3"/>
                <a href="#"></a>
            </figure>
        </div>

    </div>


    <!-- SOPAS-->
    <div class="row container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foto_carta">
            <figure class="snip1556">
                <figcaption>
                    <h3>Sopas</h3>
                </figcaption><img src="<?php echo get_theme_file_uri( '\assets\img\platos\ministrone_genovese-400x300.jpg' ) ?>" class="img-fluid mb-3"/>
                <a href="#"></a>
            </figure>
        </div>

        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 carta_item">

            <?php
              $arg = array(
                  'category_name' => 'SOPAS',
                  'post_type'         => 'plato',
                  'posts_per_page' => 10
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <p class="name col-xs-12 col-sm-10 col-md-10 col-lg-10"> <?php the_field('nombre') ?></p>
            <p class="price  col-xs-12 col-sm-1 col-md-1 col-lg-1"><?php the_field('precio') ?></p>
            <p class="description col-xs-12 col-sm-11 col-md-11 col-lg-11"><?php the_field('descripcion') ?></p>
        <?php } wp_reset_postdata();?>
        </div>

    </div>
    <!-- PIZZA TRADICIONAL-->
    <div class="row container red">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 carta_item">

            <?php
              $arg = array(
                  'category_name' => 'PIZZA TRADICIONAL',
                  'post_type'         => 'plato',
                  'posts_per_page' => 10
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <p class="name col-xs-12 col-sm-10 col-md-10 col-lg-10 white"> <?php the_field('nombre') ?></p>
            <p class="price  col-xs-12 col-sm-1 col-md-1 col-lg-1 white"><?php the_field('precio') ?></p>
            <p class="description col-xs-12 col-sm-11 col-md-11 col-lg-11 white"><?php the_field('descripcion') ?></p>
        <?php }wp_reset_postdata(); ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foto_carta">
            <figure class="snip1556">
                <figcaption>
                    <h3>Pizza tradicional</h3>
                </figcaption><img src="<?php echo get_theme_file_uri( '\assets\img\platos\marguerita-400x300.jpg' ) ?>" class="img-fluid mb-3"/>
                <a href="#"></a>
            </figure>
        </div>


    </div>
    <!-- PIZZAS-->
    <div class="row container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foto_carta">
            <figure class="snip1556">
                <figcaption>
                    <h3>Pizzas</h3>
                </figcaption><img src="<?php echo get_theme_file_uri( '\assets\img\platos\vegetariana-400x300.jpg' ) ?>" class="img-fluid mb-3"/>
                <a href="#"></a>
            </figure>
        </div>

        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 carta_item">

            <?php
              $arg = array(
                  'category_name' => 'PIZZAS',
                  'post_type'         => 'plato',
                  'posts_per_page' => 10
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <p class="name col-xs-12 col-sm-10 col-md-10 col-lg-10"> <?php the_field('nombre') ?></p>
            <p class="price  col-xs-12 col-sm-1 col-md-1 col-lg-1"><?php the_field('precio') ?></p>
            <p class="description col-xs-12 col-sm-11 col-md-11 col-lg-11"><?php the_field('descripcion') ?></p>
        <?php } wp_reset_postdata(); ?>
        </div>

    </div>
    <!-- POSTRES-->
    <div class="row container red">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 carta_item">

            <?php
              $arg = array(
                  'category_name' => 'POSTRES',
                  'post_type'         => 'plato',
                  'posts_per_page' => 10
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <p class="name col-xs-12 col-sm-10 col-md-10 col-lg-10 white"> <?php the_field('nombre') ?></p>
            <p class="price  col-xs-12 col-sm-1 col-md-1 col-lg-1 white"><?php the_field('precio') ?></p>
            <p class="description col-xs-12 col-sm-11 col-md-11 col-lg-11 white"><?php the_field('descripcion') ?></p>
        <?php } wp_reset_postdata(); ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foto_carta">
            <figure class="snip1556">
                <figcaption>
                    <h3>Postres</h3>
                </figcaption><img src="<?php echo get_theme_file_uri( '\assets\img\platos\panna_cotta-400x300.jpg' ) ?>" class="img-fluid mb-3"/>
                <a href="#"></a>
            </figure>
        </div>


    </div>
    <!-- INFUSIONES-->
    <div class="row container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foto_carta">
            <figure class="snip1556">
                <figcaption>
                    <h3>Infusiones</h3>
                </figcaption><img src="<?php echo get_theme_file_uri( '\assets\img\platos\latte-334x300.jpg' ) ?>" class="img-fluid mb-3"/>
                <a href="#"></a>
            </figure>
        </div>

        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 carta_item">

            <?php
              $arg = array(
                  'category_name' => 'INFUSIONES',
                  'post_type'         => 'plato',
                  'posts_per_page' => 10
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <p class="name col-xs-12 col-sm-10 col-md-10 col-lg-10"> <?php the_field('nombre') ?></p>
            <p class="price  col-xs-12 col-sm-1 col-md-1 col-lg-1"><?php the_field('precio') ?></p>
            <p class="description col-xs-12 col-sm-11 col-md-11 col-lg-11"><?php the_field('descripcion') ?></p>
        <?php } wp_reset_postdata(); ?>
        </div>

    </div>
    <!-- BEBIDAS-->
    <div class="row container red">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 carta_item">

            <?php
              $arg = array(
                  'category_name' => 'BEBIDAS',
                  'post_type'         => 'plato',
                  'posts_per_page' => 10
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
            <p class="name col-xs-12 col-sm-10 col-md-10 col-lg-10 white"> <?php the_field('nombre') ?></p>
            <p class="price  col-xs-12 col-sm-1 col-md-1 col-lg-1 white"><?php the_field('precio') ?></p>
            <p class="description col-xs-12 col-sm-11 col-md-11 col-lg-11 white"><?php the_field('descripcion') ?></p>
        <?php } wp_reset_postdata(); ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foto_carta">
            <figure class="snip1556">
                <figcaption>
                    <h3>Bebidas</h3>
                </figcaption><img src="<?php echo get_theme_file_uri( '\assets\img\platos\agua_mineral-334x300.jpg' ) ?>" class="img-fluid mb-3"/>
                <a href="#"></a>
            </figure>
        </div>


    </div>

    <!-- local-->
    <section id="reservas">
        <div class="row pdg50 container">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <figure class="snip1461">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>\assets\img\sitio\mesas.jpg" />
                    <figcaption>
                        <h2>VEN</h2>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <figure class="snip1461">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>\assets\img\sitio\il_fonti_di_modena.jpg" />
                    <figcaption>
                        <h2>A</h2>
                    </figcaption>
                    <a href="#"></a>
                </figure>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <figure class="snip1461">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>\assets\img\sitio\pasta.jpg" />
                    <figcaption>
                        <h2>CONOCERNOS</h2>
                    </figcaption>
                    <a href="#"></a>
                </figure>

            </div>
        </div>
        <div class="row text-center" id="reservas">
            <h1 class="reserva">Reservas Aquí </h1>
            <div class="col-xs-12 col-sm-12 col-md-offset-3 col-lg-offset-3">
                <?php echo do_shortcode("[booking type=1 nummonths=1]"); ?>

            </div>


        </div>

    </section>



<!--
    <section class="formulario container">
        <div class="col-xs-12 col-sm-12 col-md-offset-3 col-lg-offset-3">
            <h2 class="title">🍕 SUSCRÍBETE 🥗</h2>
            <div class="newsletter-text">
                <p>Regístrate gratis para recibir todas las semanas nuestra Carta 🍽️</p>
            </div>
            <form class="form-inline">
                <div class="form-group">
                    <label for="exampleInputEmail2">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="nombre@ejemplo.com">
                </div>
                <button type="submit" class="btn btn-default">Registrarse</button>

            </form>
        </div>-->

     <?php get_footer(); ?>

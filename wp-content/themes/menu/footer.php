<footer id="contacto">
    <div class="row footer container">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contactanos">
            <img src="<?php echo get_template_directory_uri(); ?>\assets\img\marca\logo.png" alt="Logo" class="logo_footer"><br><br>
            <h4 class="footer_h4"></h4>
            <?php if ( is_active_sidebar( 'widget_footer' ) ) {
                dynamic_sidebar( 'widget_footer' );
            }; ?>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contactanos">
            <h4 class="footer_h4">Dirección:</h4>
            <p class="mail">Av. Colón 161, Providencia</p>
            <p class="phone">+56 2 2345 4653</p>
            <h4 class="footer_h4">Horarios:</h4>
            <p>Lunes a Domingos:</p>
            <p>13:00 - 16:00 // 19:00 - 23:00</p>


        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contactanos">
            <h4 class="footer_h4"> Ubicación</h4>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.242219669132!2d-70.56383674997909!3d-33.416928880689134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cefaab864c33%3A0xe0f0903e7a8e6fd4!2sAv.+Cristobal+Colon%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1548866211289"
                max-width="100%" max-height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

</footer>
<?php wp_footer() ?>
 </body>
</html>

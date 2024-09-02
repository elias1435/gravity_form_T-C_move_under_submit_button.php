<?php
// Add this code snippet to functinos.php

add_filter( 'gform_submit_button_2', 'add_paragraph_below_submit_two', 10, 2 );
function add_paragraph_below_submit_two( $button, $form ) {
    // Return without changes for the admin back-end.
    if ( is_admin() ){
        return $button;
    }
    return $button .= '<small class="font-size: 12px !important;">En cliquant sur "Obtenir mon devis gratuit", j\'accepte de recevoir des communications de la part de My Quotes et de ses partenaires par téléphone, courriel et SMS. <a href="/privacy-policy" target="_blank">En savoir plus</a>. Vous pouvez vous désabonner à tout moment. Pour plus d\'informations sur la façon dont nous traitons vos données, consultez nos Conditions d\'utilisation.</small>';
}

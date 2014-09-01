<?php
/*
Plugin Name: OH Change Local
Plugin URI:
*/

function oh_change_locale($locale) {
    // is english

    if(isset($_GET['lang']) ){
        if( $_GET['lang'] === 'en'){
            $locale = 'en_US';

        }elseif( $_GET['lang'] === 'he'){
            $locale = 'he_IL';
        }
        setcookie('lang', $locale, time()+60*60*24*365 );
    }elseif(isset($_COOKIE['lang'])){
        $locale = $_COOKIE['lang'];

    }else{
        $locale = 'he_IL';
    }

    return $locale;
}
add_filter('locale','oh_change_locale',10);
?>

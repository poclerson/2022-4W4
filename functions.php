<?php
    /* Enqueue */
    function cidw_4w4_enqueue() {
        wp_enqueue_style('  style_css', 
                            get_template_directory_uri() . '/style.css', 
                            array(), filemtime(get_template_directory() . '/style.css'), 
                            false);

        # Nunito
        wp_enqueue_style('  style_css',
                            "https://fonts.googleapis.com/css2?family=Nunito:wght@100&display=swap",
                            false);

        # Josefin Sans
        wp_enqueue_style('  style_css',
                            "https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap",
                            false);
    } 

    add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

    /* Enregistrer les menus */
    function cidw_4w4_enregistrer_menu() {
        register_nav_menus(array(
                                'principal' => __('Principal', 'cidw_4w4'),
                                'footer' => __('Footer', 'cidw_4w4')));
    }

    add_action('after_setup_theme', 'cidw_4w4_enregistrer_menu');

    /* Filtrer le menu */
    function cidw_4w4_filtrer_menu($objet) {
        /* Afficher le contenu d'un objet */
        # => sert à accéder a la valeur d'un tableau associatif
        foreach($objet as $cle => $valeur) {
            # -> sert à accéder à la valeur d'un objet
            # wp_trim_words([objet], [nombre de mots a garde], [terminer par])
            $valeur->title = wp_trim_words($valeur->title, 4, "...");
        }   

        return $objet;
    }

    add_filter("wp_nav_menu_objects", "cidw_4w4_filtrer_menu")
?>
<?php
    /* Enqueue */
    function cidw_4w4_enqueue() {
        wp_enqueue_style('  
            style_css', 
            get_template_directory_uri() . '/style.css', 
            array(), filemtime(get_template_directory() . '/style.css'), 
            false);

        # Nunito
        wp_enqueue_style('  
            style_css',
            "https://fonts.googleapis.com/css2?family=Nunito:wght@100&display=swap",
            false);

        # Josefin Sans
        wp_enqueue_style('  
            style_css',
            "https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap",
            false);
    } 

    add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

    /* Enregistrer les menus */
    function cidw_4w4_enregistrer_menu() {
        register_nav_menus(array(
            'principal'     => __('Principal', 'cidw_4w4'),
            'footer'        => __('Footer', 'cidw_4w4'),
            'footer-liens'  => __('Footer liens externes', 'cidw-4w4')));
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

    add_filter("wp_nav_menu_objects", "cidw_4w4_filtrer_menu");

    /* Ajouter le support du thème */
    function cidw_4w4_add_theme_support() {
        add_theme_support('post-thumbnails');

        add_theme_support('custom_logo', array(
            'width' => 100,
            'height' => 100
        ));
    }

    add_action('after_setup_theme', 'cidw_4w4_add_theme_support');


    /* Enregistrement des sidebars */
    add_action('widgets_init', 'my_register_sidebars');
    function my_register_sidebars() {
        register_sidebar(
            array(
                'id'            => 'entete_1',
                'name'          => __('Entete 1'),
                'description'   => __('Sidebar de lentete'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'id'            => 'footer_colonne_1',
                'name'          => __('Footer colonne 1'),
                'description'   => __('La première colonne du footer'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'id'            => 'footer_colonne_2',
                'name'          => __('Footer colonne 2'),
                'description'   => __('La deuxième colonne du footer'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'id'            => 'footer_colonne_3',
                'name'          => __('Footer colonne 3'),
                'description'   => __('La troisième colonne du footer'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'id'            => 'footer_rangee_1',
                'name'          => __('Footer rangée 1'),
                'description'   => __('La première rangée du footer'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
?>
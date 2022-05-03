<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les cours du TIM</title>
    <?php wp_head(); ?>
    <?php show_admin_bar(true); ?>
    <style>
        header.site__header {
            background-color: <?= get_theme_mod('header_fond') ?>;
        }

        main.site__main {
            background: <?= get_theme_mod('main_fond') ?>;
        }
    </style>
</head>
<body <?php body_class("site"); ?>>
    <header class="site__header">
        <div class="boite-modale">
            <section class="boite-modale__bouton">
                <button class="boite-modale__bouton__fermer">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
                </button>
            </section>

            <section class="boite-modale__contenu">
                <div class="boite-modale__contenu__image">
                
                </div>
                <article class="boite-modale__contenu__texte">

                </article>
            </section>
        </div>
        <?php the_custom_logo(); ?>
        <section class="site__header__titre">
            <a href="<?= esc_url(home_url('/')); ?>">
                <h1 class="header__titre"><?= get_bloginfo('name'); ?></h1>
            </a>
            <h2><?= get_bloginfo('description'); ?></h2>
        </section>

        <section class="site__header__utilitaires">
            <input class="burger__checkbox" type="checkbox" id="site__header__utilitaires__menu-checkbox">
            <label class="burger__etiquette" for="site__header__utilitaires__menu-checkbox">
                <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd"></path></svg>
            </label>

            <section class="site__header__utilitaires__menu">
                <div class="icone">
                    <a href="/" class="icone__lien">
                        <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="#" class="icone__lien">
                        <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zm0 16a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                    </a>
                    <a href="#" class="icone__lien">
                        <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path></svg>
                    </a>
                    <a href="#" class="icone__lien">
                        <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15a24.98 24.98 0 01-8-1.308z"></path></svg>
                    </a>
                    <a href="#" class="icone__lien">
                        <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                <?php get_search_form(); ?>
            </section>
        </section>
        <section class="site__header__navigation">
            <div class="site__header__navigation__menu">
                <span class="site__header__navigation__menu__ouverture">
                    <svg width="50px" height="50px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="rgb(221, 255, 0)"><path d="M0 0h24v24H0z" fill="none"></path><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"></path></svg>
                </span>

                <?php
                    wp_nav_menu(array(
                        "menu" => "departement",
                        "container" => "nav",
                        "container_class" => "site__header__navigation__menu__nav menu__departement",
                    ));
                ?>
            </div>
            <div class="site__header__navigation__menu">
                <span class="site__header__navigation__menu__ouverture">
                    <svg width="50px" height="50px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="rgb(221, 255, 0)"><path d="M0 0h24v24H0z" fill="none"></path><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19a2 2 0 002 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path></svg>
                </span>
                <?php
                    wp_nav_menu(array(
                        "menu" => "evenements",
                        "container" => "nav",
                        "container_class" => "site__header__navigation__menu__nav menu__evenements",
                    ));
                ?>
            </div>
        </section>
    </header>
    <aside class="site__barre">
        <input class="burger__checkbox" type="checkbox" id="site__barre__menu-principal-container-checkbox">
        <label class="burger__etiquette" for="site__barre__menu-principal-container-checkbox">
            <svg class="burger__etiquette--ferme" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M3 7a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 6a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="burger__etiquette--ouvert" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
        </label>
        <?php 
            wp_nav_menu(array(  "menu" => "principal",
                                "container" => "nav")); 
        ?>
    </aside>

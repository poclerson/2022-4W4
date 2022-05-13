(function() {
    const images = document.querySelectorAll(".wp-block-gallery .wp-block-image img");
    const boite = document.querySelector(".boite-carousel");

    // Sélectionner les éléments de la boite
    const boiteImage = boite.querySelector(".boite-carousel__contenu__images__image")
    const boiteNav = boite.querySelector(".boite-carousel__navigation");
    const boiteBtnFermer = boite.querySelector(".boite-carousel__bouton__fermer");

    for (let i = 0; i < images.length; i++) {
        const image = images[i];

        /**
         * Détection des clics sur les images permettant d'ouvrir la boite
         */
        image.addEventListener('click', () => {

            // Ne pas ajouter la classe deux fois
            if (!boite.classList.contains('boite-carousel--ouverte')) {
                // Ajouter la classe d'ouverture de la boite carousel
                boite.classList.add('boite-carousel--ouverte');

                // Afficher l'image
                boiteImage.setAttribute("src", image.getAttribute("src"));
            }
        })

        /**
         * Création des boutons
         * Les boutons doivent être créés dynamiquement parce leur nombre pourrait varier
         */
        const boiteBtnNav = document.createElement("button");
        boiteBtnNav.classList.add("boite-carousel__navigation__bouton");
        boiteBtnNav.dataset.index = i;
        boiteNav.appendChild(boiteBtnNav);

        /**
         * Création du texte à l'intérieur de chaque bouton
         */
        const indexImageBoiteBtnNav = document.createElement("p");
        indexImageBoiteBtnNav.classList.add("boite-carousel__navigation__bouton__index");
        indexImageBoiteBtnNav.innerText = i + 1;
        boiteBtnNav.appendChild(indexImageBoiteBtnNav);

        // Rafraichir l'image selon le bouton appuyé
        boiteBtnNav.addEventListener('click', (e) => {
            boiteImage.setAttribute("src", images[e.target.dataset.index].getAttribute("src"));
        })
    }

    // Ajouter l'écouteur d'évènement permettant de fermer la boite carousel
    boiteBtnFermer.addEventListener("click", () => {
        boite.classList.remove("boite-carousel--ouverte")
    });

})()
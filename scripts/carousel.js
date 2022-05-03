(function() {
    let images = document.querySelectorAll(".wp-block-gallery .wp-block-image img");
    let boiteModale = document.querySelector(".boite-modale");

    let imageBoiteModale;

    const btnFermer = boiteModale.querySelector(".boite-modale__bouton__fermer");

    for (const image of images) {
        image.addEventListener('click', () => {

            if (!boiteModale.classList.contains('boite-modale--ouverte')) {
                // Ajouter la classe d'ouverture de la boite modale
                boiteModale.classList.add('boite-modale--ouverte');

                // Créer un élément <img/> afin de permettre l'affichage d'une image
                imageBoiteModale = boiteModale.querySelector(".boite-modale__contenu__image").appendChild(document.createElement("img"));

                // Transmettre la valeur de l'attribut src à l'image nouvelle créée de la boite modale
                imageBoiteModale.setAttribute("src", image.getAttribute("src"));
            }
        })
    }

    // Ajouter l'écouteur d'évènement permettant de fermer la boite modale
    btnFermer.addEventListener("click", () => {
        boiteModale.classList.remove("boite-modale--ouverte")
        imageBoiteModale.remove();
    });

})()
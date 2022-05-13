(function() {
    const btnBoite = document.querySelectorAll(".carte__desc__bouton");
    const boite = document.querySelector(".boite-modale");

    const btnFermer = boite.querySelector(".boite-modale__bouton__fermer");

    // Générer le contenu des boites modales
    for (const btn of btnBoite) {
        btn.addEventListener("click", (e) => {
            boite.classList.add("boite-modale--ouverte")

            // Afficher le contenu trouvé
            if (e.target.parentElement.querySelector(".carte__desc__contenu") != undefined) {
                boite.querySelector(".boite-modale__contenu__texte").innerHTML = 

                [].slice.call(e.target.parentElement.querySelector(".carte__desc__contenu").children).map(
                    enfant => enfant.innerHTML
                );
            }

            // Gestion des erreurs
            else {
                boite.querySelector(".boite-modale__contenu__texte").innerText = "Désolé, les informations n'ont pas pu être chargées. Veuillez rafraichir la page et recommencer";
            }
        })
    }

    // Ajouter l'écouteur d'évènement permettant de fermer la boite modale
    btnFermer.addEventListener("click", () => {
        boite.classList.remove("boite-modale--ouverte")
    });
})()
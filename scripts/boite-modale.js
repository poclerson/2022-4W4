(function() {
    let btnBoiteModale = document.querySelectorAll(".carte__desc__bouton");
    let boiteModale = document.querySelector(".boite-modale");

    const btnFermer = boiteModale.querySelector(".boite-modale__fermer");

    // Générer le contenu des boites modales
    for (const btn of btnBoiteModale) {
        btn.addEventListener("click", (e) => {
            boiteModale.classList.add("boite-modale--ouverte")

            // Afficher le contenu trouvé
            if (e.target.parentElement.querySelector(".carte__desc__contenu") != undefined) {
                boiteModale.querySelector(".boite-modale__contenu__texte").innerHTML = 

                [].slice.call(e.target.parentElement.querySelector(".carte__desc__contenu").children).map(
                    enfant => enfant.innerHTML
                );
            }

            // Gestion des erreurs
            else {
                boiteModale.querySelector(".boite-modale__contenu__texte").innerText = "Désolé, les informations n'ont pas pu être chargées. Veuillez rafraichir la page et recommencer";
            }
        })
    }

    // Ajouter l'écouteur d'évènement permettant de fermer la boite modale
    btnFermer.addEventListener("click", () => {
        boiteModale.classList.remove("boite-modale--ouverte")
    });
})()
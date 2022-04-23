(function() {
    let btnBoiteModale = document.querySelectorAll(".carte__desc__bouton");
    let boiteModale = document.querySelector(".boite-modale");

    for (const btn of btnBoiteModale) {
        btn.addEventListener("click", (e) => {
            boiteModale.classList.add("boite-modale--ouverte")

            if (e.target.parentElement.querySelector(".carte__desc__contenu") != undefined) {
                boiteModale.querySelector(".boite-modale__texte").innerText = e.target.parentElement.querySelector(".carte__desc__contenu").innerText;
            }

            else {
                boiteModale.querySelector(".boite-modale__texte").innerText = "Désolé, les informations n'ont pas pu être chargées. Veuillez rafraichir la page et recommencer";
            }
        })
    }

    boiteModale.addEventListener("click", () => {
        boiteModale.classList.remove("boite-modale--ouverte")
    });
})()
(function() {
    let btnBoiteModale = document.querySelectorAll(".carte__desc__bouton");
    let dernierBtnBoiteModaleClique;
    let boiteModale = document.querySelector(".boite-modale");

    for (const btn of btnBoiteModale) {
        btn.addEventListener("click", (e) => {
            boiteModale.classList.add("boite-modale--ouverte")
            console.log(e.target.parentElement)
            boiteModale.querySelector(".boite-modale__texte").innerText = e.target.parentElement.querySelector(".carte__desc__contenu").innerText;
        })
    }

    boiteModale.addEventListener("click", () => {
        boiteModale.classList.remove("boite-modale--ouverte")
    });
})()
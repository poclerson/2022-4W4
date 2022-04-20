(function() {
    let btnBoiteModale = document.querySelectorAll(".carte__desc__bouton");
    let boiteModale = document.querySelector(".boite-modale");

    for (const btn of btnBoiteModale) {
        btn.addEventListener("click", function() {
            boiteModale.classList.add("boite-modale--ouverte")
        })
    }

    boiteModale.addEventListener("click", function() {
        boiteModale.classList.remove("boite-modale--ouverte")
    })
})()
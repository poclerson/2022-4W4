(function() {
    const btnOuverture = document.querySelectorAll(".site__header__navigation__menu__ouverture");

    for (let btn of btnOuverture) {
        btn.addEventListener('mouseenter', () => {
            btn.parentElement.querySelector(".site__header__navigation__menu__nav").classList.add("site__header__navigation__menu__nav--ouverte");
        });

        btn.addEventListener('mouseleave', () => {
            btn.parentElement.querySelector(".site__header__navigation__menu__nav").classList.remove("site__header__navigation__menu__nav--ouverte");
        });
    }

})()
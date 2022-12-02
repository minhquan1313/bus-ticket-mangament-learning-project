(() => {
    const passwordToggleType = {
        password: "visibility_off",
        text: "visibility",
    };

    const passwordToggler = (inp, toggler) => {
        if (!(inp && toggler)) return;

        toggler.addEventListener("click", () => {
            const type =
                inp.getAttribute("type") === "password" ? "text" : "password";

            inp.setAttribute("type", type);
            toggler.innerHTML = passwordToggleType[type];
        });
    };

    window.passwordToggler = passwordToggler;
})();

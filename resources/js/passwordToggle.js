(() => {
    const passwordInp = document.querySelector("input[name=password]");
    const passwordToggle = document.querySelector("#password_toggle");

    const passwordToggleType = {
        password: "visibility_off",
        text: "visibility",
    };

    if (!passwordInp || !passwordToggle) return;

    passwordToggle.addEventListener("click", () => {
        const type =
            passwordInp.getAttribute("type") === "password"
                ? "text"
                : "password";

        passwordInp.setAttribute("type", type);
        passwordToggle.innerHTML = passwordToggleType[type];
    });
})();

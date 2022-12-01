(() => {
    const passwordInp = document.querySelector("input[name=password]");
    const passwordToggle = document.querySelector("#password_toggle");

    if (!passwordInp || !passwordToggle) return;

    passwordToggler(passwordInp, passwordToggle);
})();

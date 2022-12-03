(() => {
    const passwordInp = document.querySelector("input[name=password]");
    const passwordToggle = document.querySelector("#password_toggle1");
    const password2Inp = document.querySelector(
        "input[name=password_confirmation]"
    );
    const passwordToggle2 = document.querySelector("#password_toggle2");

    if (!passwordInp || !passwordToggle) return;
    // const onInput = function (value, initValue, btn) {
    //     btn.disabled = value.trim() === initValue.trim();
    // };
    // const start = (inp, btn) => {
    //     const initV = inp.value;
    //     let btnClicked = false;

    //     inp.addEventListener("input", function () {
    //         if (btnClicked) return;
    //         onInput(this.value, initV, btn);
    //     });
    //     btn.addEventListener("click", () => (btnClicked = true));
    // };

    passwordToggler(passwordInp, passwordToggle);
    passwordToggler(password2Inp, passwordToggle2);

    // const telInp = document.querySelector("input[name=tel]");
    // const surnameInp = document.querySelector("input[name=surname]");
    // const nameInp = document.querySelector("input[name=name]");
    // const submitBtn = document.querySelector("button[type=submit]");

    // start(telInp, submitBtn);
    // start(surnameInp, submitBtn);
    // start(nameInp, submitBtn);
    // start(passwordInp, submitBtn);
})();

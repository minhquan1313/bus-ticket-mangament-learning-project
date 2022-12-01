(() => {
    const surnameInp = document.querySelector("input[name=surname]");
    const firstNameInp = document.querySelector("input[name=firstName]");
    const saveChangeNameBtn = document.querySelector("#saveChangeName");

    // const surnameInp = document.querySelector("input[name=surname]");
    // const firstNameInp = document.querySelector("input[name=firstName]");
    const saveChangePasswordBtn = document.querySelector("#saveChangePass");

    if (
        !(
            surnameInp &&
            firstNameInp &&
            saveChangeNameBtn &&
            saveChangePasswordBtn
        )
    )
        return;
    // -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    const onInput = function (value, initValue, btn) {
        btn.disabled = value.trim() === initValue.trim();
    };
    const start = (inp, btn) => {
        const initV = inp.value;
        let btnClicked = false;

        inp.addEventListener("input", function () {
            if (btnClicked) return;
            onInput(this.value, initV, btn);
        });
        btn.addEventListener("click", () => (btnClicked = true));
    };
    // -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    start(surnameInp, saveChangeNameBtn);
    start(firstNameInp, saveChangeNameBtn);
})();

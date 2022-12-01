(() => {
    const surnameInp = document.querySelector("input[name=surname]");
    const firstNameInp = document.querySelector("input[name=firstName]");
    const saveChangeNameBtn = document.querySelector("#saveChangeName");

    const newPasswordInp = document.querySelector("input[name=newPassword]");
    const newPasswordRepeatInp = document.querySelector(
        "input[name=newPasswordRepeat]"
    );
    const oldPasswordInp = document.querySelector("input[name=oldPassword]");
    const saveChangePasswordBtn = document.querySelector("#saveChangePass");

    if (
        !(
            surnameInp &&
            firstNameInp &&
            saveChangeNameBtn &&
            saveChangePasswordBtn &&
            newPasswordInp &&
            oldPasswordInp
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
    passwordToggler(
        document.querySelector("input[name=oldPassword]"),
        document.querySelector("#password_toggle1")
    );
    passwordToggler(
        document.querySelector("input[name=newPassword]"),
        document.querySelector("#password_toggle2")
    );
    passwordToggler(
        document.querySelector("input[name=newPasswordRepeat]"),
        document.querySelector("#password_toggle3")
    );

    start(surnameInp, saveChangeNameBtn);
    start(firstNameInp, saveChangeNameBtn);

    start(newPasswordInp, saveChangePasswordBtn);
    start(oldPasswordInp, saveChangePasswordBtn);
    start(newPasswordRepeatInp, saveChangePasswordBtn);
})();

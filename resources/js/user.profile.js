(() => {
    const surnameInp = document.querySelector("input[name=surname]");
    const firstNameInp = document.querySelector("input[name=name]");
    const saveChangeNameBtn = document.querySelector("#saveChangeName");

    const newPasswordInp = document.querySelector("input[name=new_password]");
    const newPasswordRepeatInp = document.querySelector(
        "input[name=new_password_confirmation]"
    );
    const oldPasswordInp = document.querySelector("input[name=old_password]");
    const saveChangePasswordBtn = document.querySelector("#saveChangePass");

    const imgToChange = document.querySelector("#img_to_change");
    const fileInp = document.querySelector("input[name=profile_photo_path]");

    fileInp?.addEventListener("input", () => {
        const [file] = fileInp.files;

        console.log(fileInp.value);
        console.log(file);

        if (!file) return;

        imgToChange.src = URL.createObjectURL(file);
        imgToChange.classList.remove("scale-0");

        saveChangeNameBtn.disabled = false;
    });

    if (
        !(
            surnameInp &&
            firstNameInp &&
            saveChangeNameBtn &&
            saveChangePasswordBtn &&
            newPasswordInp &&
            oldPasswordInp
        )
    ) {
        console.log("return");
        return;
    }
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
        document.querySelector("input[name=old_password]"),
        document.querySelector("#password_toggle1")
    );
    passwordToggler(
        document.querySelector("input[name=new_password]"),
        document.querySelector("#password_toggle2")
    );
    passwordToggler(
        document.querySelector("input[name=new_password_confirmation]"),
        document.querySelector("#password_toggle3")
    );

    start(surnameInp, saveChangeNameBtn);
    start(firstNameInp, saveChangeNameBtn);

    start(newPasswordInp, saveChangePasswordBtn);
    start(oldPasswordInp, saveChangePasswordBtn);
    start(newPasswordRepeatInp, saveChangePasswordBtn);
})();

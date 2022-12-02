(() => {
    document.querySelectorAll("form button[type=submit]").forEach((r) => {
        r.addEventListener("click", function () {
            this.setAttribute("disabled", "disabled");
        });
    });
})();

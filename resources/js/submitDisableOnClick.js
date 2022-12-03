(() => {
    document.querySelectorAll("form").forEach((r) => {
        const btn = r.querySelector("button[type=submit]");
        r.addEventListener("submit", () => {
            btn.disabled = true;
        });
    });
    // document.querySelectorAll("form button[type=submit]").forEach((r) => {
    //     r.addEventListener("click", function () {
    //         this.disabled = true;
    //     });
    // });
})();

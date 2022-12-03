(() => {
    let radio = document.querySelectorAll("input[name=hour]");
    let btn = document.querySelector("button#bookNow");
    let timeInp = document.querySelector("input[name=khoi_hanh_gio]");
    let timeSpan = document.querySelector("#khoi_hanh_gio_span");

    const initTime = timeInp.value;
    const initTimeSpan = timeSpan.innerText;

    radio.forEach((r) => {
        r.onclick = () => {
            timeSpan.innerHTML = `${initTimeSpan} ${r.value}`;
            timeInp.value = `${initTime} ${r.value}`;
            btn.disabled = false;
        };
    });
})();

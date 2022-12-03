(() => {
    let radio = document.querySelectorAll("input[name=hour]");
    let btn = document.querySelector("button#bookNow");
    let timeInp = document.querySelector("input[name=time]");
    const initTime = timeInp.value;

    radio.forEach((r) => {
        r.onclick = () => {
            timeInp.value = `${initTime} ${r.value}`;
            btn.disabled = false;
        };
    });
})();

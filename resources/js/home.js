function removeAccents(str) {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
}

const suggestMenuToInput = (inp, ...li) => {
    if (!inp) return;

    li.forEach((r) => {
        if (!r) return;

        r.setAttribute("data-text", removeAccents(r.innerText));

        r.addEventListener("click", (e) => {
            inp.value = e.target.innerText;
        });
    });

    inp.addEventListener("input", (e) => {
        console.log(inp.value);
        const value = inp.value.trim();

        const reg = new RegExp(value, "iu");

        li.forEach((r) => {
            const t = r.getAttribute("data-text");
            const isMatch = t.match(reg);

            r.classList.remove("hidden");

            if (!isMatch) {
                r.classList.add("hidden");
                return;
            }
        });
    });
};

const fromInp = document.querySelector("input[name=from]");
const fromSuggest = document.querySelector("#fromSuggest");

const toInp = document.querySelector("input[name=to]");
const toSuggest = document.querySelector("#toSuggest");

suggestMenuToInput(fromInp, ...fromSuggest.querySelectorAll("li"));
suggestMenuToInput(toInp, ...toSuggest.querySelectorAll("li"));

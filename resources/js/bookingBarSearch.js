function removeAccents(str) {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
}

const suggestMenuToInput = (inp, ...li) => {
    const clickHandler = (e) => {
        inp.value = e.target.innerText;
    };
    const dataAttr = "data-text-normalized";

    if (!inp) return;

    li.forEach((r) => {
        if (!r) return;

        const text = r.innerText;

        r.setAttribute(dataAttr, removeAccents(text));

        r.addEventListener("click", clickHandler);
    });

    inp.addEventListener("input", () => {
        const value = removeAccents(inp.value.trim());
        // const value = inp.value.trim().replace(/\s+/, "|");

        const reg = new RegExp(value, "iu");
        // const reg = new RegExp(value, "iu");

        li.forEach((r) => {
            const t = r.getAttribute(dataAttr);
            // const t = `${r.getAttribute(dataAttr)} ${r.innerText}`;
            console.log({ t });
            const isMatch = t.match(reg);

            r.classList.remove("hidden");

            if (!isMatch) {
                r.classList.add("hidden");
                return;
            }
        });
    });
};

const fromInp = document.querySelector("#fromInp");
const fromSuggest = document.querySelector("#fromSuggest");

const toInp = document.querySelector("#toInp");
const toSuggest = document.querySelector("#toSuggest");

suggestMenuToInput(fromInp, ...fromSuggest.querySelectorAll("li"));
suggestMenuToInput(toInp, ...toSuggest.querySelectorAll("li"));

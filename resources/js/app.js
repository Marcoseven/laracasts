const { remove } = require("lodash");

require("./bootstrap");

/* section_screencasts */
let card_footer = document.querySelector(".card_footer");
let link_card_dynamic = document.querySelector(".link_card_dynamic");

card_footer.addEventListener("mouseover", clickOnTestFirst);
link_card_dynamic.addEventListener("mouseout", clickOnTestSecond);

function clickOnTestFirst() {
    link_card_dynamic.classList.add("active") +
        card_footer.classList.add("deactive");
    console.log("cliccato sulla funzione clickOnTestFirst");
}

function clickOnTestSecond() {
    link_card_dynamic.classList.remove("active") +
        card_footer.classList.remove("deactive");
    console.log("cliccato sulla funzione clickOnTestSecond");
}
/* /section_screencasts */

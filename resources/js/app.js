const { remove } = require("lodash");

require("./bootstrap");

/* CODICE SECTION_SCREENCASTS.BLADE.PHP */
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

/* 
let link_card_dynamic = document.querySelectorAll(".link_card_dynamic");
let card_footer = document.querySelectorAll(".card_footer");

card_footer.addEventListener("click", function() {
    link_card_dynamic.classList.add("active") +
    card_footer.classList.add("deactive");
});

link_card_dynamic.addEventListener("click", function() {
    link_card_dynamic.classList.remove("active") +
    card_footer.classList.remove("deactive");
});
*/

/* 
let card_footer = document.querySelector(".card_footer");
   let link_card_dynamic = document.querySelector(".link_card_dynamic");
   
   card_footer.addEventListener("mouseover", function () {
       let id = 1;
       return id;
   });
   
   link_card_dynamic.addEventListener("mouseout", function () {
       let id = 2;
       return id;
   });
   
   if (id === 1) {
       console.log("cliccato su id 1, .card_footer");
   } else if (id === 2) {
       console.log("cliccato su id 2, .link_card_dynamic");
   } 
   */
/* /CODICE SECTION_SCREENCASTS.BLADE.PHP */
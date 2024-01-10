let modifp = document.querySelector("#modif-p");
let pupop = document.querySelector("#pop-up");
let overl = document.querySelector("#overly");
let closepop = document.querySelector("#closepop");
modifp.addEventListener("click", ()=>{
    pupop.classList.add('active-modif');
    overl.classList.add('active-modif')
})
closepop.addEventListener("click", ()=> {
    pupop.classList.remove('active-modif');
    overl.classList.remove('active-modif');
})
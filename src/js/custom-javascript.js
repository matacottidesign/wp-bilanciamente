console.log("hello");

//SOSTITUIRE "Leggi di più..." con "LEGGI ARTICOLO"
let nodeList_btnReadMore = document.getElementsByClassName('understrap-read-more-link');
let a;
for(a=0; a < nodeList_btnReadMore.length; a++){
    console.log(nodeList_btnReadMore[a].innerHTML = "LEGGI ARTICOLO");
    nodeList_btnReadMore[a].classList.remove("btn-secondary");
    nodeList_btnReadMore[a].parentNode.classList.add("bottone-leggi-articolo");
}
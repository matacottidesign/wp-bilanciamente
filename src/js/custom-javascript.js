console.log("hello");
console.log(document.getElementsByClassName('understrap-read-more-link'));

let nodeList_btnReadMore = document.getElementsByClassName('understrap-read-more-link');

let a;
for(a=0; a < nodeList_btnReadMore.length; a++){
    console.log(nodeList_btnReadMore[a].innerHTML = "LEGGI ARTICOLO");
    nodeList_btnReadMore[a].classList.remove("btn-secondary");
}
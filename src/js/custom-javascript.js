console.log("hello");

//SOSTITUIRE "Leggi di più..." con "LEGGI ARTICOLO"
let nodeList_btnReadMore = document.getElementsByClassName('understrap-read-more-link');
let a;
for(a=0; a < nodeList_btnReadMore.length; a++){
    console.log(nodeList_btnReadMore[a].innerHTML = "LEGGI ARTICOLO");
    nodeList_btnReadMore[a].classList.remove("btn-secondary");
    nodeList_btnReadMore[a].parentNode.classList.add("bottone-leggi-articolo");
}

//PARALLAX ON MOUSE MOVE
document.addEventListener("mousemove" , parallax);

function parallax(e){
    this.querySelectorAll('.layer').forEach(layer => {

        const speed = layer.getAttribute('data-speed')

        const x = (window.innerWidth - e.pageX*speed)/150
        const y = (window.innerHeight - e.pageY*speed)/50

        layer.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}

//STICKY-TOP PADDING
let widgetCol = document.getElementById('right-widget-col');
let prevScrollpos = window.pageYOffset;
window.onscroll = function(){
    let currentScrollpos = window.pageYOffset;
    if(prevScrollpos < currentScrollpos){
        widgetCol.style.paddingTop = "120px";
    } else if (currentScrollpos === 0) {
        widgetCol.style.paddingTop = "0px";
    }
    prevScrollpos = currentScrollpos;
}

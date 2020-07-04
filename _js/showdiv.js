var div1;
var div2;
var div3;

window.onload = function(){ //O onload só é disparado quando todo o conteúdo é carregado 
    div1 = document.getElementById("div1");
    div2 = document.getElementById("div2");
    div3 = document.getElementById("div3");

    var bt1 = document.getElementById("bt1");
    bt1.onclick = mostraDiv1;
    var bt2 = document.getElementById("bt2");
    bt2.onclick = mostraDiv2;
    var bt3 = document.getElementById("bt3");
    bt3.onclick = mostraDiv3;

    div1.classList.add("hidden");
    div2.classList.add("hidden");
    div3.classList.add("hidden");

}
function mostraDiv1(){
    div1.classList.remove("hidden");
    div2.classList.add("hidden");
    div3.classList.add("hidden");
}
function mostraDiv2(){
   
    div2.classList.remove("hidden");
     div1.classList.add("hidden");
     div3.classList.add("hidden");
}
function mostraDiv3(){
    div3.classList.remove("hidden");
    div1.classList.add("hidden");
    div2.classList.add("hidden");
    
}
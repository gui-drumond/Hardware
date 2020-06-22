var i = setInterval(function () {
    clearInterval(i);

    // este codigo mostra o delay do termino de mostrar uma div:
    //usei este codigo com um fake loading in css para sumir apos alguns segundos.
    document.getElementById("content").style.display = "none";
}, 2500);
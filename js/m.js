function actualizarC(c) {
    // Modifica los botones
    if (c=='lunes'){
        document.getElementById('c1').className = 'btn btn-dark active';
        document.getElementById('c2').className = 'nav-link link-body-emphasis';
        document.getElementById('c3').className = 'nav-link link-body-emphasis';
        document.getElementById('c4').className = 'nav-link link-body-emphasis';
        document.getElementById('c5').className = 'nav-link link-body-emphasis';
        document.getElementById('c6').className = 'nav-link link-body-emphasis';
    }else if (c=='martes'){
        document.getElementById('c2').className = 'btn btn-dark active';
        document.getElementById('c1').className = 'nav-link link-body-emphasis';
        document.getElementById('c3').className = 'nav-link link-body-emphasis';
        document.getElementById('c4').className = 'nav-link link-body-emphasis';
        document.getElementById('c5').className = 'nav-link link-body-emphasis';
        document.getElementById('c6').className = 'nav-link link-body-emphasis';
    }else if (c=='miercoles'){
        document.getElementById('c3').className = 'btn btn-dark active';
        document.getElementById('c1').className = 'nav-link link-body-emphasis';
        document.getElementById('c2').className = 'nav-link link-body-emphasis';
        document.getElementById('c4').className = 'nav-link link-body-emphasis';
        document.getElementById('c5').className = 'nav-link link-body-emphasis';
        document.getElementById('c6').className = 'nav-link link-body-emphasis';
    }else if (c=='jueves'){
        document.getElementById('c4').className = 'btn btn-dark active';
        document.getElementById('c1').className = 'nav-link link-body-emphasis';
        document.getElementById('c2').className = 'nav-link link-body-emphasis';
        document.getElementById('c3').className = 'nav-link link-body-emphasis';
        document.getElementById('c5').className = 'nav-link link-body-emphasis';
        document.getElementById('c6').className = 'nav-link link-body-emphasis';
    }else if (c=='viernes'){
        document.getElementById('c5').className = 'btn btn-dark active';
        document.getElementById('c1').className = 'nav-link link-body-emphasis';
        document.getElementById('c2').className = 'nav-link link-body-emphasis';
        document.getElementById('c3').className = 'nav-link link-body-emphasis';
        document.getElementById('c4').className = 'nav-link link-body-emphasis';
        document.getElementById('c6').className = 'nav-link link-body-emphasis';
    }else if (c=='sabado'){
        document.getElementById('c6').className = 'btn btn-dark active';
        document.getElementById('c1').className = 'nav-link link-body-emphasis';
        document.getElementById('c2').className = 'nav-link link-body-emphasis';
        document.getElementById('c3').className = 'nav-link link-body-emphasis';
        document.getElementById('c4').className = 'nav-link link-body-emphasis';
        document.getElementById('c5').className = 'nav-link link-body-emphasis';
    }else{
        console.log('Actulizar despues de envio');
        c = '1';
    }

    var contenedor = document.getElementById('h');
    var ajax = new XMLHttpRequest()
    ajax.open("get", 'actulizar.php?c='+c , true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
      ajax.send();
}
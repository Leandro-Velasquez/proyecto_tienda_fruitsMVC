const btnMenu = document.querySelector('.btn-menu');
const menu = document.querySelector('.menu');
btnMenu.addEventListener('click', () => {
    menu.classList.toggle('mostrar-menu');
})


const calcularPaginas = (registrosXPagina) => {
    const xml = new XMLHttpRequest();
    xml.open('POST', '../Models/Ajax.php');
    xml.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xml.addEventListener('load', () => {
        const paginas = Math.ceil(parseInt(xml.responseText) / registrosXPagina);
        botones(paginas, registrosXPagina);
    });
    xml.send('paginas=true');
}

const botones = (cantidadPaginas, registrosXPagina) => {
    const botones = document.querySelectorAll('.productos-en-stock__buttons');
    const tBody = document.querySelector('.productos-en-stock__tbody');

    let indice = 1;
    traerRegistros(registrosXPagina, 0);

    botones.forEach(boton => {
        boton.addEventListener('click', e => {
            e.preventDefault();
            if(boton.id == 'buttonLeft')
            {
                removeAllChildNodes(tBody);
                indice -= 1;
                if(indice > 0)
                {
                    let indiceRegistros = (indice - 1) * registrosXPagina;
                    traerRegistros(registrosXPagina, indiceRegistros);
                }
                else
                {
                    indice = 1;
                    let indiceRegistros = (indice - 1) * registrosXPagina;
                    traerRegistros(registrosXPagina, indiceRegistros);
                }
            }
            else if(boton.id == 'buttonRight')
            {
                removeAllChildNodes(tBody);
                indice += 1;
                if(indice <= cantidadPaginas)
                {
                    let indiceRegistros = (indice - 1) * registrosXPagina;
                    traerRegistros(registrosXPagina, indiceRegistros);
                }
                else
                {
                    indice = cantidadPaginas;
                    let indiceRegistros = (indice - 1) * registrosXPagina;
                    traerRegistros(registrosXPagina, indiceRegistros);
                }
            }
        })
    });
}
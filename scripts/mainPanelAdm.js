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

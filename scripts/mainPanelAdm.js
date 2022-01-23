const menuButtons = document.querySelector('.productos-en-stock__div-buttons');
const buttonLeft = document.getElementById('buttonLeft');
const buttonRight = document.getElementById('buttonRight');

let cont = 0;
menuButtons.addEventListener('click', (e) => {

    if(e.target.id == buttonLeft.id){
        cont -= 1;
        const xml = new XMLHttpRequest();
        xml.open('POST', '../Models/getProductosAjax.php');
        xml.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        xml.addEventListener('load', () => {
            console.log(xml.responseText);
        })
        xml.send(`cont=${cont}`);
    }
    else if(e.target.id == buttonRight.id){
        cont += 1;
        const xml = new XMLHttpRequest();
        xml.open('POST', '../Models/getProductosAjax.php');
        xml.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        xml.addEventListener('load', () => {
            console.log(xml.responseText);
        })
        xml.send(`cont=${cont}`);
    }
})
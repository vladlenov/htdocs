"use strict";
// @description
// * В html есть елемент с классом 'menu', и в нем есть три кнопки с классом 'menu-btn'.
// * Сделайте так, чтобы при нажатии на одну из них меняся контент в блоке с классом'content'
// *
// * @example
// * Например, нажал на первую кнопку в блоке 'content' появилась одна картинка, нажал
// * на вторую, прошлая картинка пропала и появилась новая.
// *
// * @description
// * - Активная кнопка должна подсвечиватся с помощью css класса .active
// * - Реализвать с помощью OOP

var clickElement = document.getElementsByClassName('menu-btn');
var content = document.querySelector('.content');

function changeContent(element) {
    if (element.innerText === "image 1")
    {
        content.setAttribute('src', 'http://psyplants.info/wp-content/uploads/2016/05/indika-sativa-ruderalis.jpg')
    }
    else if (element.innerText === "image 2")
    {
        content.setAttribute('src', 'http://psyplants.info/wp-content/uploads/2016/05/konoplianoe-pole.jpg')
    }
    else if (element.innerText === "image 3")
    {
        content.setAttribute('src', 'https://semyanich.store/uploads/image/indica-pahnet-silnee-sativi.jpg')
    }
}

console.log(clickElement);
console.log(content);
console.log();
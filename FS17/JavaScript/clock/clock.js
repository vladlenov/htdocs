// текущее время дата
var time = document.querySelector('.time');
var seconds = document.querySelector('.seconds');
var day = document.querySelector('.date');

function oneSecond() {
    var date = new Date();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    var hour = date.getHours();
    if(min < 10) min = "0" + min;
    if(sec < 10) sec = "0" + sec;

    time.innerHTML = hour + ' : ' + min;
    seconds.innerHTML = sec;
    var month = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
    day.innerHTML = date.getDate() + ' ' + month[date.getMonth()] + ' ' + date.getFullYear();
}

window.setInterval(oneSecond, 1000);
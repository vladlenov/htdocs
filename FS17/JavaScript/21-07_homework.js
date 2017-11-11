'use strict'
/**
 * Написать задачу для выявления счасливого билета. Код билета состоит из 6 цифр (Пример: '246552'),
 * Счасливый считается тот, в котором сумма превых трех и последних трех цифр равна.
 * Вы должны использовать функцию в которую вы должны передавать string из 6 цифр (Пример: '246552')
 * Сделать валидацию входный данных
 * isTicketHappy
 * @returns {*}
 */

function isTicketHappy() {
    var data = prompt('Введите шестизначный номер билета');
    var array = data.split('');
    var sum1 = 0;
    var sum2 = 0;
    for (var i = 0; i < 3; i++){
        sum1 += parseInt(array[i],10);
    }
    for (var j = 3; j < 6; j++){
        sum2 += parseInt(array[j],10);
    }
    if (sum1 == sum2) {
        alert('Ваш билет счастливый');
    } else {
        alert ('Сегодня Вам не повезло');
    }
}
alert(isTicketHappy());

// console.log('Ticket is happy ? Answer ' + isTicketHappy('246452'));

/**
 * Написать таблицу умножение не используя циклов. Используйте рекурсию;
 * Создать функцию которая принимает то число (тип числа должен быть number), на которое должна вывестись
 * таблица умножения;
 * Сделать валидацию входный данных;
 * Multiplication table
 * @example of return;
 *   3 * 1 = 3
 3 * 2 = 6
 3 * 3 = 9
 3 * 4 = 12
 3 * 5 = 15
 3 * 6 = 18
 3 * 7 = 21
 3 * 8 = 24
 3 * 9 = 27
 */
function multiplicationTable(number, i) {
    if (!i) {
        i = 0;
    }
    if (i < 9) {
    i++;
        console.log(number + '*' + i + '=' + number * i);
        return multiplicationTable(number, i);
    } else {
        return false;
    }
}
console.log (multiplicationTable(6));


// var fn = closingMultiplicationTable(2);
//
// console.log(multiplicationTable(9));

/**
 * Написать таблицу умножение не используя циклов и рекурсии. Используйте замыкание;
 * Создать функцию которая принимает то число (тип числа должен быть number), на которое должна вывестись
 * таблица умножения;
 * Сделать валидацию входный данных;
 * Итератор должен быть исользован с помощью замыкания и хранится в области видимости функции;
 *
 * Closing Multiplication Table
 * @param number
 * @returns {*}
 * @example of call;
 *   var fn = closingMultiplicationTable(3);
 *
 *   fn();
 fn();
 fn();
 fn();
 fn();
 fn();
 fn();
 fn();
 fn();
 fn();
 * @example of return;
 *   3 * 1 = 3
 3 * 2 = 6
 3 * 3 = 9
 3 * 4 = 12
 3 * 5 = 15
 3 * 6 = 18
 3 * 7 = 21
 3 * 8 = 24
 3 * 9 = 27
 */

function multiplicationTable(number)  {
    i = 0;
    return function() {
        i++;
        console.log(number + '*' + i + '=' + number * i);
    }
}
var fn = multiplicationTable(9);

fn();
fn();
fn();
fn();
fn();
fn();
fn();
fn();
fn();
fn();
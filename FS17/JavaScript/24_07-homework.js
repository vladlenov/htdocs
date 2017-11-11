/**
 * Написать функцию которая принимает массив данных, и отдает массив типов данных
 * элементов массива который передали в функцию;
 * Написать валидацию на массив который передали функцию;
 * @example
 *  function arrayTypes ( ['Яблоко', 'Апельсин', 'Груша', 1, true, 3, false]) { ... }
 *  return ["string", "string", "string", "number", "boolean", "number", "boolean"]
 * @param array
 * @returns {Array}
 */
// var array = [];
// function arrayTypes (array) {
//     for(var i = 0; i < array.length; i++) {
//         array[i] = typeof(array[i])
//     }
//     return array;
// }
// console.log(arrayTypes(['Яблоко', 'Апельсин', 'Груша', 1, true, 3, false]));



/**
 * Написать контактную книгу в которой есть 3 публичных метода, и 2 приватный (подсказка)
 *
 * @tutorial
 *
 * @method add
 * @public
 * @description Принимает два параметра имя и телефон, имя должно быть string, телефон number
 * 1) Сделать валидацию входных данных
 * 2) У каждого контакта должно быть 3 поля (name, phone, id), id Должен автоматически инкрементироваться
 *    при добавлении контакта.
 *
 * @method get
 * @public
 * @description Выводит в консоль списко всех контактов
 *
 * @method delete
 * @public
 * @description
 * 1) Сделать валидацию входных данных
 * 2) Удаление елемента по индексу
 *
 * @constructor ContactBook
 */


 function ContactBook() {
    var contacts = [];
    var counter = 0;

    this.add = function (name, phone) {
        if (typeof name == 'string' && typeof phone == 'number') {
            contacts.push({
                "id": counter++,
                "name": name,
                "tel": phone
            });
        }
        else
        {
            throw new Error('Invalid params');
            return;
        }
    }

    this.get = function () {
            return contacts;
        }

}

    var myContactBook = new ContactBook();
    // var name = prompt('Введите Ваше имя');
    // var phone = prompt('Введите Ваш телефон');
    myContactBook.add('name', 12345);
    console.log(myContactBook.get());


// var myContactBook = new ContactBook();
//
// /** Добавление */
// myContactBook.add('Test', +380997778833);
//
// /** Получение */
// console.log(myContactBook.get());
//
// /** Удаление и получение нового списка */
// myContactBook.deleteByIndex(5);
// console.log(myContactBook.get());

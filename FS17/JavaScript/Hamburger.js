'use strict';

/**
 * Некая сеть фастфудов предлагает несколько видов гамбургеров:
 маленький (50 тугриков, 20 калорий)
 большой (100 тугриков, 40 калорий)
 Гамбургер может быть с одним из нескольких видов начинок (обязательно):
 сыром (+ 10 тугриков, + 20 калорий)
 салатом (+ 20 тугриков, + 5 калорий)
 картофелем (+ 15 тугриков, + 10 калорий)
 Дополнительно, гамбургер можно посыпать приправой (+ 15 тугриков, 0 калорий) и полить
 майонезом (+ 20 тугриков, + 5 калорий). Напиши программу, расчиытвающую стоимость и калорийность гамбургера.
 Используй ООП подход (подсказка: нужен класс Гамбургер, константы, методы для выбора опций и рассчета нужных величин).
 Код должен быть защищен от ошибок. Представь, что твоим классом будет пользоваться другой программист.
 Если он передает неправильный тип гамбургера, например, или неправильный вид добавки, должно выбрасываться исключение
 (ошибка не должна молча игнорироваться). Как правильно настроить исключения можно посмотреть тут
 https://learn.javascript.ru/exception
 Комментарии. Эта задача вызывает много непонимания, потому внимательно прочти эти комментарии перед решением.
 Это задача на ООП. Тебе надо сделать класс, который получает на вход информацию о гамбургере,
 и на выходе дает информацию о весе и цене. Никакого взаимодействия с пользователем и
 внешним миром класс делать не должен - все нужные данные ты передаешь ему явно. Ни спрашивать ничего, ни выводить.
 Почему? Потому что каждый должен заниматься своим делом, класс должен только обсчитывать гамбургер,
 а вводом-выводом пусть занимаются другие. Иначе мы получим кашу, где разные функции смешаны вместе.
 Типы начинок, размеры надо сделать константами. Никаких магических строк не должно быть.
 Переданную информацию о параметрах гамбургера класс хранит внутри в своих полях.
 Вот как может выглядеть использование этого класса:
 Комментарии ниже можно скопировать в свой код):
 * */
Hamburger.prototype = {};

/**
 * Класс, объекты которого описывают параметры гамбургера.
 *
 * @constructor
 * @param size        Размер
 * @param stuffing    Начинка
 * @throws {HamburgerException}  При неправильном использовании
 */
function Hamburger(size, stuffing) {

    this.size = size;
    this.stuffing = stuffing;


    if (arguments.length < 2) {
        throw new HamburgerException("Необходимы два входящих параметра, вы ввели: " + arguments.length)
    }
    if (Hamburger.sizes.indexOf(size) < 0 || Hamburger.stuffing.indexOf(stuffing) < 0)
     {
        throw new HamburgerException("Неверные входящие данные");
     }

/* Наборы свойств гамбургеров*/
Hamburger.sizes = [Hamburger.SIZE_SMALL, Hamburger.SIZE_LARGE];
Hamburger.stuffing = [Hamburger.STUFFING_CHEESE, Hamburger.STUFFING_POTATO, Hamburger.STUFFING_SALAD];
Hamburger.toppings = [Hamburger.TOPPING_MAYO, Hamburger.TOPPING_SPICE];

/* Размеры, виды начинок и добавок */
    Hamburger.SIZE_SMALL =
    {
        price: 50,
        calories: 20
    };

    Hamburger.SIZE_LARGE =
    {
        price: 100,
        calories: 40
    };

    Hamburger.STUFFING_CHEESE =
    {
        price: 10,
        calories: 20
    };

    Hamburger.STUFFING_SALAD =
    {
        price: 20,
        calories: 5
    };

    Hamburger.STUFFING_POTATO =
    {
        price: 15,
        calories: 10
    };

    Hamburger.TOPPING_MAYO =
    {
        price: 20,
        calories: 5
    };

    Hamburger.TOPPING_SPICE =
    {
        price: 15,
        calories: 0
    }
}

/**
 * Добавить добавку к гамбургеру. Можно добавить несколько
 * добавок, при условии, что они разные.
 *
 * @param topping     Тип добавки
 * @throws {HamburgerException}  При неправильном использовании
 */
Hamburger.prototype.addTopping = function (topping) {
    if (arguments.length != 1) {
        throw new HamburgerException("Выберите что-то одно, а не " + arguments.length)
    }
    if (Hamburger.allowedToppings.indexOf(topping) < 0)
    {
        throw new HamburgerException("Неправильная добавка");
    }
    if (!("toppings" in this)) {
        this.toppings = [];
    } else if (this.toppings.indexOf(topping) >= 0) {
        throw new HamburgerException("Добавка повторно")
    }
    this.toppings.push(topping);
}

/**
 * Убрать добавку, при условии, что она ранее была
 * добавлена.
 *
 * @param topping   Тип добавки
 * @throws {HamburgerException}  При неправильном использовании
 */
Hamburger.prototype.removeTopping = function (topping) {
    if (arguments.length != 1) {
        throw new HamburgerException("Выберите что-то одно, а не " + arguments.length)
    }
    if (Hamburger.allowedToppings.indexOf(topping) < 0) {
        throw new HamburgerException("Неправильная добавка");
    }
    if (this.toppings.indexOf(topping) < 0) {
        throw new HamburgerException("Гамбургер origin, без добавок!");
    }
    delete this.toppings[topping];
}
    /**
     * Получить список добавок.
     *
     * @return {Array} Массив добавленных добавок, содержит константы
     *                 Hamburger.TOPPING_*
     */
    Hamburger.prototype.getToppings = function () {
        return this.toppings;
    };

    /**
     * Узнать размер гамбургера
     */
    Hamburger.prototype.getSize = function () {
        return this.size;
    };

    /**
     * Узнать начинку гамбургера
     */
    Hamburger.prototype.getStuffing = function () {
        return this.stuffing;
    };

    /**
     * Узнать цену гамбургера
     * @return {Number} Цена в тугриках
     */
    Hamburger.prototype.calculatePrice = function () {
        var size = this.getSize();
        var price = size['price'];

        var toppings = this.getToppings();
        toppings.forEach(function (item) {
            price += item['price'];
        });

        var stuffing = this.getStuffing();
        price += stuffing['price'];

        return price;
    };

    /**
     * Узнать калорийность
     * @return {Number} Калорийность в калориях
     */
    Hamburger.prototype.calculateCalories = function () {
        var size = this.getSize();
        var calories = size['calories'];

        var toppings = this.getToppings();
        toppings.forEach(function (item) {
            calories += item['calories'];
        });

        var stuffing = this.getStuffing();
        calories += stuffing['calories'];

        return calories;
    };

    /**
     * Представляет информацию об ошибке в ходе работы с гамбургером.
     * Подробности хранятся в свойстве message.
     * @constructor
     */
    function HamburgerException() {
        this.message = message;
    }
/**
 * В дополнение, вот еще инструкция, как решать задачи на ООП. Когда ты решаешь задачу на ООП, ты должен ответить на вопросы:
 какие есть сущности, для которых мы сделаем классы? (Гамбургер).
 какие у них есть свойства (размер, начинка, добавки). Цена или калории не являются свойствами так как они вычисляются из других свойств и хранить их не надо.
 что мы хотим от них получить (какие у них должны быть методы). Например, сколько стоит гамбургер?
 как сущности связаны? У нас одна сущность «Гамбургер» и она ни с чем не связана.
 * */

/** Пример применения */
//  маленький гамбургер с начинкой из сыра
var hamburger = new Hamburger(Hamburger.SIZE_SMALL, Hamburger.STUFFING_CHEESE);
// добавка из майонеза
hamburger.addTopping(Hamburger.TOPPING_MAYO);
// спросим сколько там калорий
console.log("Calories: %f", hamburger.calculateCalories());
// сколько стоит
console.log("Price: %f", hamburger.calculatePrice());
// я тут передумал и решил добавить еще приправу
hamburger.addTopping(Hamburger.TOPPING_SPICE);
// А сколько теперь стоит?
console.log("Price with sauce: %f", hamburger.calculatePrice());
// Проверить, большой ли гамбургер?
console.log("Is hamburger large: %s", hamburger.getSize() === Hamburger.SIZE_LARGE); // -> false
// Убрать добавку
hamburger.removeTopping(Hamburger.TOPPING_SPICE);
console.log("Have %d toppings", hamburger.getToppings().length);
// 1
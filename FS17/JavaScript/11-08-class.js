'use strict';

// var a = 1;
//
//
//
// console.log(window.a);

//Порядок инициализации

// На первой фазе происходит инициализация, подготовка к запуску.
// На второй фазе – собственно, выполнение.
// На момент инициализации, до выполнения кода:
// window = { f: function, a: undefined, g: undefined }
// console.log(a);

// var a = 5;
// window = { f: function, a: 5, g: undefined }

// console.log(window.g);

// console.log(f);

// function firstFunction(arg) { /*...*/ }

// window = { f: function, a: 5, g: undefined } без изменений, f обработана ранее

// console.log(window.g);

// var g = function(arg) { /*...*/ };
// window = { f: function, a: 5, g: function }

// console.log(window.g());

// Проверяем

// alert("a" in window); // true,  т.к. есть свойство window.a
// alert(a); // равно undefined,  присваивание будет выполнено далее
// alert(f); // function ...,  готовая к выполнению функция
// alert(g); // undefined, т.к. это переменная, а не Function Declaration

// var a = 5;

// alert(a);

// function f() { /*...*/ }

// var g = function() { /*...*/ };

// Конструкции for, if... не влияют на видимость переменных

//
// var i = 5;
//
// if (i > 1) {
// 	console.log(i);
// }

// for (var i = 0; i < 5; i++) {
//
// }
//
//
// console.log(i);
// var i;
// for (i = 0; i < 5; i++) {
// 	var
// }
//
// console.log(i);

// console.log(window.i);


// i = 5;
// {
// 	var i;
// }

// Лексическое окружение
// Все переменные внутри функции – это свойства специального внутреннего
// объекта LexicalEnvironment, который создаётся при её запуске.

// function sayHi(name) {
// 	// LexicalEnvironment = { name: 'Вася', phrase: undefined }
//
// 	var phrase = "Привет, " + name;
// 	// LexicalEnvironment = { name: 'Вася', phrase: 'Привет, Вася'}
// 	function test() {
// 		console.log('test');
// 	}
//
// 	// LexicalEnvironment = { name: 'Вася', phrase: 'Привет, Вася',  test: function() {}}
//
// 	alert( phrase );
// }
//
// sayHi('Вася');
//
//
// function a() {
// 	console.log(r);
//
// 	function b() {
// 		console.log(t);
//
// 		function c() {
// 			var t = 5;
// 		}
// 	}
//
// 	var r;
//
// 	console.log(t);
// }

// function sayHi(name) {
// 	// LexicalEnvironment = { name: 'Вася', phrase: undefined }
// 	var phrase = "Привет, " + name;
//
// 	// LexicalEnvironment = { name: 'Вася', phrase: 'Привет, Вася'}
// 	alert( phrase );
// }
//
// sayHi('Вася');

// function a() {
// 	var a = 5;
// }
//

/**
 * Our Car
 * @constructor
 */
function Car() {
    var doorsStatusArray = [0, 0];
    var wheels = 4;
    var speed;
    var carColor = 'red';
    var carIsRun = false;
    var weight = 1000;
    var oil = 4242;

    var self = this;

    /**
     * Start car
     */
    this.start = function() {
        if (!self._carSystemChecker()) {
            throw new Error('Car system checker is failed');
        }

        self._calculateSpeed();
        self._setCarIsRun(true);

        console.log('Start');
        console.log(speed);
    };

    /**
     * Stop car
     */
    this.stop = function() {
        console.log('Stop');
        self._setCarIsRun(false);
    };

    /**
     * Car system checker
     * @returns {boolean}
     * @private
     */
    this._carSystemChecker = function() {
        if (self._checkDoors() && self._checkOil()) return true;
    };

    /**
     * Check Doors
     * @returns {boolean}
     * @private
     */
    this._checkDoors = function() {
        var result = false;

        for (var i = 0; i < doorsStatusArray.length; i++) {
            if (result) return;
            if (doorsStatusArray[i]) result = true;
        }

        return !result;
    };

    /**
     * Check Oil
     * @returns {boolean}
     * @private
     */
    this._checkOil = function() {
        if (oil) return true;
    };

    /**
     * Calculate speed
     * @private
     */
    this._calculateSpeed = function() {
        speed = wheels * weight / 100;
    };

    /**
     * Change car color
     * @param string
     */
    this.changeCarColor = function(string) {
        if (!string || typeof string !== 'string') {
            throw new Error('Invalid params');
        }
        self.stop();
        carColor = string;
        self.start();
        console.log('New car color is: ' + carColor);
    };

    /**
     * set Car is run
     * @param value
     * @private
     */
    this._setCarIsRun = function(value) {
        if (value === undefined || value === null || typeof value !== 'boolean') {
            throw new Error('Invalid params');
        }

        carIsRun = value;
    };
}

var car = new Car();

car.start();
car.changeCarColor('Blue');
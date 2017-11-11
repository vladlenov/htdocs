/**
 * Created by Владислав on 21.07.2017.
 */

'use strict';

var array = ['Яблоко', 'Апельсин', 'Груша', 1, 2, 3];

/** Push data to array */
array.push('Фрукт');

// console.log(array);

/** Remove last element from array */
array.pop();

// console.log(array);

/** Delete first element */
array.shift();

// console.log(array);

array.unshift('New first element');

// console.log(array);

var array2 = ['Яблоко', 'Апельсин', 'Груша', 1, 2, 3];

// console.log(array2.length);


// for (var i = 0; i < array2.length; i++) {
//
// }

var array3 = [
	[1, 2, 3],
	[4, 5, 6],
	[7, 8, 9]
];

// console.log(array3[1][2]);

// var string = 'Маше, Петя, Даша, Коля';

// var arr = string.split(', ', 2);

// console.log(arr);

// var arr = [1, 2, 3, 4, 5];

// var string = arr.join(';');

// console.log(string);
// for (var i = 0; i < arr.length; i++) {
// 	console.log(arr[i]);
// }


// var arr = [1, 2, 3, 4, 5];

// var array6 = arr.splice(1, 2);

// console.log(arr);
// console.log(array6);


// var arr2 = ['Мы', 'Изучаем'];
//
// arr2.splice(0, 0, 'JS', 'lalala');
//
// console.log(arr2);


// var arr = [1, 2, 3, 4, 5];
//
// var arr2 = arr.slice(1, 3);
//
// console.log(arr);
// console.log(arr2);

// var arr = [1, 2, 3, 4, 5];

// arr.sort(function(a, b) {
// 	if (a > b) return 1;
// 	if (a < b) return -1;
// });

// console.log(arr);
// console.log(arr2);

//
// var arr = [1, 2, 3, 4, 5];
//
// // console.log(arr.indexOf(3));
// console.log(arr.indexOf(353256));
//
// if (arr.indexOf() > -1) {
// 	console.log('Елемент в массиве');
// } else {
// 	console.log('Елемент не в массиве');
// }


// var a = {};
//
// a.name = 'Vlad';
// a.age = 20;
//
// a.getNameAndAge = function() {
// 	return this.name + ' ' + this.age;
// };
//
// var b = {
// 	name: 'Vova',
// 	age: 42
// };
//
// // console.log(a.getNameAndAge());
// a.name = 'New name';
//
// // console.log(a);
// // console.log(a.name);
// // console.log(a['name']);
//
// var newObject = a;
//
// console.log(newObject);
//
// newObject.name = 'new Object name';
//
// console.log(newObject);
// console.log(a);

// var object = {
// 	name: 'Vova',
// 	age: 42,
// 	country: 'Ukraine'
// };
//
// for (key in object) {
// 	console.log(key);
// 	console.log(object[key]);
// }

// c*m*треугольникT / power
function CoffeeMachine(power) {
	this.waterAmount = 0;

	var WATER_HEAT_CAPACITY = 4200;

	var _this = this;

	function getBoilTime() {
		this.a = 'ssd'
		return _this.waterAmount * WATER_HEAT_CAPACITY * 80 / power;
	}


	function onReady() {
		console.log('Кофе готов!');
	}

	var ab = new getBoilTime();
	console.log(ab.a);


	this.run = function() {
		setTimeout(onReady, getBoilTime);
	};

	// console.log(power);
}


var coffeeMachine = new CoffeeMachine(100);

coffeeMachine.waterAmount = 200;
coffeeMachine.run();









'use strict';

function l(str) {
    console.log(str);
}

// function Car() {
//     var doorsStatusArray = [0, 0];
//     var oilAmount = 7;
//     var wheels = 4;
//     var speed;
//     var carColor = 'red';
//     var carIsRun = false;
//     var weight = 1000;
//
//     var self = this;
//
//     this.start = function () {
//         if(self._checkDoors() && self._checkOil()){
//             console.log('Doors are closed, oil full - starting')
//             self._calculateSpeed();
//             self._setCarIsRun(true);
//             carIsRun = true;
//         } else {
//             console.log('Doors are open or oil empty - stop')
//         }
//
//         console.log('Car run at ' + speed + ' km/hour');
//     }
//
//     this.stop = function () {
//         carIsRun = false;
//         console.log('Car stop');
//     }
//
//     this.changeCarColor = function (newColor) {
//         if (newColor === undefined || newColor === null || typeof newColor !== 'string') {
//             throw new Error('Invalid params');
//         }
//         self.stop();
//         carColor = newColor;
//         self.start();
//         console.log(newColor);
//     };
//
//
//     this._setCarIsRun = function (value) {
//         if (value === undefined || value === null || typeof value !== 'boolean') {
//             throw new Error('Invalid params');
//         }
//         carIsRun = value;
//     };
//
//     this._checkDoors = function () {
//         var result = false;
//         for(var i= 0; i < doorsStatusArray.length; i++) {
//             if(result) return;
//             if(doorsStatusArray[i]) result = true;
//         }
//         return !result;
//     }
//
//     this._checkOil = function () {
//         if(oilAmount > 5) return true;
//         }
//
//     this._calculateSpeed = function () {
//         speed = wheels * weight / 100;
//     };
//
// }
//
// var car = new Car();
//
// console.log(car.start());
// car.changeCarColor('black');

// function CustomString() {
//
// }
//
// CustomString.cont = function (string1, string2){
//         return string1 + ' + ' + string2 + ' = любовь';
// };
//
// console.log (CustomString.cont('Вася', 'Петя'));

// function sum(arr) {
//     arr.reduce(function(a,b) {
//         return a + b;
//     })
// }
//
// console.log(sum([1,2,3, 4]));

// function sumArgs() {
//     arguments.reduce = [].reduce;
//     return arguments.reduce (arguments, function (a, b) {
//         return a + b;
//     })
// }
// console.log(sumArgs([1,2,3,4,5]));
//
// function sumArgs() {
//     // запустим reduce из массива напрямую
//     return [].reduce.call(arguments, function(a, b) {
//         return a + b;
//     });
// }
//
// alert( sumArgs(4, 5, 6) ); // 15
//
// function sum() {
//     var result = 0;
//
//     for (var i = 0; i < arguments.length; i++) {
//         result += arguments[i];
//     }
//
//     return result;
// }

// var profile = {
//     sex: 'male',
//     efwef: 'sdvfsd'
// }
//
// var user = {
//     name: 'Vlad',
//     age: 33,
//     __proto__:{ sex: profile.sex }
// }
//
//
// user.prototype = profile;
//
// console.log(user);


// var animals = {
// 	eats: true
// };
//
// var rabbit = {
// 	jumps: true,
// 	23: false,
// 	__proto__: animals
// };
//
// l(rabbit);
//
// for (var key in rabbit) {
// 	if (!rabbit.hasOwnProperty(key)) continue;
// 	// l(key + ':' + rabbit[key]);
// }

// l(rabbit.hasOwnProperty('23'));

// var animals = {
// 	eats: true
// };
//
// function Rabbit(name) {
// 	this.name = name;
// 	this.__proto__ = animals;
// }

// var animals = {
// 	eats: true
// };
//
// function Rabbit(name) {
// 	this.name = name;
// }
//
// Rabbit.prototype = animals;
//
// var rabbit = new Rabbit('Rab');
//
// Rabbit.prototype.constructor = animals.prototype.constructor;
//
//
// new Date();


// function Form() {
//     this._arrayOfButton = [];
// }
//
// Form.prototype.addButton = function(name, image, fn) {
//     if (!arguments) return;
//
//     var tempBtn = {
//         name: name,
//         image: image,
//         fn: fn
//     };
//
//     this._arrayOfButton.push(tempBtn);
//     l(this._arrayOfButton);
// };
//
// Form.prototype.deleteBtn = function(name) {
//     if (!name) return;
//
//     var findIndex;
//     for (var i = 0; i < this._arrayOfButton.length; i++) {
//         if (this._arrayOfButton[i].name === name) {
//             findIndex = i;
//         }
//     }
//
//     delete this._arrayOfButton[findIndex];
//
//     l(this._arrayOfButton);
// };
//
// var form = new Form();
//
// form.addButton(
//     'Bold',
//     'http://www.skinsheen.com/userfiles/image/Head%20Shave%20Trends(1).JPG',
//     function() {
//         l('SetTextToBold');
//
//         setTimeout(function() {
//             this.style.fontWeight = '800';
//         }, 2000)
//     }
// );
//
// form.deleteBtn('Bold');
//
// form.changeBtn('Bold', 'image', 'http://img');

// Object.prototype.each = function (f) {
//     for (var key in this) {
//         if (!this.hasOwnProperty(key)) continue; //не учитывается __proto__
//         var value = this[key];
//         f.call(value, key, value);
//     }
// };
//
// var b = {
//     name: 'vlad',
//     age: 20,
//     __proto__: {sex: 'male'}
// }
//
// b.each(function (key, value) {
//     alert(key + ':' + value)
//
// });

// function Animal(name) {
//     this.speed = 0;
//     this.name = name;
//
//     this.sayHi = function () {
//         alert(name);
//     }
//
//     // this.run = function (speed) {
//     //     this.speed += speed;
//     //     console.log(this.name + ' run with speed ' + this.speed);
//     // }
//     //
//     // this.stop = function () {
//     //     this.speed = 0;
//     //     console.log(this.name + ' stopped ');
//     // }
// }
//
// //так круче - согласитесь:
// Animal.prototype.run = function (speed) {
//     this.speed += speed;
//     console.log(this.name + ' run with speed ' + this.speed);
// }
//
// Animal.prototype.stop = function () {
//     this.speed = 0;
//     console.log(this.name + ' stopped ');
// }
//
// Animal.prototype.SayHi = function () {
//     alert(this.name);
// }
//
// var animal = new Animal('Wolf');
// animal.run(3);
// animal.run(10);
// animal.stop();
//
// function Rabbit(name) {
//     this.name = name;
//     this.speed = 0;
// }
// // наследование
// Rabbit.prototype = Object.create(Animal.prototype); // как нормально
// Rabbit.prototype.constructor = Rabbit;              // отнаследовать
//
// Rabbit.prototype.jump = function () {
//     this.speed++;
//     console.log(this.name + ' jump')
// }
//
// var rabbit = new Rabbit('Artem');
//
//
// // rabbit.jump();
// rabbit.run(1);
//
// // переопределить метод run
// Rabbit.prototype.run = function () {
//     this.speed++;
//     this.jump();
// }
//
// console.log(rabbit);

// function User(name, surname) {
//     this.firstName = name;
//     this.lastName = surname;
// }
//
// User.prototype.showFullName = function () {
//     console.log('Hello' + this.firstName + this.lastName)
// };
//
// function Gopnik(name) {
//     this.firstName = name;
//     this.spinnerIsRun = false;
// }
//
// Gopnik.prototype = Object.create(User.prototype);
// Gopnik.prototype.constructor = Gopnik;
//
// Gopnik.prototype.spinSpinner = function () {
//     this.name = name;
//     this.spinnerIsRun = true;
//     console.log('Spinner is run');
// };
//
// var gopnik = new Gopnik('Vasyok');
// console.log(gopnik);


// function Animal(name) {
//     this.speed = 0;
//     this.name = name;
//     }

// this.run = function (speed) {
//     this.speed += speed;
//     console.log(this.name + ' run with speed ' + this.speed);
// }
//
// this.stop = function () {
//     this.speed = 0;
//     console.log(this.name + ' stopped ');
// }
//}
//
// //так круче - согласитесь:

// Animal.prototype.run = function (speed) {
//     this.speed += speed;
//     console.log(this.name + ' run with speed ' + this.speed);
// }
//
// Animal.prototype.stop = function () {
//     this.speed = 0;
//     console.log(this.name + ' stopped ');
// }
//
// Animal.prototype.SayHi = function () {
//     alert(this.name);
// }
//

// class Animal {
//     constructor(name){
//         this.name = name;
//         this.speed = 0;
//         this._age = null;
//     }
//     run(speed) {
//         this.speed += speed;
//         console.log(this.name + ' run with speed ' + this.speed);
//     }
//
//     stop() {
//         this.speed = 0;
//         console.log(this.name + ' stopped ');
//     }
//     set age(value){
//         if (!value) throw new Error();
//         this._age = value;
//     }
//
//     get age (){
//         return this._age;
//     }
//
//     static animalIsGuest(name){
//         if(name){
//             var anim = new Animal(name);
//             return anim;
//         }
//     }
// }
//
//
//
// var animal = new Animal('Wolf');
// animal.run(3);
// animal.run(10);
// animal.stop();
// animal.age = 100;
//
//
// console.log(animal);
//
// console.log(Animal.animalIsGuest('Vlad'));
//
// class Rabbit extends Animal{
//     constructor(name) {
//         super();
//         this.name = name;
//         this.speed = 0;
//     }
//
// jump(){
//         this.speed++;
//         console.log(this.name + ' jump');
// }
// }
// var animal = new Animal('Artem');
// var rabbit = new Rabbit('Nata');
//
// // rabbit.jump();
// rabbit.run(1);
//
// console.log(rabbit);

// var make_me = function(_name) {
//     alert('меня запустили');
//     this.name=_name;
//     this.show_name=function() {alert(this.name);}
// }
//
// make_me.prototype.set_name=function(_name) {this.name=_name;}
// var child=new make_me('Вася');
//
// //l(make_me.prototype); //object - у функции есть свойство prototype
// l(child); //undefined - у созданного объекта НЕТ свойства prototype
// l(child.constructor); //true - зато у объекта есть свойство constructor, которое указывает на функцию-конструктор make_me, у которой, в свою очередь, есть свойство prototype

// var content = document.getElementById('content');
// l(window['content']);
// l(content);

// var span = document.getElementsByTagName('span');
// l(span[0]);

// var ageEl = document.getElementsByName('age');
// l(ageEl[0]);

// var postElements = document.getElementsByClassName('post');
// l(postElements);

// var defaultInputs = document.querySelectorAll('.default');
// l(defaultInputs);

// var contentQuery = document.querySelectorAll('#content');
// l(contentQuery);

// var contentQueryInput = document.querySelectorAll('input');
// l(contentQueryInput);
//
// var image = document.querySelectorAll('.image');
// image[1].style.backgroundColor = 'red';
//
// var title = document.querySelector('.title');
// title.style.fontSize = '20px';
// title.style.color = 'green';
//
// var describtion = document.querySelector('.description');
// describtion.style.backgroundColor = 'gray';
//
// var secondComment = document.querySelectorAll('.comments .comment');
// secondComment[1].style.backgroundColor = 'yellow';

// l(image);
// l(title);
// l(describtion);
// l(secondComment);
//
// function getData(type) {
//     var name = document.querySelector('.default-name');
//     var age = document.querySelector('.default-age');
//
//     if (type && type === 'name') {
//         if (!name.value) return;
//         var infoName = document.querySelector('.user-info-name');
//         if (infoName) {
//             infoName.innerText = 'Name: ' + name.value;
//         }
//     }
//     if (type && type === 'age') {
//         if (!age.value) return;
//         var infoAge = document.querySelector('.user-info-age');
//         if (infoAge) {
//             infoAge.innerText = 'Age: ' + age.value;
//         }
//     }
// }


// if(name.value && age.value){
//     l('Name:' + name.value);
//     l('Age:' + age.value);
// }

// if(infoName && infoAge) {
//     infoName.innerText = 'Name: ' + name.value;
//     infoAge.innerText = 'Age: ' + age.value;
// }
// function l(msg) {
//
// }
//
// document.body.myData = {
//     name: 'Vlad',
//     age: 20,
// };
//
// document.body.helloWorld = function () {
//     console.log('Hello World');
// };
//
// var element = document.createElement('div');
//
// l(element.hasAttribute('src'));
//
// element.setAttribute('src', );

// var newInput = document.createElement('input');
//
// newInput.setAttribute('type', 'text');
// newInput.setAttribute('value', 'new-input');
//
// l(newInput);
// l(newInput.attributes);
//
//
// function toggleClass(el) {
//
// }


// var subComment = document.querySelector('.sub-comment:nth-child(2)');
// var newSpan = document.createElement('span');
// // newSpan.innerText = 'text-text';
// subComment.insertBefore(newSpan, null);

/** Find child in parent */
// var post = document.querySelector('.post');
// var comment = document.querySelector('.comment');
//
// // var result = post.contains(comment);
// //
// // console.log(result);
//
// document.body.myData = {
//     name: 'Vlad',
//     age: 20
// };
//
// document.body.helloWorld = function() {
//     console.log('Hello World!');
// };
//
// var element = document.createElement('img');
// // Проверка наличия
// l(element.hasAttribute('src'));
//
// element.setAttribute('src', 'http://www.theboardgamefamily.com/wp-content/uploads/2010/08/Sequence-board1.jpg');
// element.setAttribute('custom', {});
//
// l(element.hasAttribute('src'));
// l(element.getAttribute('src'));
//
// // element.removeAttribute('custom');
//
// document.body.appendChild(element);
//
// l(element.attributes);
//
// l(element.innerHTML);
//
// // a.href = '/';
// //
// // l(a.getAttribute('href'));
// // l(a.href);
//
// var input = document.querySelector('input');
//
// input.value = 'new';
//
// input.setAttribute('value', 'new');
//
// l(input.getAttribute('value'));
//
//
// if (!input.getAttribute('value')) {
//     setInvalidClass(input);
// }
//
// function setInvalidClass(el) {
//     el.className = 'red first second third';
// }
//
// setInvalidClass(input);
//
// l(input.classList);
//
// l(input.classList.contains('red'));
//
// input.classList.add('blue');
// input.classList.remove('red');
//
// function setElementActive(el) {
//     el.classList.add('active');
// }
// function setElementInActive(el) {
//     el.classList.remove('active');
// }
//
//
// function toggleClass(el, toggleClass) {
//     if (el.classList.contains(toggleClass)) {
//         el.classList.remove(toggleClass);
//     } else {
//         el.classList.add(toggleClass);
//     }
// }
//
// input.classList.toggle('red-rect');
//
// l(input.getAttribute('data-age'));
//
// input.dataset
//
//
// var result = post.compareDocumentPosition(comment);
//
// console.log(result);
//
// // 0 nodeA и nodeB - один и тот же узел
// // 1 Узлы в разных документах
// // 2 nodeB предшествует nodeA
// // 4 nodeA предшествует nodeB
// // 8 nodeB содержит nodeA
// // 16 nodeA содержит nodeB
// // 32 Зарезервировано для браузера
//
// var p = document.querySelector('p');
// var ul = document.querySelector('ul');
// var li = document.querySelector('li');
//
// // console.log(ul.compareDocumentPosition(p)); // 2 = 10
//
// var span = document.createElement('span');
// var secondElement = document.querySelector('.sub-comments:nth-child(2)');
//
// // post.appendChild(textEl);
// secondElement.insertBefore(span, null);
// /** Создать елемент span и ваставить его во второй .sub-comments */
//
//
// var article = document.querySelector('.article');
// var commentsBlock = document.querySelector('.comments-block');
// var cloneCommentBlock = commentsBlock.cloneNode(false);
//
// article.appendChild(cloneCommentBlock);
//
// // article.removeChild(document.querySelector('.comments-block'));
//
// article.replaceChild(span, commentsBlock);
//
// var =
//
// var ul = document.createElement('ul');
// document.body.appendChild(ul);
//
// for (var i = 0; i < 5; i++) {
// 	ul.appendChild(li)
// }
//
// setTimeout(function() {
// 	var ul = document.createElement('ul');
// 	document.body.appendChild(ul);
//
// 	for (var i = 0; i < 5; i++) {
// 		var li = document.createElement('li');
// 		ul.appendChild(li)
// 	}
//
// var ul = document.createElement('ul');
// for (var i = 0; i < 5; i++) {
// 	var li = document.createElement('li');
// 	ul.appendChild(li)
// }
// document.body.appendChild(ul);
// }, 5000)

// var ul = document.querySelector('ul').children[0].children[0].children[1];
// var ul = document.querySelector('ul > li > ul > li:last-child'); //css
// var li = ul.children[0];
//
// li.insertAdjacentHTML('beforeBegin', '<span>Test</span>');
// li.insertAdjacentHTML('beforeEnd', '<span>Test2</span>');
// li.insertAdjacentHTML('afterBegin', '<span>Test3</span>');
// li.insertAdjacentHTML('afterEnd', '<span>Test4</span>');

// var a = {
//     top:10,
//     right:10,
//     text:'Hello World',
//     className:'custom-alert'
// }
//
// function showNotification(options) {
//     var el = document.createElement('div');
//     el.className = 'custom-alert';
//     // el.style.cssText = options.cssText;
//     el.cssText = 'top:' + options.top + 'px;' +
//                  'right:' + options.right + 'px;';
//     el.innerText = options.text;
//     el.className = options.className;
//     document.body.appendChild(el);
//
//     setTimeout(function() {
//         document.body.removeChild(el);
//     }, 1500);
// }

// var el = document.createElement('div');
// el.className = 'first';
// document.body.appendChild(el);
//
// var el2 = document.createElement(el2);
// el2.className = 'second';
// document.body.appendChild(el2);
//
//
// l(el.offsetLeft - el2.offsetWidth - el2.offsetLeft);

// var first = document.querySelector('.first');

// first.style.backgroundColor = 'red';
// first.style.backgroundColor = "";
// first.style.display = 'none';
// first.style.display = '';

// first.style.cssText = '\t\t\t\twidth:' + 100 + 'px;\n' +
// 	'\t\t\t\theight: 100px;\n' +
// 	'\t\t\t\tbackground-color: gray;\n' +
// 	'\t\t\t\tfloat: right;';

// console.log(first.style);

// var computed = getComputedStyle(first).perspectiveOrigin;
// console.log(computed);
// var current = first.currentStyle;
//
// var a = {
//     top: 10,
//     right: 10,
//     text: 'Hello World!',
//     className: 'custom-alert'
// };

/**
 *
 * @param options
 */
// function showNotification(options) {
//     var el = document.createElement('div');
//     el.cssText =    'top:' + options.top + 'px;' +
//         'right:' + options.right + ';';
//     el.innerText = options.text;
//     el.className = options.className;
//     document.body.appendChild(el);
//
//     setTimeout(function() {
//         document.body.removeChild(el);
//     }, 1500);
// }
//
// showNotification(a);
//
// // Смещение относительно родителя
// // offsetParent, offsetLeft / offsetLeft
//
// document.cloneNode()

// function showAlert() {
//     alert('Hello World!');
// }

// var box = document.querySelector('.box-default');

// box.onmouseover = function () {
//     showAlert();
// }
// //без скобок
// box.onmouseover = showAlert;
//
// var input = document.querySelector('.default-input');
//
// function showAlertValue(value) {
//     console.log('Value is: ' + value);
// }

// function consoleDog (){
//     console.log('GAV');
// }
//
// box.addEventListener('mouseover', consoleDog);
// box.addEventListener('click', consoleDog);
// box.removeEventListener('click', consoleDog);
// box.removeEventListener('mouseover', consoleDog);

// function changeColor() {
//     this.classList.add('box-active') ;
// }
//
// function changeColorBack() {
//     this.classList.remove('box-active');
//     this.classList.add('box-default') ;
// }
//
// box.addEventListener('mouseover', changeColor);
// box.addEventListener('mouseleave', changeColorBack);

// var box = document.querySelector('.box');
//
// var boxWrapper = document.querySelector('.box-wrapper');
// function onClick(event) {
//     console.log(event);
//     console.log(this);
//
//     if(event.target.className === 'box'){
//         event.target.classList.add('yellow');
//     }
// }
// boxWrapper.addEventListener('click', onClick);
//
// var btnWrapper = document.querySelector('.button-wrapper');
//
// class Menu {
//     constructor(elem){
//        elem.addEventListener('click', this.onClick.bind(this));
//     }
//
//     onClick(event){
//         console.log(event);
//         if(event.target.dataset.action){
//             var action = event.target.dataset.action;
//             this[action]();
//         }
//     }
//
//     save(){
//         alert('Save');
//     }
//
//     load(){
//         alert('Load');
//     }
//
//     search(){
//         alert('earch');
//     }
// }

// new Menu(btnWrapper);


// var message = document.querySelector('.messages-wrapper');
//
// function deleteMessage(event){
//     if(event.target.dataset['buttonType'] === 'delete'){
//         this.removeChild(event.target.parentNode);
//     }
// }
//
// message.addEventListener('click', deleteMessage);

// function toolTip(event){
//     var toolTipValue = event.target.dataset['tooltip'];
//     if(toolTipValue){
//         var toolTipElement = document.createElement('div');
//         toolTipElement.className = 'tooltip'
//         event.target.insertAdjacentHTML("beforeEnd","");
//     }
// }
//
// document.addEventListener('mouseover', tooltip);

// document.querySelector('img').addEventListener('click', function (event) {
//     l(event.pageX);
//     l(event.pageY);
// });

// var snowMan = document.querySelector('img');
// snowMan.addEventListener('mousedown', function(e) {
//     document.body.appendChild(snowMan);
//     moveAt(e);
//     snowMan.style.position = 'absolute';
//     snowMan.style.zIndex = 1000;
//
//     document.addEventListener('mousemove', moveAt)
//
//     snowMan.addEventListener('mouseup', function() {
//         document.removeEventListener('mousemove', moveAt);
//     })
// })
//
// function moveAt(e) {
//     snowMan.style.left = e.pageX + 'px';
//     snowMan.style.top = e.pageY + 'px';
// }


// var a = {a: 1, b: 2};
// var b = [1, 2, 3]
//
// function count(a) {
//     for (let i = 0; i < a.length; a++) {
//         console.log(`Объект содержит: ` + i + `элементов`);
//     }
// }
//
// count(a);

// var a = {a: 1, b: 2};
// var b = [1, 2, 3]
//
// function count(obj) {
//     var num = 0;
//     for (var i in obj) {
//         num++;
//     }
//     console.log('Объект содержит: ' + num + 'элем.')
// }
//
// count(a); //2
// count(b); //3

// Задание 2
// для двух аргументов
// let sum = (a) => {
//     let sum = (b) => {
//         return a + b
//     };
//     return sum;
//     console.log(sum);
// };
// sum(4)(6); //10
//
// // для любого количества аргументов
// let sum = (a) => {
//     let result = (b) => {
//         a += b;
//         return result
//     }
//     result.toString = () => {
//         return a
//     };
//     return result;
//     console.log(result);
// }
// sum(2)(3)(5); // 10


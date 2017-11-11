// 1) Написать функцию, считающую число свойств в коллекции.
//    Например:
var a = {a:1, b:2};
var b = [1,2,3]
count(a) // 2
count(b) // 3

// Решение:
var a = {a:1, b:2};
var b = [1,2,3]

function count(obj) {
    var num = 0;
    for (var i in obj){
        num++;
    }
    console.log('Объект содержит: ' + num + 'элем.')
}

count(a); //2
count(b); //3
//console.log(Object.keys(a).length); //2
//console.log(Object.keys(b).length); //3

// 2) Написать функцию, чтобы в ответе получилась сумма аргументов.
//    С помощью стрелочных функций: sum(2)(3)

let sum = (a,b) => a + b;
console.log('Сумма аргументов функции составляет: ' + sum(4,6)); // 10

// но это если мы знаем, что аргумента два.

//    а если нет - то что-то вроде этого:

    let sum = (...args) => args.reduce((a, b) => a + b, 0);
console.log(sum(4,6)); //10

// для любого количества аргументов
let sum = (a) => {
    let result = (b) => {
        a += b;
        return result
    }
    result.toString = () => {
        return a
    };
    return result;
    console.log(result);
}
sum(2)(3)(5); // 10

//Ещё бы разобраться на уроке, как надо модифицировать решение этой задачи через цикл,
// т.к., видимо, из-за области видимости let, она не решается таким вот образом:

    let argsSum = (args) => {
        let sum = 0;
        for (let i in args){
            sum += args[i];
        }
        console.log(sum);
    }
argsSum(4,6); //0



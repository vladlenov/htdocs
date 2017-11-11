/**
 * Created by Владислав on 14.07.2017.
 */

/** If Else */
var name = 'Vlad';
var age = 19;

if (name === 'Vlad') {
	console.log(name);

	if (name.length < 5) {
		console.log('Name: ' + name + ' , it a short name!');
	} else {
		console.log('You have a long name!');
	}
} else {
	console.log('No your name');
}

var switchVariable = 2;

switch (switchVariable) {
	case 1:
		console.log(1);
		break;
	case 2:
		console.log(2);
		break;
	case 3:
		console.log(3);
		break;
}

// var i = 0;
// while (i < 10)  {
// 	console.log(i);
// 	i++;
// }

// var j = 0;
// do {
// 	j++;
// 	console.log(j);
// } while (j < 10);

for (var g = 0; g < 10; g++) {
	if (g > 3 && g < 10) {
		console.log(g);
	} else {
		break;
	}

}


for (var i = 0; i < 10; i++) {
	for (var j = 0; j < 10; j++) {

	}
}
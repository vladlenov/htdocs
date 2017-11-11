const express = require('express');
const bodyParser = require('body-parser');
// Set up express app

const app = express();

app.use(bodyParser.json());

var recipes = {
	"name": "Crock Pot Roast",
	"ingredients": [
		{
			"quantity": "1",
			"name": " beef roast",
			"type": "Meat"
		},
		{
			"quantity": "1 package",
			"name": "brown gravy mix",
			"type": "Baking"
		},
		{
			"quantity": "1 package",
			"name": "dried Italian salad dressing mix",
			"type": "Condiments"
		},
		{
			"quantity": "1 package",
			"name": "dry ranch dressing mix",
			"type": "Condiments"
		},
		{
			"quantity": "1/2 cup",
			"name": "water",
			"type": "Drinks"
		}
	],
	"steps": [
		"Place beef roast in crock pot.",
		"Mix the dried mixes together in a bowl and sprinkle over the roast.",
		"Pour the water around the roast.",
		"Cook on low for 7-9 hours."
	],
	"timers": [
		0,
		0,
		0,
		420
	],
	"imageURL": "http://img.sndimg.com/food/image/upload/w_266/v1/img/recipes/27/20/8/picVfzLZo.jpg",
	"originalURL": "http://www.food.com/recipe/to-die-for-crock-pot-roast-27208"
};

//error handling middleware
app.use(function(err, req, res, next) {
	// console.log(err);
	res.status(422).send({
		error: err.message
	})
});


app.get('/recipes', function(req, res, next) {
	res.header("Access-Control-Allow-Origin", "*");
	res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
	if (req.query.name) {
		res.json(recipes);
	} else {
		res.status(500).send({ error: 'Something failed!' });
	}
});

// listen for requests
app.listen(process.env.port || 4000, function() {
	console.log('start server');
});
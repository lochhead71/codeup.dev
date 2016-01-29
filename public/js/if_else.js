// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'indigo'; // TODO: change this to your favorite color from the list

if (color=='red') {
	console.log (color + " is the color of Republican states.");
}

else if (color=='orange') {
	console.log (color + " is the color of Trump's hair.")
}

else if (color=='yellow') {
	console.log (color + " is the color of Democrat dogs.")
}

else if (color=='green') {
	console.log (color + " is a political party most people haven't heard o.")
}

else if (color=='blue') {
	console.log (color + " is the color of Democratic states.")
}

else {
	console.log ("I do not know anything by that color.")
}

console.log ((favorite == color) ? color + " is my favorite." : color + " is NOT my favorite color.");

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.


var whatAmI = function () {};

switch (typeof whatAmI) {
    case "boolean":
        console.log("You are a boolean.");
        break;
    case "number":
        console.log("You are a number.");
        break;
    case "string":
        console.log("You are a string.");
        break;
    case "function":
    case "object":
        console.log("You are an object.");
        break;
    case "undefined":
        console.log("You are undefined.");
        break;
    default:
        console.log("I have no clue.");
}

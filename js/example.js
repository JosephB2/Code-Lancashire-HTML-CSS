// outputting text
console.log("Hello world")

// using let to declare a variable
let my_number = 7
console.log(my_number)
my_number = 10
console.log(my_number)

// using var to declare a variable
var a_number = 1

// declaring a constant
const pi = 3 // sorry to the mathematicians
console.log(pi)

// if statements and boolean logic
if( my_number > pi && a_number == 1 ) {
    console.log("Yep")
}
else {
    console.log("Nope")
}

// concatenation
console.log("Pi is (very approximately) equal to " + pi)
console.log(`My number is ${(my_number - a_number)}...`)

// functions
function equalsThree(num) {
    if( num == 3 ) {
        return true
    }
    else {
        return false
    }
}
console.log(equalsThree(pi))
console.log(equalsThree(my_number))

// array
const languages_used = ["HTML", "CSS", "PHP", "JavaScript"]

// objects
const item = {
    name: "Hot Chocolate",
    vol_ml: 500,
    price: 4.99,
    ingredients: ["Milk", "Cocoa powder"],
    category: "Hot Drinks"
}
console.log(item.name)

// for loops
for(let i = 0; i < item.ingredients.length ; i++) {
    console.log(item.ingredients[i])
}

// array methods
let numbers = [1, 2, 4, 6, 7, 8, 8]
let even_numbers = numbers.filter(
    (number, index, numbers) => {
        return number % 2 == 0
    }
)
console.log(even_numbers)
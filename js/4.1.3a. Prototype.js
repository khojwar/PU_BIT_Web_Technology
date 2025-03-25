// const myName = "ram    "

// Object.prototype.hello = function() {
//     console.log(this);
//     console.log("I am present in all objects")
// }

// myName.hello()


// names = ["ram", "shyam", "hari"]

// // names.hello()





// function Person(name, age) {
//     this.name = name
//     this.age = age

//     this.details = function() {
//         console.log(this["name"]);
//         // return `${this.name} is ${this.age} years old`
//     }
// }


// Person.prototype.greet = function() {
//     console.log(`Hello, my name is ${this.name}`);
// }


// const p = new Person("ram", 30)
// const p2 = new Person("shyam", 25)
// p2.greet()
// // console.log(p.details());









function Person(name, age) {
    this.name = name
    this.age = age
}


Person.prototype.tikaram = function(){
    console.log("I am present in all objects")
}

const p = new Person("ram", 30)
p.tikaram()


const str1 = "BIT"
str1.tikaram()







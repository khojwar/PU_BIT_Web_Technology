// // Constructor function 
// function Person(name, age) { 
//     this.name = name; 
//     this.age = age; 
    
//     this.greet = function() { 
//         // console.log(this);
        
//     return `Hello, my name is ${this.name}`; 
//     }; 
// } 

// // Creating objects using the constructor with the 'new' keyword 
// const john = new Person("John", 30); 
// // const jane = new Person("Jane", 25); 

// console.log(john.greet());  
// // console.log(jane.greet());  



function Person(name, age) {
    this.name = name;
    this.age = age;

    this.details = function() {
        console.log(this);
        
        console.log(`${this.name} is ${this.age} years old`);
    }
}


let john = new Person("John", 30)
let Bristi = new Person("Bristi", 21)
// john.details()

Bristi.details()














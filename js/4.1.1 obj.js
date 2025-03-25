

// // Creating an object using object literal notation 
// const person = { 
//     name: "John", 
//     age: 30, 
//     isEmployed: true, 

//     details: function() { 
//         return `${this.name} is ${this.age} years old`; 
//     }
// }; 

// // Accessing properties 
// console.log(person.name);        
// console.log(person["age"]);      


// // Adding new properties 
// person.location = "New York"; 
// person["hobby"] = "Reading"; 


// // Modifying properties 
// person.age = 31; 


// // Deleting properties 
// delete person.isEmployed; 

// console.log(person);


const person = {
    name: "Tika",
    age: 30,

    details: function() {
        // console.log(this);
        
        console.log(`${this.name} is ${this.age} years old form ${this.city}`);
        
    }
}



person.age = 27;
person.city = "Kathmandu";
person.details();


// console.log(delete person.city);

// console.log(person.city);


























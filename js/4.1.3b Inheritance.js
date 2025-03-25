// parent class
function Person(name, age) {
    this.name = name
    this.age = age
}

Person.prototype.greet = function() {
    console.log(`Hello, my name is ${this.name}`);
}


// child class
function Employee(name, age, jobTitle) {

    Person.call(this, name, age)  // inherit person properties
    this.jobTitle = jobTitle
}

Employee.prototype = Object.create(Person.prototype)        // inherit person methods
Employee.prototype.constructor = Employee               // set constructor to employee


Employee.prototype.work = function() {
    console.log(`${this.name} is working as ${this.jobTitle}`);
}


const employee = new Employee("ram", 30, "developer")
employee.greet()
employee.work()


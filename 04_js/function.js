

// let sum = (a, b) => a + b;

// console.log(sum(1addition(2), 2));


// (function(){
//     console.log('IIFE');
// })()


// async function fetchdata(){
//     let videos = await fetch('https://jsonplaceholder.typicode.com/posts');
//     let data = await videos.json();
//     console.log(data);
// }


// function greet(name){
//     console.log(`Hello ${name}`);
// }

// function processName(name, greet){
//     greet(name);
// }

// processName('Tika', greet);


function addition(a){
    return function(b) {
        console.log(a + b);    
    }
}

innerfunction = addition(2)
innerfunction(3)



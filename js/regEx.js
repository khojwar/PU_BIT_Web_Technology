// const re = /hello/g;

// const string = "k xa ta, hello bhai, hello sane"



// // console.log(re.exec('k xa ta, hello bhai, hello sane').input);

// console.log(string.matchAll(re));



const re = /[a-z]+@[a-z]+\.[a-z]{2,6}/   
 
result = re.test('test@gmail.c') 

if (result) {
    console.log('This is a valid email');
} else {
    console.log('This is not a valid email');
}


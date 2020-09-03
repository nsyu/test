// 1. Use strict
// added in ES 5
// use this for valina Javascript
"use strict";


// 2. Variable
// let (added in ES6)
let globalName = 'global nsyu'
{
  let name = 'nsyu';
  console.log(name);
  name = 'hello';
  console.log(name);
  console.log(globalName);
}

// var (don't ever use this!)
// var hoisting (move declaration from bottom to top)
{
  age = 12;
  var age;
}
console.log(age);


// 3. Constant
// favor immutable data type always for a few reasons;
//  - security
//  - thread safety
//  - reduce human mistakes
const days = 1;
const month = 1;


// 4. Variable types
// primitive, sigle item: number, string, boolean, null, undefined, symbol
// object, box container
// function, first-class function
// int
const count = 17;
const size = 17.1;
console.log(`value: ${count}, type: ${typeof count}`);
console.log(`value: ${size}, type: ${typeof size}`);

const infinity = 1 / 0;
const negativeInfinity = -1 /0;
const nAn = 'not a Number' / 2;
console.log(infinity);
console.log(negativeInfinity);
console.log(nAn);

const bigInt = 12345678901234567890123456789012345678901234567890n; // over (-2**53 ~ 2**53)
console.log(`value: ${bigInt}, type: ${typeof bigInt}`);

// string
const char = 'c';
const brendan = 'brendan';
const greeting = 'hello ' + brendan;
console.log(`value: ${greeting}, type: ${typeof greeting}`);
const helloBob = `hi ${brendan}!`;// template literals (string)
console.log(`value: ${helloBob}, type: ${typeof helloBob}`);

// boolean
// false: 0, null, undefined, NaN, ''
// true: any other value
const canRead = true;
const test = 3 < 1; // false
console.log(`value: ${canRead}, type: ${typeof canRead}`);
console.log(`value: ${test}, type: ${typeof test}`);

// null
let nothing = null;
console.log(`value: ${nothing}, type: ${typeof nothing}`);

// undefined
let x;
console.log(`value: ${x}, type: ${typeof x}`);

// symbol, create unique identifiers for objects
const symbol1 = Symbol('id');
const symbol2 = Symbol('id');
console.log(symbol1 === symbol2); // false
const gSymbol1 = Symbol.for('id');
const gSymbol2 = Symbol.for('id');
console.log(gSymbol1 === gSymbol2); // true
console.log(`value: ${symbol1.description}, type: ${typeof symbol1.description}`);


// 5. Dynamic typing : dynamically typed language
let text = 'hello';
console.log(text.charAt(0)); // h
console.log(`value: ${text}, type: ${typeof text}`);
text = 1;
console.log(`value: ${text}, type: ${typeof text}`);
text = '1' + 1;
console.log(`value: ${text}, type: ${typeof text}`);
text = '1' / `1`;
console.log(`value: ${text}, type: ${typeof text}`);
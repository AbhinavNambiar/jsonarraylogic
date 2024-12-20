let array = [5, 6, 2, 1, 3, 4, 7, 8, 9, 10];

let reversedArray = [];

for (let i = array.length - 1; i >= 0; i--) {
    reversedArray[reversedArray.length] = array[i];
}

let jsonResult = '{';
for (let i = 0; i < reversedArray.length; i++) {
    jsonResult += `"${i}":${reversedArray[i]}`;
    if (i < reversedArray.length - 1) {
        jsonResult += ',';
    }
}
jsonResult += '}';

console.log(jsonResult);

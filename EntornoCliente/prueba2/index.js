let array = [1,2,3,4,5,6];

function suma(a, b){
    return a+b;
}

let media = array.reduce( suma, 0 )/array.length;

function restaYCuadrado(x){
    return ((x-media))**2;
}

let cuadradoResta = array.map( restaYCuadrado );
let sumatorio = cuadradoResta.reduce( suma );
let result = Math.sqrt(sumatorio/array.length);
console.log(result);
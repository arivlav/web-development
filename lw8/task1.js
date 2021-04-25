function isPrimeNumber(data) {   
  if (typeof(data) == 'object' && Array.isArray(data)) {
    for (let i = 0; i < data.length; i++) {
      primeNumber(data[i]);  
    }
  }
  else {
    primeNumber(data);
  }
}

function primeNumber(num) {
    if (typeof(num) == 'number' && num >= 2) {
      let stop = false;
      let max = Math.floor(Math.sqrt(num));
      for (let j = 2; j <= max; j++) {  
        if (num % j == 0) {
          stop = true;
          break;
        } 
      }
      if (stop) {
        console.log(num + ' is not prime!'); 
      } else {
        console.log(num + ' is prime!');
      }   
    } else {
        console.log(num + ' is not integer number!');
    }  
  }


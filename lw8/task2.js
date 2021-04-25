function calc(str) {
  let i, result, operations = [], numbers = [], reading = true;
  for (i=0; i < str.length; i++) {
    if (str[i] == '*' || str[i] == '/' || str[i] == '+' || str[i] == '-') operations.push(str[i]);
    if (parseInt(str[i]) >= 0 && parseInt(str[i]) <= 9) numbers.push(parseInt(str[i]));  
    // if (str[i] == '(') {
    //     let str1 = str.substr(i+1);
    //     let num = calc(str1);
    //     console.log(num);
    //     numbers.push(num);
    // }    
    // if (str[i] == ')') { 
    //     str = str.substr(i+1);
    // }    
  }
  if (numbers.length - operations.length  === 1) {
    result=numbers[0];
    for (i=1; i<numbers.length; i++)
        switch(operations[i-1]) {
            case '*':
            result = result * numbers[i];
            break;
            case '/':
            result = result / numbers[i];
            break;
            case '+':
            result = result + numbers[i];
            break;
            case '-':
            result = result - numbers[i];
            break;          
        }
    }       
  return result;
}
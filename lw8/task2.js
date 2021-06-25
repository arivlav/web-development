function calc(str) {
  let regexp = /[0-9().*+/-\s]{3,}/g;
  let answer = {};
  let msg;
  answer = (str.match(regexp)[0] == str) ? parseStr(str) : {error: 'Error!'};
  msg = (answer.error == '') ? answer.result : answer.error;
  console.log('Answer: ' + msg);
}

function parseStr(str, start = 0) {
  let i, operations = [], numbers = [];
  let answer = {
        result: 0,
        end: str.length, 
        error: ''
      };
      
  let isSetOperations = true;    
  for (i = start; i < str.length; i++) {
    if (isSetOperations && isOperation(str[i], str[i+1])) {
      operations.push(str[i]);
    }
    if ((!isSetOperations && isOperation(str[i], str[i+1])) || str[i] == '.') {
      answer.error = 'Error!';
    }
    if (isBeginNumber(str[i], str[i+1])) {
      let num = getNumber(str, i);
      if (!isNaN(num.val)) {
        numbers.push(num.val);
        i = num.index;
      } else {
        answer.error = 'Error!';
      }  
      isSetOperations = false;
    }
    if (str[i] == '(') {
      answer = parseStr(str, i+1);
      numbers.push(answer.result);
      i = answer.end;
      if (str[i-1] != ')') answer.error = 'Error!';      
    }
    if (str[i] == ')') {
      answer.end = i+1;
      if (start == 0) answer.error = 'Error!';
      break;
    } 
  }
  // console.log(numbers);
  // console.log(operations);
  
  if (answer.error == '' && numbers.length - operations.length  === 1) {
    answer.result=numbers[0];
    for (i=1; i<numbers.length; i++)
      if (answer.error == '') {    
        switch(operations[i-1]) {
          case '*':
            answer.result *= numbers[i];
            break;
          case '/':
            if (numbers[i] != 0) answer.result /= numbers[i];
            else answer.error = 'Error!';
            break;
          case '+':
            answer.result += numbers[i];
            break;
          case '-':
            answer.result -= numbers[i];
            break;          
        }
      } else {
        break;
      }  
  } else {
    answer.error = 'Error!';
  }
  return answer;
}

function isOperation(curr, next) {
  let isSubtraction = (curr == '-' && !(next >= '0' && next <= '9'));
  return (curr == '*' || curr == '/' || curr == '+' || isSubtraction);
}

function isBeginNumber(curr, next) {
  return ((curr == '-' && next >= '0' && next <= '9') || (curr >= '0' && curr <= '9'))
}  

function getNumber(str, start) {
  let i = start, strNumber = '';    
  do 
  {
    strNumber += str[i];
    i++; 
  }
  while((str[i] >= '0' && str[i] <= '9') || str[i] == '.')

  let num = {
    val: Number(strNumber),
    index: i
  };
  return num;
}
PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES 
  Dos;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  StartParameterVal, EndParameterVal, LengthParameterVal, StartParameter: BYTE;
  QueryString, NameVal, Parameter, s: STRING;
BEGIN
  QueryString := GetEnv('QUERY_STRING');
  GetQueryStringParameter := 'Not found';
  Parameter := Key + '=';
  StartParameter := POS(Parameter, QueryString);
  IF StartParameter > 0
  THEN
    BEGIN
      IF StartParameter > 1
      THEN
        Parameter := '&' + Parameter;
      StartParameter := POS(Parameter, QueryString);
      LengthParameterVal := LENGTH(QueryString) - StartParameter + 1;
      QueryString := COPY(QueryString, StartParameter + LENGTH(Parameter), LengthParameterVal + 1);
      StartParameter := 1  
    END;    
  IF StartParameter = 1
  THEN
    BEGIN
      StartParameterVal := 1;
      EndParameterVal := POS('&', QueryString);
      IF EndParameterVal = 0
      THEN
        EndParameterVal := LENGTH(QueryString)+1;
      LengthParameterVal := EndParameterVal - StartParameterVal;    
      IF LengthParameterVal > 0
      THEN
        GetQueryStringParameter := COPY(QueryString, StartParameterVal, LengthParameterVal) 
    END     
END;  
  
BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}

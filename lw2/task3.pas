PROGRAM HelloAnybody(INPUT, OUTPUT);
USES 
  Dos;
VAR
  StartNameVal, EndNameVal, LengthNameVal, StartName: BYTE;
  QueryString, NameVal: STRING;
BEGIN {HelloAnybody}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  NameVal := '';
  StartName := POS('name=', QueryString);
  IF StartName <> 1
  THEN
    WRITELN('Hello Anonymous')
  ELSE
    BEGIN
      StartNameVal := StartName + 5;
      EndNameVal := POS('&', QueryString);
      IF EndNameVal = 0
      THEN
        EndNameVal := LENGTH(QueryString) + 1;
      LengthNameVal := EndNameVal - StartNameVal;     
      NameVal := COPY(QueryString, StartNameVal, LengthNameVal);
      IF NameVal <> ''
      THEN
        WRITELN('Hello, dear ', NameVal, '!')
      ELSE
        WRITELN('Hello Anonymous')  
    END           
END. {HelloAnybody}

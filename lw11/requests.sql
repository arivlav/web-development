SELECT
    last_name,
    first_name,
    birthdate,
    (YEAR(CURRENT_DATE())-YEAR(birthdate))-(RIGHT(CURRENT_DATE(),5)<RIGHT(birthdate,5)) AS age
FROM
    student
WHERE
    (YEAR(CURRENT_DATE())-YEAR(birthdate))-(RIGHT(CURRENT_DATE(),5)<RIGHT(birthdate,5)) = 19;
	
SELECT 
    * 
FROM
    student
INNER JOIN
    party
ON
    student.party_id = party.id
WHERE
    party.short_name = 'НД-11';

SELECT 
    student.*,
    party.short_name
FROM 
    student
INNER JOIN  
    party
ON
     party.id=student.party_id
WHERE 
    party.short_name = 'ЭП-11';

SELECT 
    student.*,
    party.short_name,
    faculty.short_name
FROM 
    student
INNER JOIN  
    party
ON
     party.id=student.party_id
INNER JOIN  
    faculty
ON
    party.faculty_id=party.id     
WHERE 
    faculty.short_name = 'ИММ'; 	
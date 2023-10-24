SELECT 4 * ATAN2(SQRT(POWER(SIN(((PI()* -20.15937/180 - (PI() * -19.585)/180)/2)), 2) + COS((PI() * -39.784)/180) * COS((PI()* -20.15937/180)) * POWER(SIN(((PI()*-40.25339)/180 - (PI()*-40.25339)/180)/2), 2)), 1 - SQRT(POWER(SIN(((PI()* -20.15937)/180 - (PI() * -19.585)/180)/2), 2) + COS((PI() * -39.784)/180) * COS((PI()* -20.15937)/180) * POWER(SIN(((PI()*-40.25339)/180 - (PI()* -40.25339)/180)/2), 2))) * 6371 AS distancia
FROM ESTABELECIMENTO
ORDER BY distancia DESC;

SELECT  acos(sin(estabelecimento.latitude*PI()/180)*sin($user_latitude*PI()/180)+cos(estabelecimento.latitude*PI()/180)*cos($user_latitude*PI()/180)*cos($user_longitude*PI()/180-estabelecimento.longitude*PI()/180))*6371 as distancia
FROM ESTABELECIMENTO
ORDER BY distancia DESC;
		
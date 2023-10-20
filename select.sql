SELECT 4 * ATAN2(SQRT(POWER(SIN(((PI()* -20.15937/180 - (PI() * -19.585)/180)/2)), 2) + COS((PI() * -39.784)/180) * COS((PI()* -20.15937/180)) * POWER(SIN(((PI()*-40.25339)/180 - (PI()*-40.25339)/180)/2), 2)), 1 - SQRT(POWER(SIN(((PI()* -20.15937)/180 - (PI() * -19.585)/180)/2), 2) + COS((PI() * -39.784)/180) * COS((PI()* -20.15937)/180) * POWER(SIN(((PI()*-40.25339)/180 - (PI()* -40.25339)/180)/2), 2))) * 6371 AS distancia
FROM ESTABELECIMENTO
ORDER BY distancia DESC;

SELECT  6372.795477598 * acos(sin(-20.15937) * sin (-19.585*Pi()/180) + cos (-20.15937*PI()) * cos (-19.585*Pi()/180) * cos ( -40.25339 - -39.784))
FROM ESTABELECIMENTO
ORDER BY distancia DESC;

select	@dLat = (-20.15937 - -19.585)*PI()/180, 
		@dLong = (-40.25339 - -39.784)*PI()/180,
		@a = sin(dLat/2) * sin(dLat/2) + cos(deg2rad(lat1)) * cos(deg2rad(lat2)) * sin(dLon/2) * sin(dLon/2),
		@c = 2 * ATAN2(SQRT(a), SQRT(1-a)),
		c * 6372.795 as d;
		
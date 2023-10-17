SELECT nome,
		tipo_estabelecimento.tipo_estabelecimento, 
		selo.selo, 
		foto_banner,
		nota,
		2 * ATAN2(SQRT(POWER(SIN(((PI()*latitude)/180 - (PI()*user_latitude)/180)/2), 2) + COS((PI()*user_latitude)/180) * COS((PI()*latitude)/180) * POWER(SIN(((PI()*longitude)/180 - (PI()*longitude)/180)/2), 2)), 1 - SQRT(POWER(SIN(((PI()*latitude)/180 - (PI()*user_latitude)/180)/2), 2) + COS((PI()*user_latitude)/180) * COS((PI()*latitude)/180) * POWER(SIN(((PI()*longitude)/180 - (PI()*longitude)/180)/2), 2))) * 6371 as distancia
FROM estabelecimento
INNER JOIN tipo_estabelecimento
ON tipo_estabelecimento.tipo_estabelecimento_pk = estabelecimento.fk_tipo_estabelecimento_tipo_estabelecimento_pk
INNER JOIN selo
ON selo.selo_pk = estabelecimento.fk_selo_selo_pk
ORDER BY distancia DESC;

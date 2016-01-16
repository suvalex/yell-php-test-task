-- запрос, который получает самые "свежие" значения по каждой сущности
SELECT 
	d1.type, d1.value
FROM 
	data d1 
LEFT JOIN 
	data d2
ON 
	d1.type = d2.type 
AND 
	d1.date < d2.date
WHERE 
	d2.id IS NULL;
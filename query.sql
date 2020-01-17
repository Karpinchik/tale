SELECT 
    recipes.title AS 'Названия рецептов',
    Ingredients_table.title AS 'Ингридиенты'
FROM
    Ingredients_table
        JOIN
    recipes ON Ingredients_table.recipes = recipes.idrecipes
WHERE
    Ingredients_table.title = 'творог'
        OR Ingredients_table.title = 'мука'; 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> _general_ci Versus _unicode_ci Collations</h3>
    <p>
   
For any Unicode character set, operations performed using the xxx_general_ci collation are faster than those for the xxx_unicode_ci collation. For example, comparisons for the utf8mb4_general_ci collation are faster, but slightly less correct, than comparisons for utf8mb4_unicode_ci. The reason is that utf8mb4_unicode_ci supports mappings such as expansions; that is, when one character compares as equal to combinations of other characters. For example, ß is equal to ss in German and some other languages. utf8mb4_unicode_ci also supports contractions and ignorable characters. utf8mb4_general_ci is a legacy collation that does not support expansions, contractions, or ignorable characters. It can make only one-to-one comparisons between characters.
    </p>
    <h3>MariaDB: An Alternative to MySQL</h3>
    <p>
    
After MySQL was acquired by Sun Microsystems and later by Oracle (a competitor in 
the database market), some of the core developers felt that they had reduced influence 
on the direction and features provided by the product so they created a “fork” of the 
product.This was named MariaDB.
    </p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3.title{ text-transform: uppercase;}
    </style>
</head>
<body>
    <h3 class="title">data types</h3>
    <ul>
        <li>Date and Time Data Types
            <ul>
                <li>DATE</li>
                <li>DATETIME</li>
                <li>TIME</li>
                <li>TIMESTAMP</li>
                <li>YEAR</li>
            </ul>
        </li>
        <li>Numeric Data Types
            <ul>
                <li>BOOL,BOOLEAN</li>
                <li>BIGINT : MySQL's largest integer range</li>
                <li>INT</li>
                <li>MEDIUMINT</li>
                <li>SMALLINT</li>
                <li>TINYINT :smallest integer range </li>
                <li>DECIMAL:The DECIMAL data type is a floating-point number stored as a string</li>
                <li>DOUBLE</li>
                <li>FLOAT</li>
                <li>REAL</li>
            </ul>
        </li>
        <li>String Data Types
            <ul>
                <li>CHAR:MySQL's fixed-length string representation, supporting a maximum length of 255 characters.</li>
                <li>VARCHAR: MySQL's variable-length string representation, supporting a 
length of 0 to 65,535 characters as of version 5.0.3;</li>
                <li>LONGTEXT</li>
                <li>MEDIUMTEXT</li>
                <li>TEXT</li>
                <li>TINYTEXT</li>
                <li>ENUM</li>
                <li>SET</li>
            </ul>
        </li>
        <li>SPATIAL Data Types</li>
        <li>JSON Data Types</li>
    </ul>
    <h3 class="title">data type attributes</h3>
    <ul>
        <li>AUTO_INCREMENT</li>
        <li>BINARY</li>
        <li>DEFAULT</li>
        <li>INDEX</li>
        <li>NATIONAL</li>
        <li>NOT NULL</li>
        <li>NULL</li>
        <li>PRIMARY KEY</li>
        <li>UNIQUE</li>
        <li>ZEROFILL</li>
        <li>PRIMARY KEY</li>
    </ul>
    <h3 class="title">Create table using SQL</h3>
    <pre>
        <code>
create table IF NOT EXISTS products(
    id int(11) primary key auto_increment,
    username varchar(20) unique not null,
    password varchar(255) not null,
    created_at timestamp default current_timestamp
) engine=InnoDB;
        </code>
    </pre>
    <h3 class="title">Create database using SQL</h3>
    <pre>
        <code>
create database databasename;
        </code>
    </pre>

</body>
</html>
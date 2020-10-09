<?php
$link = mysqli_connect("localhost", "root", "","test");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    $sql = 'CREATE TABLE Authors(
                id int NOT NULL AUTO_INCREMENT,
                Name varchar(30),
                SerName varchar(30), 
                PRIMARY KEY (id));
            CREATE TABLE books(
                id int NOT NULL AUTO_INCREMENT,
                ISBN varchar(30),
                Author varchar(30),
                Name varchar(30),
                Count_pages int,
                Genre varchar(30),
                Date_public date,
                PRIMARY KEY (id),
                FOREIGN KEY (Author) REFERENCES Authors(SerName));';
    $result = mysqli_query($link, $sql)  or die("Ошибка " . mysqli_error($link));
}
mysqli_close($link);
<?php
$link = mysqli_connect("localhost", "root", "","test");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    $sql = 'SELECT Name, Author FROM books WHERE Genre = "Фантастика"';
    $result = mysqli_query($link, $sql)  or die("Ошибка " . mysqli_error($link));
}
mysqli_close($link);
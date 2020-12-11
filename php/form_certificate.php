<?php
include '../html/student/reference.php';
#error_reporting(0); #выключаем предупреждения


#Для подключения к базе данных##########
$servername = "localhost";
$database = "technicum_base";
$username = "root";
$password = "";
$db_table = "certificate_student";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Нет соединения в базой данных: ") . mysqli_connect_error();
}
echo "Успешное соединение с базой данных<br>";



$name=$_POST['name'];
$surname=$_POST['surname'];
$patronymic=$_POST['patronymic'];
$group_c=$_POST['group'];
$quantity=$_POST['count'];




/*Создание новой записи в базе данных*/
if($name !=0 or $surname !=0){
$sql="INSERT INTO certificate_student VALUES ('' ,'$name', '$surname', '$patronymic', '$group_c', '$quantity')";

    if (mysqli_query($conn, $sql)){
        echo"Новая запись создана";
    }else{
        echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
    }
    }






mysqli_close($conn);

?>

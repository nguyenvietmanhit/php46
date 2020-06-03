<?php
    const DB_HOST="localhost";
    const DB_USERNAME ="root";
    const DB_PASSWORD ="";
    const DB_NAME="bt1";
    const DB_PORT="3306";
    $connection= mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD, DB_NAME,DB_PORT);
    if(!$connection)
    {
        die("Kết nối thất bại, Error :" .mysqli_connect_error());
    }
    echo "<h4>Kết nối thành công !!!</h4>";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Bài tập 1</title>
</head>
</html>
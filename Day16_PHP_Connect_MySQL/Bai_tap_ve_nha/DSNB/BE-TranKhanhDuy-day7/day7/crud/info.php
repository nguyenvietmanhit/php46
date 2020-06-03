<?php
require_once 'database.php';
$id = -1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sql_select_one = "SELECT * FROM employees WHERE id = $id";
    $result_one = mysqli_query($connection,$sql_select_one);
    $employes = mysqli_fetch_assoc($result_one);

?>
<!DOCTYPE>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/ad59a2fbb0.js"></script>
    <style>
        .btn-primary{
           margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>View Record</h3>
        <table style="width: 100%">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Salary</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Created_at</th>

            </tr>
            <tr>
                <td><?php echo $employes['id']; ?></td>
                <td><?php echo $employes['name']; ?></td>
                <td><?php echo $employes['description']; ?></td>
                <td><?php echo $employes['salary']; ?></td>
                <td><?php
                    $array = array(
                        0 => "Male",
                        1 => "Female"
                    );
                    echo $array[$employes['gender']];
                    ?></td>
                <td><?php echo $employes['birthday']; ?></td>
                <td><?php echo $employes['created_at']; ?></td>

            </tr>
        </table>
        <a href="list.php"><button type="button" class="btn btn-primary">Back</button></a>
    </div>
</body>
</html>


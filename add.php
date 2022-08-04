<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include_once("connect2.php");
        $array_penerbit=mysqli_query($con, "SELECT * FROM user");
    
        
        
    ?>

    <div class="container">
    <div class="row" style="marginL 50px;">
    <div class="col-md-12 text-center">
    <h4>Tambah User</h4>
    </div>
    </div>

    <div class="row">
    <div class="col-md-12">
    <form action="add.php" method="post" name="form1">
        <table width="100%" class="table-bordered" cellpadding="10" border="0">
            <tr>
                <td>Id</td>
                <td><input type="text" class="form-control" name="id"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type=strtoupper"text" class="form-control" name="name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" class="form-control" name="age"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" class="form-control" name="city"></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" class="form-control btn btn-primary" name="Submit" value="Add"></td>
            </tr>
    </div>
</body>
</html>
<?php
    if(isset($_POST['Submit'])){
        $id = $_POST['id'];
       
        $name = $_POST['name'];
        echo strtoupper($name);
        $age = $_POST['age'];
        echo strtoupper($age);
        $city = $_POST['city'];
        echo strtoupper($city);
       

        $insert=mysqli_query($con,"INSERT INTO `user`(`id`,`name`,`age`,`city`) VALUES('$id','$name','$age','$city')");
        header("Location:index.php");
    }
?>
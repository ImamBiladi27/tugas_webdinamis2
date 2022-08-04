<!DOCTYPE html>
<html>
<head>
    <title>Form User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include_once("connect2.php");
        $array_user=mysqli_query($con, "SELECT * FROM user");
    
        $id= $_GET['id'];
        $buku=mysqli_query($con, "SELECT * FROM user WHERE id='$id'");
        
        
    ?>

    <div class="container">
    <div class="row" style="marginL 50px;">
    <div class="col-md-12 text-center">
    <h4>Edit Buku</h4>
    </div>
    </div>

    <div class="row">
    <div class="col-md-12">
    <form action="edit.php?isbn=<?php echo $id; ?> " method="post" name="form1">
        <table width="100%" class="table-bordered" cellpadding="10" border="0">
            <tr>
                <td>ID</td>
                <td><input type="text" readonly=""class="form-control" name="id" value="<?php echo $id; ?>"></td>
            </tr>
            <tr>
                <td>name</td>
                <td><input type="text" class="form-control" name="name" value="<?php echo $name; ?>"</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="text" class="form-control" name="age" value="<?php echo $age; ?>"</td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" class="form-control btn btn-primary" name="Submit" value="ADD"></td>
            </tr>
    </div>
</body>
</html>
<?php
    if(isset($_POST['Submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];
      

        $result=mysqli_query($con, "UPDATE user SET id = '$id', name ='$name',age ='$age',city ='$city', WHERE id= '$id';");       
     header("Location: index.php");
       // header("Location:index.php");
    }
?>
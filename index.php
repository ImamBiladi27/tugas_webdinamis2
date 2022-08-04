<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<body>
<?Php 
include_once("connect2.php");
$books = mysqli_query($con, "SELECT id,name,age,city FROM user");
?>
    

    <div class="row">
    <div class="col-md-12">
    <a href="add.php" class="btn btn-primary">Add New User</a>
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
    <table class="table" border="2">
        <thead>
        <tr>
        <td class="text-center">Id</td>
        <td class="text-center">Nama</td>
        <td class="text-center">Age</td>
        <td class="text-center">City</td>
     
        
        </tr>
        </thead>
        <tbody>
        <?php
            while($book = mysqli_fetch_array($books)){
                echo"
                <tr>
                <td>".$book['id']."</td>
                <td>".strtoupper($book['name'])."</td>
                <td>".strtoupper($book['age'])."</td>
                <td>".strtoupper($book['city'])."</td>
               
               <td class='text-center'>
               <a href='edit.php?isbn=".$book['id']."' class='btn btn-warning'>Edit</a>
               <a href='#' class='btn btn-danger' onclick='confirmation(`".$book['id']."`)'>Delete</a>
               
               </td>
            </tr> 
            ";
            }
        ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
</body>
</head>
</html>
<script type="text/javascript">
    function confirmation(id){
        if(confirm('Apakah anda yakin akan menghapus data user ini ?')){
            window.location.href='delete.php?id='+id;
        }
    }
</script>
<?php 
include('nav.php');
include('connection.php')


?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php 
if(isset($_SESSION['message'])):
?>
<div class="alert alert-<?= $_SESSION['msg_type']?>">
<?php 
echo $_SESSION['message'];
unset($_SESSION['message']);

?>
</div>
<?php endif ?>




<?php 
$mysqli= new mysqli($localhost,$user,$password,$db)or die(mysqli_error($mysqli));
$result=$mysqli->query("SELECT * FROM employee ")or(die($mysqli->error));
 //pre_r($result);
//pre_r($result->fetch_assoc());
function pre_r($array) {
     echo'<pre>';
     print_r($array);
     echo'</pre>';
 }              


?>


        <div class="container">
            <div class="row">
                
                <br><br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 style="text-align:center; font-family:sans-serif;color:#434343;">Liste des employées:</h1><br>
                    <table class="table table-striped">
                        <thead  class="thead-light">
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Name </th>
                           <th scope="col">Date de naissance</th>
                           <th scope="col">Salaire</th>
                           <th scope="col" class="text-center">Actions</th>
                  </tr>
                        </thead>
                        <?php 
                        while($row=($result->fetch_assoc())){?>
                        <tbody>
                            <tr>
                                <td><?php  echo $row['id'];?></td>
                                <td><?php  echo $row['nom'];?></td>
                                <td><?php  echo $row['date_naissance'];?></td>
                                <td><?php  echo $row['salaire'];?></td>
                                <td>
                                    <a href="update.php?edit=<?php echo $row['id']?>" class='btn btn-success' name="edit">Modifier</a>
                                    <a href="connection.php?delete=<?php echo $row['id']?>" class='btn btn-danger' name="delete">Supprimer</a>
                                </td>
                                
                            </tr>
                  
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

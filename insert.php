
<!doctype html>
<html lang="en">
  <head>
    <title>Insert.php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php include('nav.php'); ?>
    <?php include('connection.php'); ?>
    <?php 
$mysqli= new mysqli($localhost,$user,$password,$db)or die(mysqli_error($mysqli));



?>
    
 <div class="container">
     <div class="row ">
         <div class="col-md-6 offset-md-3">
             <h1 style="color:#564343;font-family:sans-serif; text-align:center;">Ajouter Employée:</h1><br><br>
             
             <form action="connection.php" method="POST">
            <div class="form-group">
              <label for="">Nom:</label>
              <input type="text" name="nom" id="" class="form-control" placeholder="Saisir votre nom" aria-describedby="helpId">
              <label for="">date de naissance:</label>
              <input type="text" name="date_naissance" id="" class="form-control" placeholder="Saisir votre date de naissance" aria-describedby="helpId">
              <label for="">Salaire:</label>
              <input type="text" name="salaire" id="" class="form-control" placeholder="Saisir votre salaire" aria-describedby="helpId">
              <br><input type="submit" name='submit' value="Ajouter" class="btn btn-block btn-info">
            </div>
             </form>
         </div>
     </div>
 </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
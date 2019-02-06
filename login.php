<?php session_start(); ?>

<?php
   function ketikaGalat ($tulisanScript) {
      $_SESSION['active'] = false;
      echo "<script>alert('".$tulisanScript."');</script>";
   }

   $failure = isset($_GET['failure']) == true ? $_GET['failure'] : "NO_ERROR";
   if ($failure == "NO_DATA_MATCH") {
      ketikaGalat("Sepertinya anda memasukkan data yang salah.");
   }
   elseif ($failure == "NO_DATA_COMPLETE") {
      ketikaGalat("Anda sepertinya tidak memasukkan data secara lengkap.");
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Login</title>
   <!-- JS -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script>
      $(() => {
         var list_form = ["#imageForm", "#warningForm", "#username", "#password", "#levelUser", "#submitButton"], i = 500;
         list_form.forEach(x => { $(x).animate({ opacity: 1 }, i); i += 100; });
      });
   </script>
   <!-- CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css_component/login/login.css">
</head>

<body style="background-color: #a1a1a1">
   <div class="container">
      <form action="engine/login.php" method="POST" class="form-group" id="kotakLogin">
         <img id="imageForm" src="img/b&w.png" alt="logo_image">
         <p id="warningForm">Anda harus login untuk melanjutkan.</p>

         <input type="text" name="username" id="username" class="form-control" placeholder="NIK/NIS">
         <input type="password" name="password" id="password" class="form-control" placeholder="Password">
         <select name="user-level" id="levelUser" class="form-control">
            <option value="" selected disabled>Level Pengguna</option>
            <option value="0">Siswa</option>
            <option value="1">Guru</option>
            <option value="2">Administrator</option>
         </select>
         <input type="submit" value="Log In" id="submitButton" class="btn btn-dark">
      </form>
   </div>
</body>

</html>
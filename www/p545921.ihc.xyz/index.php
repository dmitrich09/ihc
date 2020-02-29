
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body >
  <div class="container">
      
      <form  class="ajax">
        <p>yourrr  name</p>
        <input type="text"  id="name">
        <p>your name</p>
        <input type="text"  id="surname">
        <p>your name</p>
        <input type="text"  id="email">
      </form>

     
      <a href="http://p545921.ihc.xyz/mapyandex.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ссылка на карту</a>
    <?php
         $xz = "xz";  
        function ajax(){

          if($_POST['name'] != null){
            $name = $_POST['name'];
              echo 'from php - ' . $name;
          }
        }
      
      
    ?>
     
     <p>count rabbits</p>
        <input type="button"  id="countRabbits" value="Считать кроликов!">

      </div>
  
 
  <script src='1.js'></script>
  <script src='2.js'></script>
</body>
</html>

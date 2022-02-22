<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">

    <title>Login</title>
  </head>
  <body>
 
 <div class="container-fluid bg-light">
        <x-header />
        <div class="container">
            
            <a href="http://localhost:8001/makepayment"><button>Make Payment</button></a>
        
            <h3>Teachers</h3>
            <x-blocks :dataitem="$teachers" />

            <h3>Students</h3>
            <x-blocks :dataitem="$students" />

            <h3>Classrooms</h3>
            <x-blockclassroom :dataitem="$classrooms" />

            <h3>Pay Teachers</p>

        
 <form action="teacherpay" method="post" enctype="multipart/form-data">

              @csrf

              <input type="text" name="adminid" placeholder="adminid" value="<?php echo session("user")["id"]; ?>"/> <br>
              

              <select name="teacherid" id="teacherid">

              <?php 

                foreach($teachers as $t){
               
                  ?>

                        <option value="<?php  echo $t["id"] ?>"><?php echo $t["id"] . "  " . $t["user"] ; ?></option>

                  <?php

                }

                ?>

               
              </select>

                <br>
              <input type="file" name="file" /> <br>
              <input type="submit" value="submit"/>

            </form>



        </div>


                <h1>Paid Student Fees </h1>
                <?php 

                  foreach($paid as $item){
                      foreach($item as $i){


                        echo '<div class="card" style="border: 2px solid black; margin: 1rem; width: auto;">';

                        echo $i["user"].'<br>';
                        echo $i["email"].'<br>';
                        echo $i["phone"].'<br>';
                      
                        echo '</div>';

                      }
                  }

                ?>


                <h1>Unpaid Student Fees </h1>
      

                <?php 

foreach($unpaid as $item){
  foreach($item as $i){
    echo '<div class="card" style="border: 2px solid black; margin: 1rem; width: auto;">';

    echo $i["user"].'<br>';
    echo $i["email"].'<br>';
    echo $i["phone"].'<br>';
  
    echo '</div>';
  }
}


?>


        <x-footer />
 </div>   
 
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/0000000000.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
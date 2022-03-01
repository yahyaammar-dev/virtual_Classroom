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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Teachers</title>
  </head>
  <body>
 
 <div class="container-fluid bg-light">


         <x-header />

        <div class="container mt-5">


        <h3>Submit Fees</h3>        
        <a href="http://localhost:8001/makepayment"><button class="btn btn-primary">Make Payment</button></a>


        <h3>Join a classroom</h3>
        <form method="post" action="joinclass">
            @csrf
            <input type="text" name="classname" placeholder="classname"/><br /><br />
            <input type="text" name="classname" placeholder="teachername"/><br /><br />
            <input type="submit" class="btn btn-primary" value="submit"/>
        </form>



        <h3>Classes</h3>

            <form method="POST" action="classstream" class="idform" style="display:none">
              @csrf
              <input type="text"  name="id" class="inputid" />
              <input type="submit" />
          </form>



<div class="container">
  <div class="row">

  
    
  <?php foreach($allclasses as $item) {    
    
    
      foreach($item as $single){
       ?>
       
       
<div class="col">

<div class="card card-margin myclass">
    <div class="card-header no-border">
        <h5 class="card-title">{{$single["user"]}} -</h5>
        <h5 class="card-title itemid">{{$single["id"]}}</h5>
    </div>
</div>

      </div>


   
    <script>

     
 

    $(document).ready(function(){
          let id = {{ $single[0]["id"]}}
          
          $(".myclass").click(function(){
                let myid =($(this).find(".itemid").text())

                $(".inputid").val(myid)
                $(".idform").submit();

            });
          })
    </script>

       
       
       
       <?php
      }
    
     } ?> 
  </div>
</div>








        </div>
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
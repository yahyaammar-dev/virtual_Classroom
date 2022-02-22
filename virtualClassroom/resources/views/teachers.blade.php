<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <title>Teachers</title>
    
  </head>
  <body>
 
  <form method="POST" action="classstream" class="idform" style="display:none;">
    @csrf
    <input type="text"  name="id" class="inputid" />
    <input type="submit" />
</form>


 <div class="container-fluid bg-light">
        <x-header />

        <div class="container">
        
            <x-createclass />
            <h3>Classes</h3>
            

            <div class="row">

            <?php

              foreach($classes as $item){
                  foreach($item as $i){
             
                      ?>


                  <div class="card myclass" style="width: 18rem; margin: 1rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$i["user"]}}</h5>
                      <p class="itemid">{{$i["id"]}}</p>
                    </div>

                    @if( $i->type == 'classroom' )
    <script>
    $(document).ready(function(){
          let id = {{$i->id}}
          $(".myclass").click(function(){
                let myid =($(this).find(".itemid").text())
                $(".inputid").val(myid)
                $(".idform").submit();
            });
          })
    </script>
@endif

                    


                  </div>

<?php 
                  
                  


                  }
              }

            ?>



            </div>




            <h3>Students</h3>
            <x-blockstudents :dataitem="$students" />
      
      
      
              <h1>Teachers Pay</h1>
              <?php 

              foreach($teacherpay as $t){
                ?> 
                <img src="<?php echo $t["fileurl"]; ?>">
                

                <?php
              }

              ?>
      
          </div>
        <x-footer />
 </div>   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/0000000000.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
  </body>
</html>
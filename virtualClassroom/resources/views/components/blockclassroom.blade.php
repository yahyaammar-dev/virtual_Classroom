

<div class="container">
  <div class="row">

  
    
  <?php foreach($dataitem as $single) {
    
    
    if($single==NULL){
      continue;
    }

    
    ?> 
  
    











<div class="card card-margin myclass mx-5 ">
    <div class="card-header no-border">
        <h5 class="card-title"> 
          <?php foreach($single as $item){
              echo $item["user"];
            }?>  
            </h5>
    </div>
</div>























    
  <?php } ?> 
  </div>
</div>
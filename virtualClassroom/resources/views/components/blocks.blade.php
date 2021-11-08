


<div class="container">
  <div class="row">
    
  <?php foreach($dataitem as $single) { ?> 
    
      <div class="col-sm">
          <x-block :item="$single"/>
      </div>
  <?php } ?>
 
 
  </div>
</div>
<div class="row">

<?php


    foreach($lects as $l){
?>

  <div class="col mb-4">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text"><?php print_r($l[0]->content); ?></p>
      <a href="<?php  echo $l[0]->url ?>"> <button class="btn btn-primary">Download the lecture</button></a>
    </div>
  </div>
      </div>

  <?php 
      }
  ?>


  </div>
<?php


    foreach($lects as $l){
        ?>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"><?php print_r($l[0]->content); ?></p>
  </div>
</div>



<?php 
    }


?>
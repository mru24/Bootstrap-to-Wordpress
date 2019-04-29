<!-- OPT IN SECTION -->

<?php

$subscribe_text = get_field('subscribe_text');
$subscribe_btn = get_field('subscribe_btn');

?>

<section id="opt-in">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <p class="lead text-center"><?php echo $subscribe_text; ?></p>
      </div>
      <div class="col-sm-4">
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#subscribeModal"><?php echo $subscribe_btn; ?></button>
      </div>
    </div>
  </div>
</section>

<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo site_url()?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo site_url('/politics')?>">Politics</a>
      <a class="nav-item nav-link" href="<?php echo site_url('/entertainment')?>">Entertainment</a>
      <a class="nav-item nav-link" href="<?php echo site_url('/sports')?>">Sports</a>
    </div>
  </div>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
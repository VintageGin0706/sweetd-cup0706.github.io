<?= $this->extend('/template/template'); ?>
    
<?= $this->section('content'); ?>
<div>
  <img src="/image/bahan.png" alt="bahan" class="bahan">
</div>

<div>
  <h1 class="news">
    Check Our Latest News 
  </h1>
</div>

<div class="content">
<div class="padding">
  <div class="card" style="width: 18rem;">
    <img src="/image/lemonade.jpg" class="card-img-top n-img" alt="...">
    <div class="card-body">
      <h5 class="card-title">New Menu!!!</h5>
      <p class="card-text">Feel the fresh and drink the lemonade</p>
      <a href="/myhome/menu" class="btn btn-primary btn-click">Go Check</a>
    </div>
  </div>
</div>

<div class="padding">
  <div class="card" style="width: 18rem;">
    <img src="/image/vava.jpg" class="card-img-top n-img" alt="...">
    <div class="card-body">
      <h5 class="card-title">Testimony</h5>
      <p class="card-text">Rasanya enak dan seger</p>
      <a href="/myhome/testimony" class="btn btn-primary btn-click">Go Check</a>
    </div>
  </div>
</div>

<div class="padding">
  <div class="card" style="width: 18rem;">
    <img src="/image/ex2.jpg" class="card-img-top n-img" alt="...">
    <div class="card-body">
      <h5 class="card-title">Our Exhibition</h5>
      <p class="card-text">Bazzar on Anugrah School</p>
      <a href="/myhome/location" class="btn btn-primary btn-click">Go Check</a>
    </div>
  </div>
</div>


  
<?= $this->endSection('content'); ?>
    

  
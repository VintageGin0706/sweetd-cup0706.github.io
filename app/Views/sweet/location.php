<?= $this->extend('/template/template'); ?>

<?= $this->section('content'); ?>
<div>
    <p class="location-tt">
        Find Us On
    </p>
</div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.553382988674!2d112.77872791428989!3d-7.291545494737267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa48d8531e99%3A0x88be2742d63894e1!2sUniversitas%20Katolik%20Darma%20Cendika!5e0!3m2!1sid!2sid!4v1670642428102!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>>
    </div>

    

    <div>
        <p class="ex">
            Our Exhibition
        </p>
    </div>

<div class="ex-p">
    <div>
        <img src="/image/ex1.jpg" alt="ex1" class="ex1">
    </div>

    <div>
        <img src="/image/ex2.jpg" alt="ex1" class="ex2">
    </div>

    <div>
        <img src="/image/ex3.jpg" alt="ex1" class="ex3">
    </div>
    <div>
        <img src="/image/ex4.jpg" alt="ex4" class="ex4">
    </div>
</div>


<?= $this->endsection('content'); ?>

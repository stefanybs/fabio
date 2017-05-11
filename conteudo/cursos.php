<script src="https://raw.githubusercontent.com/ganeshmax/jcarousellite/master/versions/jquery.jcarousellite-1.0.1.js"></script>
<script src="js/jquery.js"></script>
<script>
  $(function(){
    $(".carosel").jCarouselLite({
      btnNext: ".next",
      btnPrev: ".prev",
      auto: 3000
    })
  })
</script>


<div class="carosel">
<ul>
<li><img src="dist/img/curso1.png" width="180" height="180" class="img-responsive img-circle pull-left" alt="Responsive image"></li>
<li><img src="dist/img/avatar.png" width="180" height="180" class="img-responsive img-circle pull-left" alt="Responsive image"></li>
</ul>

<button class="prev">Anterior</button>
<button class="next">Proximo</button>
</div>
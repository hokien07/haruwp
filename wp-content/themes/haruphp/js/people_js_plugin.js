<script>
  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item'
  });

  $('#posts-all').on('click', function(){
    $('.link-btn').removeClass('selected');
    $(this).addClass('selected');
    $grid.isotope({ filter: '*' });
  });

  $('#posts-youth').on('click', function(){
  $('.link-btn').removeClass('selected');
    $(this).addClass('selected');
    $grid.isotope({ filter: '.Youth' });
  });

  $('#posts-arts').on('click', function(){
    $('.link-btn').removeClass('selected');
    $(this).addClass('selected');
    $grid.isotope({ filter: '.Arts' });
  });

  $('#posts-society').on('click', function(){
    $('.link-btn').removeClass('selected');
    $(this).addClass('selected');
    $grid.isotope({ filter: '.Society' });
  });

  $('#posts-staff').on('click', function(){
    $('.link-btn').removeClass('selected');
    $(this).addClass('selected');
    $grid.isotope({ filter: '.Staff' });
  });
</script>
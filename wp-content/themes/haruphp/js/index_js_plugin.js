
<!--Index script plugin slide-->
<script>
$(document).ready(function($){
  var indexRow = $('.row'),
    offset = 0.8;

  //hide blocks which are outside the viewport
  hideBlocks(indexRow, offset);

  //on scolling, show/animate blocks when enter the viewport
  $(window).on('scroll', function(){
    (!window.requestAnimationFrame) 
      ? setTimeout(function(){ showBlocks(indexRow, offset); }, 100)
      : window.requestAnimationFrame(function(){ showBlocks(indexRow, offset); });
  });

  function hideBlocks(blocks, offset) {
    blocks.each(function(){
      ( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.animate-left, .animate-right').addClass('is-hidden');
    });
  }

  function showBlocks(blocks, offset) {
    blocks.each(function(){
      ( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.animate-left, .animate-right').hasClass('is-hidden') ) && $(this).find('.animate-left').removeClass('is-hidden').addClass('slide-left') && $(this).find('.animate-right').removeClass('is-hidden').addClass('slide-right');
    });
  }
});


$('a', '#index-portfolio-brands').each(function(){
  $(this).hover(function(){
    $('.brand-hover-wrapper', this).fadeIn(100);
  }, function(){
    $('.brand-hover-wrapper', this).fadeOut(100);
  });
});

$('.brand-hover-wrapper').each(function(){
  var red = $(this).data('red');
  var blu = $(this).data('blu');
  var grn = $(this).data('grn');

  var bgclr = + red + ', ' + blu + ', ' + grn + ', ' + ' 0.8';

  $('.brand-hover', this).css('background', 'rgba(' + bgclr + ')');
});
</script>
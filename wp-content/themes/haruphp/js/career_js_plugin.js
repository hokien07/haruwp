<script>
$(document).ready(function(){
  var n = $( ".career-staff-slide" ).length;
  var m = Math.floor(Math.random() * n);

  $('#career-staff').slick({
    infinite: true,
    dots: true,
    arrows: true,
    autoplay: false,
    initialSlide: m
  });

  $('.slide-title').each(function(){
    $(this).click(function(){
      $(this).closest('.career-grow-slide').toggleClass('slide-open').children('.slide-content').slideToggle();
    });
  });

  $('#btn-explore').click(function () {
    $('body,html').animate({scrollTop: $('#career-explore').offset().top}, 400);
  });
});
</script>
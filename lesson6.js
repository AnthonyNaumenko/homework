$(document).ready(function(){
   $('.btn-slide').click(function () {
      $('#panel').slideToggle('slow');
      $('.btn-slide').toggleClass('active');
   });


   $('.delete').click(function () {
      $(this).parent()
          .animate({opacity:'hide'},'slow');
   });
$('.js-ajax').click(function(event){
   event.preventDefault();
  // alert('Ccskrf yf;fnf');
   $('#content').load($(this).attr('href'));
    /*$.get($(this).attr('href'), function(data){
   $('#content').html(data);
   });*/
});
});
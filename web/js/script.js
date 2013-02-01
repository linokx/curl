$(function(){  

       $('#form').on('submit',function(event){
          $('#loader').show();
       });
      
          $(".delete").on('click',function(event){
              event.preventDefault();
              var href=$(this).attr('href');
              var $this = $(this);
              $(this).parent().parent().parent().slideUp();
             $.ajax({
                url: href,
                success:function(){
                  $hauteur = $this.parent().prev().height();
                  $this.parent().prev().css('height',$hauteur).text("Lien supprimé").parent().delay(1500).slideUp(1000);
                }
              });
          });
      $image = $('input[name="fImage"]');
      $(".apercu li").on('click',function(event){
      $(this).parent().children().removeClass('choix');
      $(this).addClass('choix');
      $valeur = $(this).children().attr('src');
      $image.attr('value',$valeur);
      });
});
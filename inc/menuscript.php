<script>
    $(document).ready(function(){
      $(".sub-menu").hide();
      $(".sub-menu1").hide();
      $(".sub-menu2").hide();
      $(".sub-menu3").hide();
      $(".sub-menu4").hide();
      $(".sub-menu5").hide();
      $(".sub-menu6").hide();
      $(".sub-menu7").hide();
      $(".hoverli").hover(function(){
        var id = $(this).data("id");
        if(id == 0){
          $(".sub-menu").stop(true,true).slideDown("slow");
        }
      },function(){
        var id = $(this).data("id");
        if(id == 0){
          $(".sub-menu").stop(true,true).slideUp("slow");
        }
      });
      $(".hoverli").hover(function(){
        var id = $(this).data("id");
        if(id == 1){
          $(".sub-menu1").stop(true,true).slideDown("slow");
        }
      },function(){
        var id = $(this).data("id");
        if(id == 1){
          $(".sub-menu1").stop(true,true).slideUp("slow");
        }
      });
      $(".hoverli").hover(function(){
        var id = $(this).data("id");
        if(id == 2){
          $(".sub-menu2").stop(true,true).slideDown("slow");
        }
      },function(){
        var id = $(this).data("id");
        if(id == 2){
          $(".sub-menu2").stop(true,true).slideUp("slow");
        }
      });
      $(".hoverli").hover(function(){
        var id = $(this).data("id");
        if(id == 3){
          $(".sub-menu3").stop(true,true).slideDown("slow");
        }
      },function(){
        var id = $(this).data("id");
        if(id == 3){
          $(".sub-menu3").stop(true,true).slideUp("slow");
        }
      });
      $(".hoverli").hover(function(){
        var id = $(this).data("id");
        if(id == 4){
          $(".sub-menu4").stop(true,true).slideDown("slow");
        }
      },function(){
        var id = $(this).data("id");
        if(id == 4){
          $(".sub-menu4").stop(true,true).slideUp("slow");
        }
      });
      $(".hoverli").hover(function(){
        var id = $(this).data("id");
        if(id == 5){
          $(".sub-menu5").stop(true,true).slideDown("slow");
        }
      },function(){
        var id = $(this).data("id");
        if(id == 5){
          $(".sub-menu5").stop(true,true).slideUp("slow");
        }
      });
      $(".hoverli").hover(function(){
        var id = $(this).data("id");
        if(id == 6){
          $(".sub-menu6").stop(true,true).slideDown("slow");
        }
      },function(){
        var id = $(this).data("id");
        if(id == 6){
          $(".sub-menu6").stop(true,true).slideUp("slow");
        }
      });
      $(".hoverli").hover(function(){
        var id = $(this).data("id");
        if(id == 7){
          $(".sub-menu7").stop(true,true).slideDown("slow");
        }
      },function(){
        var id = $(this).data("id");
        if(id == 7){
          $(".sub-menu7").stop(true,true).slideUp("slow");
        }
      });
    });
</script>

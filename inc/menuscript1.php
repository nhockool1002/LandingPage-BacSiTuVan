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

      $(".hoverli").click(function(){
        var id = $(this).data("id");
        if(id ==7){
        $(".sub-menu7").fadeIn();
        if($(".sub-menu6").show()){
          $(".sub-menu6").hide();
        }
        if($(".sub-menu5").show()){
          $(".sub-menu5").hide();
        }
        }
      });

      $(".sub-menu7").click(function(){
        $(".sub-menu7").fadeOut();
      });

      $(".sub-menu5").click(function(){
        $(".sub-menu5").fadeOut();
      });

      $(".sub-menu6").click(function(){
        window.open('http://tuvan.mayo.com.vn/lr/chatpre.aspx?id=kuk38256576&lng=en&p=http://dakhoa.mayo.com.vn&e=seo&r=&rf1=https%3A//www.google.com&rf2=.vn/&cid=1499315641952512948071&sid=1499315641952512948071', '_blank');
      });

      $("#close6").click(function(){
        $(".sub-menu6").fadeOut();
      });

      $(".hoverli").click(function(){
        var id = $(this).data("id");
        if(id ==6){
        $(".sub-menu6").fadeIn();
        if($(".sub-menu7").show()){
          $(".sub-menu7").hide();
        }
        if($(".sub-menu5").show()){
          $(".sub-menu5").hide();
        }
        }
      });

      $(".hoverli").click(function(){
        var id = $(this).data("id");
        if(id ==5){
        $(".sub-menu5").fadeIn();
        if($(".sub-menu6").show()){
          $(".sub-menu6").hide();
        }
        if($(".sub-menu7").show()){
          $(".sub-menu7").hide();
        }
        }
      });
});
</script>

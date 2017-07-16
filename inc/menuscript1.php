<script>
    $(document).ready(function(){
      $(".sub-menu").hide("fast");
      $(".sub-menu1").hide("fast");
      $(".sub-menu2").hide("fast");
      $(".sub-menu3").hide("fast");
      $(".sub-menu4").hide("fast");
      $(".sub-menu5").hide("fast");
      $(".sub-menu6").hide("fast");
      $(".sub-menu7").hide("fast");

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

      $(".hoverli").click(function(){
        var id = $(this).data("id");
        if(id == 0){
            $('html,body').animate({
            scrollTop: $(".intro").offset().top
            }, 1000);
        }
        if(id == 1){
            $('html,body').animate({
            scrollTop: $(".namkhoa").offset().top
            }, 1000);
        }
        if(id == 2){
            $('html,body').animate({
            scrollTop: $(".phukhoa").offset().top
            }, 1000);
        }
        if(id == 3){
            $('html,body').animate({
            scrollTop: $(".benhxahoi").offset().top
            }, 1000);
        }
        if(id == 4){
            $('html,body').animate({
            scrollTop: $(".ngoaikhoa").offset().top
            }, 1000);
        }
      });

      $(".arrow").click(function(){
        var id = $(this).data("id");
        if(id ==0){
            $('html,body').animate({
            scrollTop: $(".intro").offset().top
            }, 1000);
        }
        if(id == 1){
            $('html,body').animate({
            scrollTop: $(".namkhoa").offset().top
            }, 1000);
        }
        if(id == 2){
            $('html,body').animate({
            scrollTop: $(".phukhoa").offset().top
            }, 1000);
        }
        if(id == 3){
            $('html,body').animate({
            scrollTop: $(".benhxahoi").offset().top
            }, 1000);
        }
        if(id == 4){
            $('html,body').animate({
            scrollTop: $(".ngoaikhoa").offset().top
            }, 1000);
        }
        if(id == 5){
            $('html,body').animate({
            scrollTop: $(".footer").offset().top
            }, 1000);
        }
        if(id == 6){
          $('html,body').animate({
          scrollTop: $(".header").offset().top
        }, 2000);
        }
      });

});

</script>

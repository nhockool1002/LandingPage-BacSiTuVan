<!DOCTYPE html>
<html>
  <!-- <head>  hihi -->
        <?php
          require_once("inc/header.php");
          require_once("inc/menuscript1.php");
        ?>
  </head>
  <body>
    <!-- HEADER PAGE RANGE -->
    <div class="header">
      <?php
        // START HEADER PAGE
        require_once("inc/menu.php");
        require_once("inc/logo.php");
        require_once("inc/contactbox.php");
        require_once("inc/arrowtoinfo.php");
        // END  HEADER PAGE
      ?>
    </div>
    <!-- END HEADER PAGE RANGE -->

    <!-- INTRODUCE PAGE RANGE -->
    <a name="intro"></a>
    <div class="intro">
      <?php
        require_once("inc/infopage.php");
        require_once("inc/slideinfopage.php");
        require_once("inc/arrowtonamkhoa.php");
      ?>
    </div>
    <!-- END INTRODUCE PAGE RANGE -->

    <!-- NAMKHOA PAGE RANGE -->
    <a name="namkhoa"></a>
    <div class="namkhoa">
      <?php
        require_once("inc/namkhoainfo.php");
        require_once("inc/namkhoalayoutbox.php");
        require_once("inc/arrowtophukhoa.php");
      ?>
    </div>
    <!-- END NAMKHOA PAGE RANGE -->

    <!-- PHUKHOA PAGE RANGE -->
    <a name="phukhoa"></a>
    <div class="phukhoa">
      <?php
        require_once("inc/phukhoainfo.php");
        require_once("inc/phukhoalayoutbox.php");
        require_once("inc/arrowtobenhxahoi.php");
      ?>
    </div>
    <!-- END PHUKHOA PAGE RANGE -->

    <!-- BENHXAHOI PAGE RANGE -->
    <a name="benhxahoi"></a>
    <div class="benhxahoi">
      <?php
        require_once("inc/benhxahoiinfo.php");
        require_once("inc/benhxahoilayoutbox.php");
        require_once("inc/arrowtongoaikhoa.php");
      ?>
    </div>
    <!-- END BENHXAHOI PAGE RANGE -->

    <!-- NGOAIKHOA PAGE RANGE -->
    </div>
    <a name="ngoaikhoa"></a>
    <div class="ngoaikhoa">
      <?php
        require_once ("inc/ngoaikhoainfo.php");
        require_once ("inc/ngoaikhoalayoutbox.php");
        require_once ("inc/arrowtofooter.php");
      ?>
    </div>
    <!-- END NGOAIKHOA PAGE RANGE -->


    <!-- DOCTOR PAGE RANGE -->
    <a name="footer"></a>
    <div class="doingu">
        <?php
          require_once("inc/infodoctor.php");
          require_once("inc/doctorlist.php");
          require_once("inc/footer.php");
        ?>
    </div>
    <!-- END DOCTOR RANGE -->
  </body>
</html>

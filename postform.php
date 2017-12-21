<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="location.php" method="post">
      <input id ="input2" type="text" name="location" value="" oninput="disp()">
      <br>
      <p id="details"></p>
      <div id="input" style="display:none">
        <?php
            for ($i=1; $i <5 ; $i++) {
              ?>
              <script type="text/javascript">
                var id = <?php echo $i ?>;
              </script>
              <p id="<?php echo $i ?>" onclick="write(id)"><?php echo $i; ?></p>
              <?php
            }
        ?>


      </div>
      <input type="submit" name="" value="submit"  >
    </form>

    <!-- <script src="js/weather.js">
      var locationForm = document.getElementById('location-form');
      locationForm.addEventListener('submit', geocode);
    </script> -->
    <script type="text/javascript">
    function disp() {
      var box = document.getElementById('input');
      box.style.display="block";

    }
    function write(x) {
      var box = document.getElementById('details');
      var sel=document.getElementById(x);
      box.innerHTML= sel.innerHTML;
      //var gh = document.getElementById('input');
      //gh.style.display="none";
    }

    </script>

  </body>
</html>

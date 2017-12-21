<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Form</title>
  </head>
  <body>

    <h2 align="center" >
        Complete Your Profile

    </h2>
    <hr>
    <br>
<div class="" align="center">


    <form class="" action="server.php" method="post">

        <input type="text"  name="FirstName" value="" placeholder="First Name"> <br><br>

        <input type="text" name="LastName" value="" placeholder="Last Name"></td><br><br>

        <input type="text" name="Email" value="" placeholder="Type your email"><br><br>

        <select class="" name="Day">
        <option value="">DD</option>
        <?php
          for ($i=1; $i<32; $i++) {
            ?>
          <option value="<?php echo $i ?>"><?php echo $i ?></option>
          <?php
          }

         ?>
        </select>

        <select class="" name="Month">
          <option value="">MM</option>
          <?php
            for ($i=1; $i<13; $i++) {
              ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php
            }

           ?>


        </select>

        <select class="" name="Year">
          <option value="">YYYY</option>
          <?php
            for ($i=1900; $i<2018; $i++) {
              ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php
            }

           ?>


        </select>
        <br><br>
        <input class="r1" type="radio" name="Gender" value="Male">Male
        <input class="r1" type="radio" name="Gender" value="Female">Female
        <br><br>
        <input type="text" name="Phone" value="" placeholder="Phone"><br><br>



        <input type="password" name="Password" value="" placeholder="Password"><br><br>

        <input type="password" name="ReenterPassword" value="" placeholder="Reenter Password"><br><br>

        <input type="submit" name="sbt" value="Submit">




    </form>
</div>
  </body>
</html>

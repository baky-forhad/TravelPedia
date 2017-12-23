<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Createpost</title>
        <link rel="stylesheet" href="css/bootstrap-grid.css">

        <style media="screen">
            div.bg
            {
                height:100%;
                width: 100%;
                background: url('resource/indexbg.jpeg') repeat;
                background-size: cover;
                background-position: center;
                position: relative;
                opacity: 1;
                filter: alpha(opacity=100);
            }
            select{
              height: 30px;
              width: 80px;
            }

            .login-form
            {
                width: 100%;
                margin: auto;
                max-width: 550px;
                left: 0;
                right: 0;
                padding: 20px;
                border: 0px solid #dddddd;
                opacity: 0.9;
                filter: alpha(opacity=90);
                background-color: #ffffff;
            }
            #join-link
            {
                text-decoration: none;
                text-decoration-color: red;
            }


            textarea{
                width: 100%;
            }


            #btn-login
            {
                width: 310px;
                font-weight: bold;
                color:#ffffff;
                background-color: red;
            }

        </style>
    </head>
    <body style="background-color: rgb(227, 231, 232)">
        <?php
        include 'function.php';
        include 'dbconnect.php';

        //include 'navbar.php';

        if(IsloggedIn())
        {
            $id=$_SESSION ['userId'] ;
            $sql = "SELECT * from user WHERE  userId='$id'";
            $result = mysqli_query(getConnection(), $sql)or die(mysqli_error());
            while($row = mysqli_fetch_assoc($result))
            {
                $userName = $row['userName'];
                $firstName=$row['firstName'];
                $lastName=$row['lastName'];
                $email =$row['email'];
                $pic=$row['profilePicLink'];
                $phone =$row['phone'];
                $dob=$row['dob'];
                $gender =$row['gender'];

            }
        ?>

            <div class="container-fluid bg" >
                <div class="row">
                    <?php include 'navbar.php'; ?>

                </div>
                <br><br><br><br>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div   class="login-form" style="top: 520px; ">
                            <h1 align="center" style="margin:0px">
                                  create a memeory!!!
                            <small>
                              <h6  style="margin:0px" >I traveled there!!!</h6>
                            </small>
                          </h1>
                            <hr>
                            <br>
                            <form class="" action="updateValidate.php" method="post">
                              <br />
                              <fieldset>
                                  <legend><b>USER | EDIT</b></legend>
                                  <br/>
                                  <form>
                                      <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                          <tr>
                                              <td width="100"></td>
                                              <td width="10"></td>
                                              <td width="230"></td>
                                              <td></td>
                                          </tr>
                                          <tr>
                                              <td>User Name</td>
                                              <td>:</td>
                                              <td><?php echo $userName; ?></td>
                                              <td></td>
                                          </tr>
                                          <tr><td colspan="4"><hr /></td></tr>
                                          <tr>
                                              <td>first Name</td>
                                              <td>:</td>
                                              <td><input name="firstname" type="text" value="<?php echo $firstName?>"></td>
                                              <td></td>
                                          </tr>
                                          <tr><td colspan="4"><hr /></td></tr>
                                          <tr>
                                              <td>Last Name</td>
                                              <td>:</td>
                                              <td><input name="lastname" type="text" value="<?php echo $lastName?>"></td>
                                              <td></td>
                                          </tr>
                                          <tr><td colspan="4"><hr /></td></tr>
                                          <tr>
                                              <td>Email</td>
                                              <td>:</td>
                                              <td>
                                                  <input name="email" type="text" value="<?php echo $email?>">
                                                  <abbr title="hint: sample@example.com"><b>i</b></abbr>
                                              </td>
                                              <td></td>
                                          </tr>
                                          <tr><td colspan="4"><hr /></td></tr>
                                          <tr>
                                              <td>Picture</td>
                                              <td>:</td>
                                              <td>
                                                  <table>
                                                      <tr>
                                                          <td><img width="48" src="<?php echo $pic?>" /></td>
                                                          <td><input type="file"></td>
                                                      </tr>
                                                  </table>
                                              </td>
                                              <td></td>
                                          </tr>


                                      </table>
                                      <hr />
                                      <input type="submit" value="Save">
                                  </form>
                              </fieldset>
                            </form>
                            <br><hr>
                        </div>
                        <br><br><br><br>
                    </div>

                </div>

            </div>

        <?php

        }
        else
        {
            header("Location:login.php");
        }
        ?>

    </body>
</html>

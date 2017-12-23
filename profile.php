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
              width:100%;
              margin-left: 0;
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

            input
            {
                height: 30px;
                width: 100%;
                margin-top: 7px;
                margin-bottom: 7px;
                font-size: 12pt;
                padding-left: 12px;


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
        session_start();
        include 'function.php';
        include 'dbconnect.php';

        //include 'navbar.php';

        if(isloggedIn())
        {
            $id;
            if(isset($_GET['id']))
            {
                $id =$_GET['id'];
            }
            else {
                $id=$_SESSION ['userId'] ;
            }

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
                            <h2 align="center" style="margin:0px">
                                  create a memeory!!!
                            <small>
                              <h6  style="margin:0px" >I traveled there!!!</h6>
                            </small>
                            </h2>
                            <hr>
                            <br>
                            <form class="" action="postvalidate.php" method="post">
                              <fieldset>
                                  <legend><b>USER | DETAILs</b></legend>
                                  <br/>
                                  <table cellpadding="0" cellspacing="0">
                                      <tr>
                                          <td width="100"></td>
                                          <td width="10"></td>
                                          <td width="230"></td>
                                          <td></td>
                                      </tr>
                                      <tr>
                                          <td>User Name</td>
                                          <td>:</td>
                                          <td><?php echo $userName ?></td>
                                      </tr>
                                      <tr><td colspan="3"><hr /></td></tr>
                                      <tr>
                                          <td>Frist Name</td>
                                          <td>:</td>
                                          <td><?php echo $firstName; ?></td>
                                          <td width="30%" rowspan="7" align="center">
                                              <img width="128" src="images/ragnar.jpeg"/>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>Last Name</td>
                                          <td>:</td>
                                          <td><?php echo $lastName; ?></td>
                                      </tr>
                                      <tr><td colspan="3"><hr /></td></tr>
                                      <tr>
                                          <td>Email</td>
                                          <td>:</td>
                                          <td><?php echo $email; ?></td>
                                      </tr>
                                      <tr><td colspan="3"><hr /></td></tr>
                                      <tr>
                                          <td>DOB</td>
                                          <td>:</td>
                                          <td><?php echo $dob; ?></td>
                                      </tr>
                                      <tr><td colspan="3"><hr /></td></tr>
                                      <tr>
                                          <td>Phone</td>
                                          <td>:</td>
                                          <td><?php echo $phone; ?></td>
                                      </tr>
                                      <tr><td colspan="3"><hr /></td></tr>
                                      <tr>
                                          <td>Gender</td>
                                          <td>:</td>
                                          <td><?php echo $gender; ?></td>
                                      </tr>


                                  </table>
                                  <hr/>
                                  <div align="center" >
                                    <?php
                                    if(isset($_GET['id']))
                                    {

                                    }
                                    else{
                                    ?>
                                    <a href="edit.php">Edit</a>
                                <?php } ?>
                                  </div>



                              </fieldset>
                            </form>
                            <br><hr>
                        </div>
                        <br><br><br><br>
                    </div>

                </div>
                <br><br><br><br><br>

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

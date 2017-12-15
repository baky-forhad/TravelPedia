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
        include 'function.php';
        //include 'navbar.php';

        if(IsloggedIn())
        {
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
                                  <legend><b>USER | DETAIL</b></legend>
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
                                          <td>bob</td>
                                      </tr>
                                      <tr><td colspan="3"><hr /></td></tr>
                                      <tr>
                                          <td>Name</td>
                                          <td>:</td>
                                          <td>Bob Marsh</td>
                                          <td width="30%" rowspan="7" align="center">
                                              <img width="128" src="images/ragnar.jpeg"/>
                                          </td>
                                      </tr>
                                      <tr><td colspan="3"><hr /></td></tr>
                                      <tr>
                                          <td>Email</td>
                                          <td>:</td>
                                          <td>bob@aiub.edu</td>
                                      </tr>
                                      <tr><td colspan="3"><hr/></td></tr>
                                      <tr>
                                          <td>Gender</td>
                                          <td>:</td>
                                          <td>Male</td>
                                      </tr>
                                      <tr><td colspan="3"><hr/></td></tr>
                                      <tr>
                                          <td>Date of Birth</td>
                                          <td>:</td>
                                          <td>19/09/1998</td>
                                      </tr>
                                      <tr><td colspan="3"><hr /></td></tr>
                                      <tr>
                                          <td>Phone</td>
                                          <td>:</td>
                                          <td>01645789654</td>
                                      </tr>

                                  </table>
                                  <hr/>
                                  <div align="center" >
                                    <a href="edit.php">Edit</a>
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

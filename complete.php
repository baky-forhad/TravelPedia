
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Complete Sign Up</title>

    <style media="screen">
    .login-form
    {
        width: 75%;
        max-width: 450px;
        margin: auto;
        position: absolute;
        left: 0;
        right: 0;
        padding: 20px;
        border: 1px solid #dddddd;
        background-color: #ffffff;
    }
    #join-link
    {
        text-decoration: none;
        text-decoration-color: red;
    }

    input
    {
        height: 15px;
        width: 200px;
        margin-top: 7px;
        margin-bottom: 7px;
        font-size: 12pt;
        padding-left: 6px;


    }
    select
    {
      height: 20px;
      width: 65px;
      margin-top: 7px;
      margin-bottom: 7px;
      font-size: 12pt;
      padding-left: 6px;
    }
    .btn-login
    {
        height: 20px;
        width: 80px;

    }

    #fname
    {
      width: 100px;
    }

    #lname
    {
      width: 100px;
    }
    .r1
    {
      width: 50px;
    }


    </style>

  </head>
  <body style="background-color: rgb(227, 231, 232)">



  <div class="login-form">

      <h2 align="center" style="margin:0px">
          Complete Your Profile

      </h2>
      <hr>
      <br>


        <form class="" action="index.php" method="post">







          <table align="center">

            <tr>
              <td>
                <div>
                    <input type="text"  id="fname" name="" value="" placeholder="First Name">

                    <input type="text" name="" id="lname" value="" placeholder="Last Name">
                </div>
              </td>

            </tr>
            <tr>
              <td>
                  <input type="email" name="" value="" placeholder="Type your email">

              </td>
            </tr>
            <tr>
              <td>

                <select class="" name="">
                <option value="">DD</option>
                <option value="">01</option>
                <option value="">02</option>


              </select>

              <select class="" name="">
                <option value="">MM</option>
                <option value="">01</option>
                <option value="">02</option>


              </select>

              <select class="" name="">
                <option value="">YYYY</option>
                <option value="">1996</option>
                <option value="">1997</option>


              </select>

            </td>
            </tr>

            <tr>
              <td>
                <input class="r1" type="radio" name="r1" value="">Male
                <input class="r1" type="radio" name="r1" value="">Female
              </td>
            </tr>

            <tr>
              <td>
                <input class="btn-login" type="button" name="" value="Skip">
                <input class="btn-login" type="submit" name="" value="Go">
              </td>
            </tr>




          </table>

        </form>
        <br><hr>



        <hr>




    </div>






  </body>
</html>

<!DOCTYPE html>
<html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Target Form with alshafey</title>
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <center>
          <h1 style="font-size:78px;">T A R G E T</h1>
            <?php
              if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){

                if($_REQUEST['username'] == "sanix" && $_REQUEST['password'] == "bleach1234"){
                  echo "<b style='color:green;'>SUCCESS </b>";
                }else{
                  echo "<b style='color:red;'>incorrect username or password </b>";
                }
              }
            ?>

          <form action="" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <input type="submit" name="submit" value="Connexion">
          </form>
          <br><br><br><br>
          <small>Made by <a target="_blank" href="https://github.com/kareem68960">kareemalshafey</a> to be test with <a target="_blank" href="https://github.com/kareem68960/Brute-Force-Login-alshafey.git">Brute Force Login project</a></small>
        </center>

    </body>

</html>

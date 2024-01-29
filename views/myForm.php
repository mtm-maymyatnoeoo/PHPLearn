<!DOCTYPE html>
<html>
  <head>
    <style>
      .require {
        color:red;
        font-weight:bold;
      }
    </style>

  </head>
  <body>
  <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
      }
      //email
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
      // website
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
      }
      // comment
      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }
      // gender
      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>

    <h1>PHP Form Validation Example</h1> <br>
    <span style="color:red"> * required field</span> <br> 
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <table>
        <tr>
          <td>Name:</td>
          <td><input type="text" name="name" > <span class="require">*<?php echo $nameErr;?></span></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email"><span class="require">*<?php echo $emailErr;?></span></td>
        </tr>
        <tr>
          <td>Website:</td>
          <td><input type="text" name="website"></td>
        </tr>
        <tr>
          <td>Comment:</td>
          <td><textarea name="comment" rows="5" cols="40"></textarea></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>
            <table>
              <tr>
                <td><input type="radio" name="gender" value="female"></td>
                <td><input type="radio" name="gender" value="male"></td>
                <td><input type="radio" name="gender" value="other"></td>
                <td><span class="require">*
                <?php echo $genderErr;?></span></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td colspan="2" style="text-align:center">
            <input type="submit">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>

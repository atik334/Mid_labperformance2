 <?php

      $degreeErr="";
      $degree="";

if (empty($_POST["degree"])) {
    $degreeErr = "degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }
  function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
}

            ?>

 <form method="POST" action=gender.php>
      Gender:           
      <input type="cheakbox" name="degree" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC
       <input type="cheakbox" name="degree" <?php if (isset($degree) && $degree=="Hsc") echo "checked";?> value="hsc">HSC
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "your input is: ";
echo $degree;
?>
      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regels</title>
    <link rel="stylesheet" href="play.css">
</head>
<body>
<!-- Home Button -->
<div class="home">
   <h1><a href="index.php">Home</a><h1>
    </div>
 
<!-- <div id="genderBtn">
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</div> -->

    <!-- Begin Boxes -->


<div class="text">

<h3>Jongen / Meisje ?<h3>

<h3>2 Tanden?<h3>

<h3>Wit of geel oranje achtige ogen?<h3>

<h3>Heeft hij/zij wenkbrauwen?<h3>

</div>












<center>
<!-- spongebob -->
<div class="box1">
    <br>
    <img src="./pics./SpongeBob_SquarePants_character.svg.png">
</div>

<br>
<!-- patrick -->
<div class="box2">
    <br>
    <img src="./pics./16f154ab0ac5bce014f79d649605eb9c.png">
</div>

<br>
<!-- gary -->
<div class="box3">
    <br>
    <img src="./pics./Gary_looking_up_stock_art.webp">
</div>


<!-- mrKrabs -->
<div class="box4">
    <br>
    <img src="./pics./Krabs_artwork.webp">
</div>

<!-- pearl -->
<br>
<div class="box5">
    <br>
    <img src="./pics./Pearl_Krabs.webp">
</div>

<!-- sandy -->
<br>
<div class="box6">
    <br>
    <img src="./pics./Sandy_Cheeks.svg.png">
</div>

<!-- Plankton -->
<br>
<div class="box7">
    <br>
    <img src="./pics./2001129-plankton.png">
</div>

<!-- mrsPuff -->
<br>
<div class="box8">
    <br>
    <img src="./pics./Mrs._Puff.svg.png">
</div>

<!-- fatFish -->
<br>
<div class="box9">
    <br>
    <img src="./pics./spongebob-squarepants-characters-17.webp">
</div>
</center>



<!-- <?php
$genderErr  = "";
if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<?php
print "<h2>Your Input:</h2>";
print "<br>";
print $gender;
?> -->

</body>
</html>
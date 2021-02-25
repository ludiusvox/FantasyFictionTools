<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="data:;base64,iVBORw0KGgo="></link>
        <title>CharacterSheet</title>
        <meta charset="UTF-8" name="referrer" content="origin"></meta>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">Fantasy Fiction Web Designer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="CharacterSheet.php">Character Sheet <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:3000">Plot Sketches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1/donate.php">Donate</a>
      </li>
      
    </ul>
  </div>
</nav>

  

    </head>
    
<body>

<?php
if(isset($_POST['fname'])){
  require "process.php";
}    
?>   
<div class="container">
  <div class="row">
    <div class="col order-first">
<p><bld>This character sheet is meant to give you an intelligent query of questions,
   uploads it to a server, and then you can view your Character sheet once it's complete.</bld></p>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col sm-6">
    <form action="process.php" method="POST" class="form-example">
        <div class="form-example">
          <label for="fname">Enter the Character's first name: </label>
          <input type="text" name="fname" id="fname" required></div>

          <div class="form-example">
          <label for="lname">Enter the Character's last name: </label>
          <input type="text" name="lname" id="lname" required>
        </div>
       <div class="form-example">
          <label for="StoryRole">What is the Characters Story Role: </label>
          <input type="text" name="StoryRole" id="StoryRole" required>
        </div>
        <div class="form-example">
          <label for="Appearance">What is the characters appearance? </label>
          <input type="text" name="Appearance" id="Appearance" required>
        </div>
        <div class="form-example">
          <label for="Motivation">What is the Characters motivation? </label>
          <input type="text" name="Motivation" id="Motivation" required>
        </div>
        <div class="form-example">
          <label for="Complexity">What is the Characters Complexity? </label>
          <input type="text" name="Complexity" id="Complexity" required>
        </div>
        <div class="form-example">
          <label for="Background">What is the Character's Background </label>
          <input type="text" name="Background" id="Background" required>
        </div>
        <div class="form-example">
          <label for="StoryGoal">What is the Characters Story Goal? </label>
          <input type="text" name="StoryGoal" id="StoryGoal" required>
        </div>
        <div class="form-example">
          <label for="PersonalObjective">What is the Characters Personal Objective? </label>
          <input type="text" name="PersonalObjective" id="PersonalObjective" required>
        </div>
        <div class="form-example">
          <label for="MostImportant">What is most important to the Character? </label>
          <input type="text" name="MostImportant" id="MostImportant" required>
        </div>
        <div class="form-example">
          <label for="WhenOpposed">What does the character do when opposed? </label>
          <input type="text" name="WhenOpposed" id="WhenOpposed" required>
        </div>
        <div class="form-example">
          <label for="LikeDislike">What does the character like/dislike? </label>
          <input type="text" name="LikeDislike" id="LikeDislike" required>
        </div>
        <div class="form-example">
          <label for="BeliefSystem">What is the Characters belief system? </label>
          <input type="text" name="BeliefSystem" id="BeliefSystem" required>
        </div>
        <div class="form-example">
          <label for="faults">What is the Character's faults? </label>
          <input type="text" name="faults" id="faults" required>
        </div>
        <div class="form-example">
          <label for="Habitat">What is the Characters natural habitat? </label>
          <input type="text" name="Habitat" id="Habitat" required>
        </div>
        <div class="form-example">
          <label for="Skills">What is the Characters skills? </label>
          <input type="text" name="Skills" id="Skills" required>
        </div>
        <div class="form-example">
          <label for="Powers">What is the Characters superpowers? </label>
          <input type="text" name="Powers" id="Powers" required>
        </div>
        <div class="form-example">
          <label for="PowersAge">At what age did the character recieve superpowers? </label>
          <input type="text" name="PowersAge" id="PowersAge" required>
        </div>
        <div class="form-example">
          <label for="PowersTraining">What kind of powers training did this character recieve? </label>
          <input type="text" name="PowersTraining" id="PowerTraining" required>
        </div>
        <div class="form-example">
          <label for="Introduction">How did you meet this character? </label>
          <input type="text" name="Introduction" id="Introduction" required>
        </div>
        <div class="form-example">
          <label for="WhoFoil">Who foils this characters plans or opposes? </label>
          <input type="text" name="WhoFoil" id="WhoFoil" required>
        </div>
        <div class="form-example">
          <label for="Childhood">What was the characters childhood? </label>
          <input type="text" name="Childhood" id="Childhood" required>
        </div>
        <div class="form-example">
          <label for="Parents">Who were the characters parents? </label>
          <input type="text" name="Parents" id="Parents" required>
        </div>
        <div class="form-example">
          <label for="ParentTreatment">How did the characters parents treat the character? </label>
          <input type="text" name="ParentTreatment" id="ParentTreatment" required>
        </div>
        <div class="form-example">
          <label for="MostImportantPerson">What is the most important person to this character? </label>
          <input type="text" name="MostImportantPerson" id="MostImportantPerson" required>
        </div>
        <div class="form-example">
          <label for="ChildhoodAchievement">What was the childhood achievements? </label>
          <input type="text" name="ChildhoodAchievement" id="ChildhoodAchievement" required>
        </div>
        <div class="form-example">
          <label for="CharacterTragedy">Has this character endured any trajedy? </label>
          <input type="text" name="CharacterTragedy" id="CharacterTragedy" required>
        </div>
        <div class="form-example">
          <label for="FlawDrive">What is the Characters flaws? </label>
          <input type="text" name="FlawDrive" id="FlawDrive" required>
        </div>
        <div class="form-example">
          <label for="CharSecrets">What is the Characters secrets? </label>
          <input type="text" name="CharSecrets" id="CharSecrets" required>
        </div>
        <div class="form-example">
          <label for="HiddenGuilt">What is the characters hidden guilts? </label>
          <input type="text" name="HiddenGuilt" id="HiddenGuilt" required>
        </div>
        <div class="form-example">
          <label for=":InnerSadness">Does this character have inner sadness? </label>
          <input type="text" name="InnerSadness" id="InnerSadness" required>
        </div>
        <div class="form-example">
          <label for="Mood">What is the Characters normal mood? </label>
          <input type="text" name="Mood" id="Mood" required>
        </div>
        <div class="form-example">
          <label for="AfraidOf">What is the character Afraid of? </label>
          <input type="text" name="AfraidOf" id="AfraidOf" required>
        </div>
        <div class="form-example">
          <label for="SurfaceDepth">Is this character shallow or deep? </label>
          <input type="text" name="SurfaceDepth" id="SurfacDepth" required>
        </div>
        <div class="form-example">
          <label for="Loner">Is this character a loner or a groupie? </label>
          <input type="text" name="Loner" id="Loner" required>
        </div>
        <div class="form-example">
          <label for="Change">How much does this character change? </label>
          <input type="text" name="Change" id="Change" required>
        </div>
        <div class="form-example">
          <label for="LearningCapacity">What is the characters learning capacity? </label>
          <input type="text" name="LearningCapacity" id="LearningCapacity" required>
        </div>
        <div class="form-example">
          <label for="Personality">What is the Characters personality? </label>
          <input type="text" name="Personality" id="Personality" required>
        </div>
        <div id="button" aria-describedby="tooltip" class="form-example">
        <input type="submit" value="submit">
        </div>
      </form>
      

    <div role="tooltip">
    Submit the document to the server.
      <div id="arrow" data-popper-arrow></div>
    </div>
</div>
<div class="col sm-6">
<form action="CharacterSheet.php" method="post">
  <label for="ID">What is the character ID#? </label>
  <input type="number" name="ID" id="ID">
  <div id="button" aria-describedby="tooltip" class="form-example">
        <input type="submit" value="submit">
<br></br>
<p>Mouseover for text </p>
<div style="width: 400px; height: 500px; background-color: white;" 
        onmouseover="document.getElementById('div1').style.display = 'block';">
   <div id="div1" style="display: none;">


<?php
$ID = ($_REQUEST['ID']);
echo "Testing aside table ";

$servername = "localhost";
$username = "root";
$password = "1253";
$dbname = "Project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM CharacterSketch WHERE ID=$ID";
$result = $conn->query($sql);
 
$row = $result -> fetch_assoc();
printf (" <b> Character's first name:</b> %s <b>Character's last name:</b> %s <b>Character's story role:</b> %s <b> Character's appearance:</b> %s <b> The Character's motivation: </b> %s <b> Character complexity: </b> %s <b> Character background: </b> %s <b> Character story goal: </b> %s <b> Character personal objective: </b> %s <b> Most important thing to the character: </b> %s <b> Character's actions when opposed: </b> %s <b> Character likes/dislikes: </b> %s <b> Character belief system </b>  %s <b> Character faults:</b> %s <b> Characters residence:</b> %s <b> Character skils: </b> %s <b> Superpowers?</b> %s <b> Powers gained at what age: </b> %s <b> Superpowers training (if any):</b> %s <b> How this character is introduced:</b> %s <b> Character's antithesis/foil: </b> %s <b>Character childhood: </b> %s <b> Characteer's parents:</b> %s <b> The parents treated the Character:</b> %s<b> Most important person to the character:</b> %s <b> Childhood achievements: </b> %s<b> Tragedies occured or not:</b> %s <b> Character flaws:</b> %s <b> Character secrets:</b> %s <b> Hidden guilts: </b> %s <b> Character's inner sadness:</b> %s <b> Normal mood: </b> %s <b> Fears(phobias) </b> %s <b> Shallow or deep character: </b> %s <b> Loner or groupie? </b> %s <b> Character change over time: </b> %s <b> Character's learning capacity </b> %s Character personality:</b> %s  \n", $row["FirstName"], $row["LastName"],$row["StoryRole"], $row["Appearance"], $row["Motivation"], $row["Complexity"], $row["Background"], $row["StoryGoal"], $row["PersonalObjective"], $row["MostImportant"], $row["WhenOpposed"], $row["LikeDislike"], $row["BeliefSystem"], $row["faults"], $row["Habitat"], $row["Skills"], $row["Powers"], $row["PowersAge"], $row["PowersTraining"], $row["Introduction"], $row["Whofoil"], $row["Childhood"], $row["Parents"], $row["ParentTreatment"], $row["MostImportantPerson"], $row["ChildhoodAchievement"], $row["CharacterTragedy"], $row["FlawDrive"], $row["CharSecrets"], $row["HiddenGuilt"], $row["InnerSadness"], $row["Mood"], $row["AfraidOf"], $row["SurfaceDepth"], $row["Loner"], $row["Change"], $row["LearningCapacity"], $row["Personality"] );

// Free result set
$result -> free_result();

$mysqli -> close();
?>
</div>
</div>


</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html> 
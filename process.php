<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="icon" href="data:;base64,iVBORw0KGgo="></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="data:;base64,iVBORw0KGgo="></link>
        <title>CharacterSheet</title>
        <meta charset="UTF-8" name="referrer" content="origin"></meta>
        <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Fantasy Fiction Workshop</h5>
    <span class="text-muted">This is to build character sketch sheets.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
</head>
<?php

include_once('db.php');

$fname = ($_REQUEST['fname']);
$lname = ($_REQUEST['lname']);
$StoryRole = ($_REQUEST['StoryRole']);
$Appearance = ($_REQUEST['Appearance']);
$Motivation = ($_REQUEST['Motivation']);
$Complexity = ($_REQUEST['Complexity']);
$Background = ($_REQUEST['Background']);
$StoryGoal = ($_REQUEST['StoryGoal']);
$PersonalObjective = ($_REQUEST['PersonalObjective']);
$MostImportant = ($_REQUEST['MostImportant']);
$WhenOpposed = ($_REQUEST['WhenOpposed']);
$LikeDislike = ($_REQUEST['LikeDislike']);
$BeliefSystem = ($_REQUEST['BeliefSystem']);
$faults = ($_REQUEST['faults']);
$Habitat = ($_REQUEST['Habitat']);
$Skills = ($_REQUEST['Skills']);
$Powers = ($_REQUEST['Powers']);
$PowersAge = ($_REQUEST['PowersAge']);
$PowersTraining = ($_REQUEST['PowerTraining']);
$Introduction = ($_REQUEST['Introduction']);
$WhoFoil = ($_REQUEST['WhoFoil']);
$Childhood = ($_REQUEST['Childhood']);
$Parents = ($_REQUEST['Parents']);
$ParentTreatment = ($_REQUEST['ParentTreatment']);
$MostImportantPerson = ($_REQUEST['MostImportantPerson']);
$ChildhoodAchievement = ($_REQUEST['ChildhoodAchievement']);
$CharacterTragedy = ($_REQUEST['CharacterTragedy']);
$FlawDrive = ($_REQUEST['FlawDrive']);
$CharSecrets = ($_REQUEST['CharSecrets']);
$HiddenGuilt = ($_REQUEST['HiddenGuilt']);
$InnerSadness = ($_REQUEST['InnerSadness']);
$Mood = ($_REQUEST['Mood']);
$AfraidOf = ($_REQUEST['AfraidOf']);
$SurfaceDepth = ($_REQUEST['SurfaceDepth']);
$Loner = ($_REQUEST['Loner']);
$Change = ($_REQUEST['Change']);
$LearningCapacity = ($_REQUEST['LearningCapacity']);
$Personality = ($_REQUEST['Personality']);



$servername='localhost';
$username='root';
$password='1253';
$dbname = "Project";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
$sql = "INSERT INTO 
`CharacterSketch` (`FirstName`, `LastName`, `StoryRole`, `Appearance`, `Motivation`, `Complexity`, `Background`, `StoryGoal`, `PersonalObjective`, `MostImportant`, `WhenOpposed`, `LikeDislike`, `BeliefSystem`, `faults`, `Habitat`, `Skills`, `Powers`, `PowersAge`, `PowersTraining`, `Introduction`, `Whofoil`, `Childhood`, `Parents`, `ParentTreatment`,`MostImportantPerson`, `ChildhoodAchievement`, `CharacterTragedy`, `FlawDrive`, `CharSecrets`, `HiddenGuilt`, `InnerSadness`, `Mood`, `AfraidOf`, `SurfaceDepth`, `Loner`, `Change`, `LearningCapacity`, `Personality`) 
VALUES ('$fname', '$lname','$StoryRole','$Appearance','$Motivation','$Complexity','$Background','$StoryGoal','$PersonalObjective','$MostImportant','$WhenOpposed','$LikeDislike','$BeliefSystem','$faults','$Habitat','$Skills','$Powers','$PowersAge','$PowerTraining','$Introduction','$WhoFoil','$Childhood','$Parents','$ParentTreatment','$MostImportantPerson','$ChildhoodAchievement','$CharacterTragedy','$FlawDrive','$CharSecrets','$HiddenGuilt','$InnerSadness','$Mood','$AfraidOf','$SurfaceDepth','$Loner','$Change','$LearningCapacity','$Personality')";

if (mysqli_query($conn, $sql)) {
 $last_id = mysqli_insert_id($conn);
   echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<form>
<div id="button" aria-describedby="tooltip" class="form-example">
        <input type="submit" value="submit">
        </div>
<div id="tooltip" role="tooltip">
    Return to main screen.
      <div id="arrow" data-popper-arrow></div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


</html>
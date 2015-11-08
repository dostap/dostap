
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

  $answer = "";
  include 'html/header.html';
  include 'php/gridClass.php';
  $gridSize = 8;

  $grid = new Grid($gridSize,$gridSize); 
  $grid->createNewGrid();
  $grid->displayGrid();
  

  if(isset($_GET['startId'])){
    include 'php/calculate.php';
    $startCoords = getStartCoords($startId);
    $grid = $grid->updateGrid($startCoords);
  }
  
  include 'html/controls.html';
  include 'html/footer.html';
?>

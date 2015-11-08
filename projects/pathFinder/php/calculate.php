<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include 'gridClass.php';
$startId = $_REQUEST['startId'];

function getStartCoords($startId){
  
  $goalIndexArray = array(8,8);
  $startIndexArray = array(intval
                           (substr($startId,0,1)),
                           intval
                           (substr($startId,1,1))
                          );
  return $startIndexArray;
}

$startCoords = getStartCoords($startId);

      $xstart = $startCoords[1];
      $xend = 8;
      $ystart = $startCoords[0];
      $yend = 8;

$gridSize = 8;
$grid = new Grid($gridSize,$gridSize); 
$grid->createNewGrid();

$stepCount = $grid->shortestPathGrid($startCoords);

?>
      <p>
        <span id="answerMessage" style="color:#900048;">
          You started at x =
          <?
          echo $startCoords[1]
          ?>; and y = 
          <?
          echo $startCoords[0]
          ?>. 
          Your shortest path is     
          <?
          echo $stepCount; 
          ?> steps.
        </span>
      </p>
<?;

//display the new grid that shows the path

$grid->displayGrid();
//reset stepcount variable
$stepCount = 0;
?>
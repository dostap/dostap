<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
  
  class Grid{
    
    public $x;
    public $y;
    public $gridArray = array();
    
    function __construct($x, $y){
      $this->x = $x;
      $this->y = $y;
    }
    
    function createNewGrid(){
      //new grid will have all values set to emptySquare
       $this->gridArray = array_fill(1,$this->x, array_fill(1, $this->y, "emptySquare"));

      //update last square to the goalSquare
      $this->gridArray[$this->x][$this->y] = "goalSquare";
       return;
    }
          
    function displayGrid() {
      //add a container div, then
      //loop through the gridArray and display the appropriate div
            ?>
            <div class="container">
            <?
      for($xcoord = 1; $xcoord <= $this->x; $xcoord++){
        for($ycoord = 1; $ycoord <= $this->y; $ycoord++){
          if($this->gridArray[$xcoord][$ycoord] == "emptySquare"){
            ?>
            <div class="emptySquare" id="<?echo $xcoord.$ycoord?>"></div>
            <?
          }else if($this->gridArray[$xcoord][$ycoord] == "pathSquare"){
            ?>
            <div class="pathSquare"></div>
            <?
          }else if($this->gridArray[$xcoord][$ycoord] == "chosenSquare"){
            ?>
            <div class="chosenSquare"></div>
            <? 
          }else if($this->gridArray[$xcoord][$ycoord] == "goalSquare"){
            ?>
            <div class="goalSquare"></div>
            <?
          }
        }//close second for loop
      }//close first for loop 
          ?>
           </div>
            <?
    }//close function  
    
   
    
    function shortestPathGrid($startCoords){
      
      $this->gridArray[$startCoords[0]][$startCoords[1]] = "chosenSquare"; 
     
      $gridArr = array();
      $gridArr = $this->gridArray;
      
      //first coordinate is row number i.e. y coordinate
      $xstart = $startCoords[1];
      $xend = $this->x;
      $ystart = $startCoords[0];
      $yend = $this->y;
      $countSteps = 0;
      
      /*
      //shortest path = manhattan distance
      //if there are no obstacles
      $xdiff = ($xend - $xstart);
      $ydiff = ($yend-$ystart);
      $shortestPath = $xdiff + $ydiff;
      */
      
       function findPath($x ,$y) {
        
         global $gridArr;
         
         //check if we are at the goal
        if($gridArr[$x][$y] == "goalSquare"){
          return true;
        }
        
         //check if we can move into the grid square
         //if not open, return false
        if (($gridArr[$x][$y] != "emptySquare")
          && ($gridArr[$x][$y] != "goalSquare")){
          return false;
        }
        
         //mark current as part of solution path
        $gridArr[$x][$y] = "pathSquare";
         $countSteps++;
         
        //now check all directions
        if (findPath($gridArr, $x+1, $y)) { 
          return true; }
        if (findPath($gridArr, $x, $y+1)) { 
          return true; }
	      if (findPath($gridArr, $x-1, $y)) { 
          return true; }
	      if (findPath($gridArr, $x, $y-1)) { 
          return true; }
        
         //unmark as solution path since we have not advanced in any direction
         $gridArr[$x][$y] = "emptySquare";
         $countSteps--;
       
        return false;
      }

      //call recursive function
      findPath($xstart, $ystart);
    

      $this->gridArray = $gridArr;
      return $countSteps;
    
    }
  }

?>
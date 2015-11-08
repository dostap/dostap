//initialize boolean flags
//in the beginning we have NOT chosen starting position
//and the game has NOT started
var beginGame = false;
var addingObstacles = false;
var obstacleCounter = 0;
var startId = 0;

$(function() {

      //clicking on an empty square i.e. choosing starting position
      $('.emptySquare').click(function(){
        if (beginGame != true){
          $(this).toggleClass('clicked');
          //now we have a starting position and the game has started
          beginGame = true;
          startId = $(this).attr('id');
        } else if (addingObstacles == false){
          //if user clicks AGAIN and they are not adding obstacles
          document.getElementById('errorMsg').style.display = "block";
        }
       });//end function on emptySquare
  
 
  
    //clicking on restart button
    $("#restartBtn").click(function(){
      $("#answerMessage").load('index.php');
      $('.emptySquare').removeClass("clicked");
      $('.emptySquare').removeClass("obstacleSquare");
      $('.emptySquare').removeClass("pathSquare");
      $('.emptySquare').removeAttr('title');
      document.getElementById('errorMsg').style.display = "none";
      beginGame = false;
      addingObstacles = false;
      });
  
   //clicking on obstacle button
    $("#obstaclesBtn").click(function(){
      document.getElementById('errorMsg').style.display = "none";
      //if you have chosen starting position
      //and the game has started
      //then add obstacles
      if (beginGame == true){
        addingObstacles = true;
      $('.emptySquare').click(function(){
        $(this).addClass("obstacleSquare");
        obstacleCounter++;
      
       });
        //if there is no starting position chosen
        //then you get an error
      }
      else if(addingObstacles == false){
        document.getElementById('errorMsg').style.display = "block";
      }
      
      });// close obstaclesBtn
 
  
  //clicking the show the path button
  $("#showPathBtn").click(function(event ){
    //$('#answerMessage').show();
    showPath();
    if (beginGame == true){
    event.preventDefault();
      return false;
    }
  });

  });

function showPath(){
      var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("answerMessage").innerHTML = xmlhttp.responseText;
              }
        }
        xmlhttp.open("GET", "/php/calculate.php?startId=" + startId.toString(), true);
        xmlhttp.send();
      }

 
  
  

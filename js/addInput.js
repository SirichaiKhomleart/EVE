var counter = 1;
var limit = 5;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " Types");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML ="<div class='col-md-3 pull-left'></div><div class='col-md-3 '><input class='input3' type='text' name='myInputs[]'></div><div class='col-md-3 '><input class='input3' type='text' name='myInputs[]'></div><div class='col-md-3 '><input class='input3' type='text' name='myInputs[]'></div><div style='clear:both;'></div>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
<?php
  // Change player location
function changeLocation(){	
  
  global $location;
  echo "Where do you want to go?\n";
  $cmd = readline ("> ");
  $cmd =  strtolower($cmd);
  
  if($location === 'kitchen' && $cmd === "bathroom"){
    echo "you go to: bathroom.\n";
    $location = "bathroom";
  }elseif($location === "kitchen" && $cmd === "woods"){
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
    $location = "woods";
  } elseif($location === "bathroom" && $cmd === "kitchen"){
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  } elseif ($location === "woods" && $cmd === "kitchen"){
  echo "You go to: kitchen.\n";
    $location = "kitchen";
  } elseif ($cmd === 'woods' || $cmd === 'kitchen' || $cmd === 'bathroom' ){
    echo 'You can\'t go directly to there from your current location. Try going somewhere else first.\n.';
  } else{
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }
}
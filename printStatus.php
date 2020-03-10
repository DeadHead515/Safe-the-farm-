<?php
// Print Current Status
function printStatus(){
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;
  
    echo "You are in: $location\n";
  
  
    return ($wearing_glasses) ? "You are wearing contacts.\n" : ($wearing_glasses) ? "you are wearing glasses.\n" : ($has_mushrooms) ? "you are holding mushrooms.\n" : ($has_soup) ? "you are holding a scalding-hot bowl of mushroom soup.\n" : ($needs_to_pee) ? "You need to pee!\n" : ($is_hungry) ? "You are hungry.\n" : "You are well-fed and energetic.\n";

}

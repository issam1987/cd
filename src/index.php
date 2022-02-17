<?php
/**
 * Define template file.
 * 
 * This function calls a static fetching method against the Ingredient class
 * 
 * @param int $a Describe what this parameter is
 * @return int
 */
function hookMenu($a){
    return $a+3;
}
echo hookMenu(5);
?>
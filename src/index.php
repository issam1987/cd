<?php
/**
 * Implements hook_menu().
 *
 * Description
 *
 * @return int An array of menu items
 */
function afg(){
    $a=5;
    $b=6;
    return $a+$b;
}
echo afg();
?>
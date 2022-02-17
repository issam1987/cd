<?php
/**
 * Implements hook_menu().
 *
 * Description
 *
 * @return int An array of menu items
 */
function hook_menu($a, $b){
    return $a+$b;
}
echo hook_menu(5,6);
?>
<?php
/**
 * @param int $a
 * @param int $b
 * @return int An array of menu items
 */
function hookMenu($a, $b){
    return $a+$b;
}
echo hookMenu(5,6);
?>
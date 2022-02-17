<?php
/**
 * $a : nb products
 * $b : nb products
 * Implements hookMenu($a, $b).
 *
 * Description
 *
 * @return int An array of menu items
 */
function hookMenu($a, $b){
    return $a+$b;
}
echo hookMenu(5,6);
?>
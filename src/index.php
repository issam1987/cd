<?php
/**
 * Define template file.
 * 
 * @param int $a Describe what this parameter is
 */
function hookMenu($a){
    return $a+3;
}
echo hookMenu(5);
?>
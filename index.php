<?php
/*
 * On your index file add this code.
 */
$holding = 'holding.flag';
if (file_exists($holding)) {
    include_once dirname(__FILE__) . '/errors/holding.php';
    exit;
}
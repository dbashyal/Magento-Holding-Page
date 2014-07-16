<?php
/*
 * On your index file add this code.
 */
$holdingFile = 'holding.flag';
if (file_exists($holdingFile)) {
    include_once dirname(__FILE__) . '/errors/holding.php';
    exit;
}
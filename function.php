<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
function getCell($cell='') {
    return $_SESSION['CELL_' . $cell];
}
function playerName($player='X'){
    return $_SESSION['PLAYER_'.strtoupper($player).'_NAME'];
}
?>
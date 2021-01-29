<?php

if(isset($_GET['language']) && isset($_GET["serveur"])){
    echo $_GET['language'] . " => " . $_GET['serveur'];
}
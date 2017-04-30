<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 29.04.17
 * Time: 15:56
 */
echo "Hello world";

require_once 'Model/model.php';

$rows = findAll();

require_once 'View/template.php';

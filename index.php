<?php
require 'model/Table.php';
require 'class/Table.php';

use class\Table as Table;
use model\Table as Tabela;

$table = new Table;
$table->Drop();
$table->Select();
$table->InsertValues();

$tabela = new Tabela;
$tabela->CreateTable();
$tabela->DeleteTable();
$tabela->UpdateTable();
?>
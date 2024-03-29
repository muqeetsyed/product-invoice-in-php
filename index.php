<?php

require_once __DIR__ .'/vendor/autoload.php';

use Raimons\LayeredArchitecture\Core\Domain\Customer;
use Raimons\LayeredArchitecture\Core\Domain\Product;

var_dump(new Customer("test101","test@gmail.com","8348738732","address101"));
var_dump(new Product(
    "product101","111","A","flavour101","yes",["something"],"","3 days"
    )
);
exit;

$_SERVER['HTTP_HOST'] = 'raimonsFactory';

//Customer Possible URLI's
$_SERVER['REQUEST_URI'] = 'customer/new';
/*
$_SERVER['REQUEST_URI'] = 'customer/edit';
$_SERVER['REQUEST_URI'] = 'customer/list';
$_SERVER['REQUEST_URI'] = 'customer/delete';

//Product Possible URI's
$_SERVER['REQUEST_URI'] = 'product/new';
$_SERVER['REQUEST_URI'] = 'product/edit';
$_SERVER['REQUEST_URI'] = 'product/list';
$_SERVER['REQUEST_URI'] = 'product/delete';
*/

print_r($_SERVER);

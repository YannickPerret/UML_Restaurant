<?php
require_once('Customer.php');
require_once('Table.php');
require_once('Order.php');
require_once('Waiter.php');
require_once('HeadWaiter.php');
require_once('Bill.php');
require_once('Chef.php');

$takeNewTable = true;
$giveNote = false;
$havePayBill = false;

$chef = new Chef();
$waiter = new Waiter();
$headerWaiter = new HeadWaiter();
$customer1 = new Customer();

$order = new Order(['repas1']);

$waiter->take($order);
$waiter->send($order);

$chef->confirm($order);
$chef->announceReady($order);

$bill = new Bill($customer1);

$headerWaiter->makeDiscount($bill);

$customer1->pay($bill);

//s'il a payé son repas peut réserver une table
if($takeNewTable){
    $table = new Table($order);
    $customer1->book($table);

    $headerWaiter->validate($order);
}

if($giveNote && $havePayBill){
    $customer1->evaluate();
}

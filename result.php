<?php
require_once __DIR__.'/Delivery.php';

$delivery = new Delivery($_POST['sourceKladr'],$_POST['targetKladr'],$_POST['weight']);
echo $jsonCompany = $delivery->arrayCompany;
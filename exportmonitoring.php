<?php

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; Filename = MyDataMonitoring.xls");

require 'monitoringexport.php';

?>
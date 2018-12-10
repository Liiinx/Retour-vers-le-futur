<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 10/12/18
 * Time: 10:36
 */
require 'TimeTravel.php';

$date = new TimeTravel(new DateTime('1985-12-31'), new DateTime());

var_dump($date);
var_dump($date->getTravelInfo());
//var_dump(getTravelInfo());

var_dump($date->findDate(1000000000));

var_dump($date->backToFutureStepByStep(new DateInterval("P1M1W1D")));
<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 26/11/18
 * Time: 12:05
 */

class TimeTravel
{

    private $start;
    private $end;


    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }


    public function getTravelInfo()
    {

        $diff = $this->start->diff($this->end);
        //return $diff->y; // retourne l'année
        return $diff->format("Il y a %y années, %m mois, %d jours, %h heures, %i minutes et %s secondes entre les deux dates");
    }

    public function findDate(int $interval)
    {
        $intl = new DateInterval("PT" . $interval . "S");
        $this->start->sub($intl);
        return $this->start->format("d/m/Y h:i:s");
    }

    public function backToFutureStepByStep($period)
    {

        $result = [];

        $periods = new DatePeriod($this->start, $period, $this->end);
        foreach($periods as $date)
        {
            $result[] = $date->format("M,d,Y, A, H");
        }
        return $result;

    }
}


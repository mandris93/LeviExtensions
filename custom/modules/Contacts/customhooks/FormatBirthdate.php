<?php

if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}

class FormatBirthdate
{
    public function before_save($bean, $event, $arguments)
    {
        if(!$bean->birthdate)
        {
            $bean->birthdate = $this->FormatFromText($bean->text_birhdate_c);
        }
    }

    private function FormatFromText($birthdate)
    {
        $year = substr($birthdate,0,4);
        $month = substr($birthdate, 4,2);
        $day = substr($birthdate,6,2);
        $newDate = $year . "-" . $month . "-" . $day;
        return $newDate;
    }
}

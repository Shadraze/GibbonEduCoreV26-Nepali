<?php

namespace NepaliIntegration;

use NepaliIntegration\CustomCalendar;

class NepaliDateHelper
{
    private static CustomCalendar $calendarBS;
    private static bool $isBStoggled = true;

    public function __construct()
    {
        self::$calendarBS = new CustomCalendar('NepaliIntegration/bsCalendarData.json');                        
    }

    public static function AD2BS($adDate)
    {
        $bsDate = self::$calendarBS->dateAD_ToCalendarDate($adDate);
                
        $bsYear = $bsDate["year"];
        $bsMonth = $bsDate["month"];
        $bsDay = $bsDate["day"];

        return $bsYear."-".$bsMonth."-".$bsDay;
    }

    public static function BSisToggled()
    {
        return self::$isBStoggled;
    }
}

const NpDateHelper = new NepaliDateHelper();

function AD2BS_ifToggledBS($adDate)
{
    if(NpDateHelper->BSisToggled())
    {
        return NpDateHelper->AD2BS($adDate);
    }
    return $adDate;
}
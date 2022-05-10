<?php

namespace App\Helpers;

use Carbon\Carbon;
use DateTime;

class Helper
{
    public static function angkaKeRupiah($number)
    {
        $formatted = 'Rp ' . number_format($number, 0, '', '.');
        return $formatted;
    }

    public static function rupiahKeAngka($rupiah)
    {
        $formatted = (int) str_replace(array('Rp ', '.'), array('', ''), $rupiah);
        return $formatted;
    }

    public static function createRange($start, $end, $format = 'Y-m-d')
    {
        $start = new DateTime($start);
        $end = new DateTime($end);
        $invert = $start > $end;

        $dates = array();
        $dates[] = $start->format($format);
        while ($start != $end) {
            $start->modify(($invert ? '-' : '+') . '1 day');
            $dates[] = $start->format($format);
        }
        return $dates;
    }

    public static function getDateDifference($check_in, $check_out)
    {
        $checkInDate = Carbon::parse($check_in);
        $checkOutDate = Carbon::parse($check_out);
        $date_difference = $checkInDate->diffInDays($checkOutDate);
        return $date_difference;
    }
}

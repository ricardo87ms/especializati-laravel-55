<?php

function formatDateAndTime($value, $format = 'd/m/Y')
{
    return Carbon\Carbon::parse($value)->format($format);
}
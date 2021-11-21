<?php

if (!function_exists("tiko")) {
    function tiko(?string $tiko = null): string
    {
        if (!isset($tiko)) {
            return "tiko is not found";
        } else {
            return $tiko;
        }
    }
}
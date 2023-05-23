<?php
    $dta["NAMA"]= "Upin";
    $dta["TGL_LAHIR"] = "2013-09-16";
    $dta["JKEL"] = "L";
    $dta["ASAL"] = "Malaysia";
    $dta["HOBI"] = "Bermain";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode ($dta);


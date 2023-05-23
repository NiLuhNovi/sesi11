<?php
    $dta[0]["NAMA"]= "Upin";
    $dta[0]["TGL_LAHIR"] = "2013-09-16";
    $dta[0]["JKEL"] = "L";
    $dta[0]["ASAL"] = "Malaysia";
    $dta[0]["HOBI"] = "Bermain";

    $dta[1]["NAMA"]= "Ipin";
    $dta[1]["TGL_LAHIR"] = "2013-09-16";
    $dta[1]["JKEL"] = "L";
    $dta[1]["ASAL"] = "Malaysia";
    $dta[1]["HOBI"] = "Bermain";

    $dta[2]["NAMA"]= "Kak Ros";
    $dta[2]["TGL_LAHIR"] = "1995-03-27";
    $dta[2]["JKEL"] = "P";
    $dta[2]["ASAL"] = "Malaysia";
    $dta[2]["HOBI"] = "Memasak";



    header("Content-type: application/json; charset=utf-8");
    echo json_encode ($dta);


<?php
    include('dbCon.php');
    $tutsql = "select * from tutortb";
    $tutres = mysqli_query($con, $tutsql);
    while($tutrow = mysqli_fetch_array($tutres))
    {
        $loginTime = explode(" ", $tutrow[13]);
        $loginDate = $loginTime[0];
        $date1 = new DateTime();
        $date2 = new DateTime($loginDate);
        $interval = $date1->diff($date2);
        $days = $interval->d;

        if($days > 7)
        {
            $tutUpdSql = "update tutortb set statusID = 2 where tid = $tutrow[0]";
            $tutUpdRes = mysqli_query($con, $tutUpdSql);
        }
    }
    $studsql = "select * from studenttb";
    $studres = mysqli_query($con, $studsql);
    while($studrow = mysqli_fetch_array($studres))
    {
        $loginTime = explode(" ", $studrow[10]);
        $loginDate = $loginTime[0];
        $date1 = new DateTime();
        $date2 = new DateTime($loginDate);
        $interval = $date1->diff($date2);
        $days = $interval->d;

        if($days > 7)
        {
            $studUpdSql = "update studenttb set statusID = 2 where sid = $studrow[0]";
            $studUpdRes = mysqli_query($con, $studUpdSql);
        }
    }
?>
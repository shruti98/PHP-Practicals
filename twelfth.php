<?php
$target_day = mktime(0,0,0,8,14,2018);      //long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT)                                                and the time specified.

$today = time();                            //in sec

$diff_days = ($target_days - $today);

$days = (int)($diff_days/86400);        //because, 1 day has 86400 seconds (conversion frm sec to days)
print "Days till next birthday: $days days!"."\n";
?>


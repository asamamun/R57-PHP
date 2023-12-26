<?php
//wdpf=2
//j2ee=3
//format:BBIIIIIC
$studentid = ["57102342","57435653","57256762","57467893"];
usort($studentid,"batchsort");
function batchsort($a,$b){    
    $abatch = (int) $a[7];
    $bbatch = (int) $b[7];
    if($abatch < $bbatch) return 1;
    if($abatch == $bbatch) return 0;
    if($abatch > $bbatch) return -1; //position change   
}
print_r($studentid);
?>
<hr>
<?php
$dates = array(
    '10-10-2021', 
    '10-10-2011', 
    '2-17-2010', 
    '2-16-2011',
    '1-01-2013', 
    '1-01-2003', 
    '10-10-2012');
    function yearsort($a,$b){
        $aarr = explode("-",$a);
        $barr = explode("-",$b);
        $ayear = (int) $aarr[2];
        $byear = (int) $barr[2];
        if($ayear < $byear) return 1;
        if($ayear == $byear) return 0;
        if($ayear > $byear) return -1;
    }
    usort($dates,"yearsort");
    print_r($dates);

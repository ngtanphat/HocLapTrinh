<?php
$inPut = 'dksds!03@#8330#@8983hndh!@';
$outPut = '';
for ($i = 0; $i < strlen($inPut); $i++) {
    if ($inPut[$i] >= '0' && $inPut[$i] <= '9') {
        $outPut .= $inPut[$i];
    }
}
echo $outPut;

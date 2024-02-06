<?php

$nilai =50;

if($nilai >= 85 && $nilai <= 100){
    echo "predikat : A";
} elseif ($nilai >= 75 && $nilai <= 84){
    echo "predikat : b";
} elseif ($nilai >= 60 && $nilai <= 74){
    echo "predikat : c";
} elseif ($nilai >= 50 && $nilai <= 59){
    echo "predikat : d";
}
else{
    echo "predikat : e";
}
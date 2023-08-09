<?php


while (true) {  
    $Randomize = rand(1, 10);

    echo "======= Tebak Angka =======\n";
    echo "Tebak Angka Antara 1 - 10\n";
    echo "Angkamu : ";

    $PlayerInput = trim(fgets(STDIN));  


    if($Randomize == $PlayerInput){
        echo "Kamu Hebat, Congrats\n";
        echo "Angkanya adalah : $Randomize\n";
        echo "========= Selesai =========";
        exit;
    }else{
        echo "Jangan Putus Asa, Angkanya adalah : $Randomize\n";
    }
}




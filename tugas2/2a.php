<?php 

$nama_depan = "muhamad" ;
$nama_belakang = "rafly";

for($x = 1; $x <= 100 ; $x++){

    if ($x % 3 ==0 && $x % 5 ==0) {
        echo "$nama_depan $nama_belakang <br>";
    }
    elseif ($x % 3 == 0){
        echo "$nama_depan <br>";
    }
    elseif ($x % 5 == 0) {
        echo "$nama_belakang <br>";
    }
    else {
        echo "$x </br>";
    }
}
?>
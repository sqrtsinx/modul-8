<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // taking from form
    $nilai1 = $_POST["nilai1"];
    
    // calculate the mean from values and 
    // $totalNilai = $nilai1;
    $totalNilai = 0;
    $totalmatkul = 0;
    foreach($_POST['nilai1'] as $nilai){
        $totalNilai += $nilai;
        $totalmatkul++;
    }

    // looping for bonus lectures
    // $counter = 2;
    // while(isset($_POST["nilai$counter"])){
    //     $nilaiMatkul = $_POST["nilai$counter"];
    //     $totalNilai += $nilaiMatkul;
    //     $totalmatkul++;
    //     $counter++;
    // }

    // if(is_array($totalNilai)){
    //     $totalNilai = array_sum($totalNilai);
    // }

    //calculate IPK
    $ipk = $totalNilai / $totalmatkul;

    // mencetak informasi
    echo "Data Successfully Created! <br>";
    foreach ($_POST['nilai1'] as $nilai){
        echo "Nilai Matkul ". ($nilai). "<br>";
    }

    // // Loop untuk mencetak nilai matkul tambahan
    // $counter = 2;
    // while (isset($_POST["nilai$counter"])) {
    //     $nilaiMatkul = $_POST["nilai$counter"];
    //     echo "Nilai Matkul $counter: $nilaiMatkul<br>";
    //     $counter++;
    // }

    echo "Total Mata Kuliah -- $totalmatkul<br>";
    echo "IPK: $ipk";

} else{
    // if form didn't submitted then
    echo "Form didnt submitted";
}
?>
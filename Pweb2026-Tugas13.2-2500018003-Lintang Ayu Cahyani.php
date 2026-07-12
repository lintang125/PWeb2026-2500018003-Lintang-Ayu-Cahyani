<!DOCTYPE html>
<html>
<head>
    <title>Tugas 13 PHP</title>
</head>
<body>

<h2>Data Nilai Mahasiswa</h2>

<?php

// Array data mahasiswa
$mahasiswa = [
    ["nama"=>"Andi", "nilai"=>85],
    ["nama"=>"Budi", "nilai"=>70],
    ["nama"=>"Citra", "nilai"=>95],
    ["nama"=>"Dina", "nilai"=>60],
    ["nama"=>"Eka", "nilai"=>78]
];

// Function menentukan grade
function grade($nilai){
    if($nilai >= 85){
        return "A";
    }elseif($nilai >= 75){
        return "B";
    }elseif($nilai >= 65){
        return "C";
    }elseif($nilai >= 50){
        return "D";
    }else{
        return "E";
    }
}

// Function menghitung rata-rata
function rataRata($data){
    $total = 0;

    foreach($data as $mhs){
        $total += $mhs["nilai"];
    }

    return $total / count($data);
}

echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Grade</th>
      </tr>";

$no = 1;

foreach($mahasiswa as $mhs){

    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>".$mhs["nama"]."</td>";
    echo "<td>".$mhs["nilai"]."</td>";
    echo "<td>".grade($mhs["nilai"])."</td>";
    echo "</tr>";

    $no++;
}

echo "</table>";

echo "<br>";
echo "<b>Rata-rata Nilai : ".rataRata($mahasiswa)."</b>";

?>

</body>
</html>
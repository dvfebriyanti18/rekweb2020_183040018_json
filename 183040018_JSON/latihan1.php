<?php

$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "043040023",
        "email" => "shandikagalih@unpas.ac.id"
    ],
    [
        "nama" => "Erik Doank",
        "nrp" => "043040001",
        "email" => "erik@gmail.com"
    ]

];

$data = json_encode($mahasiswa);
echo $data;

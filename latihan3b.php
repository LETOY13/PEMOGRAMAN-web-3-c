<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>latihan3b</title>
    <style type>
        .kelas {
            color: #1A0547;
            font-weight: bolder;
            font-style: italic;
            text :28px
            border : 1px solid;
        }
    </style>
</head>
<body>

</body>
</html>
<?php

$jawabanIsset = "Teks"; // Variabel ini telah didefinisikan dan memiliki nilai

if (isset($jawabanIsset)) {
    echo " Isset adalah= variabel yang telah didefinisikan dan memiliki nilai <br><br>";
} else {
    echo "Variabel variabel1 tidak terdefinisi atau nilainya null.";
}

$jawabanEmpty = ""; // Variabel ini telah didefinisikan, tetapi nilainya kosong

if (empty($jawabanEmpty)) {
    echo "Empty adalah= Varibel yang telah didefinisikan, tetapi nilainya kosong.";
} else {
    echo "Variabel variabel2 memiliki nilai atau tidak terdefinisi.";
}
?>
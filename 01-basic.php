<?php
class Student
{
    # code here...
}

// Mengecek semua class yang tersedia/sudah dideklarasikan
$classes = get_declared_classes();
echo "Classes: " . implode(', ', $classes) . "<br>";

// Mengecek ketersediaan class tertentu
$classNames = ['Product', 'Student', 'student'];
foreach ($classNames as $valVlassNames) {
    if (class_exists($valVlassNames)) {
        echo $valVlassNames . ' tersedia <br>';
    }
    else {
        echo $valVlassNames . ' tidak tersedia <br>';
    }
}
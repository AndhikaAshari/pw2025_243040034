<?php
function urutanAngka($angka)
{
    $nilai = 1;
    $output = '';

    for ($i = 0; $i < $angka; $i++) {
        $baris = '';
        for ($j = 0; $j <= $i; $j++) {
            $baris .= $nilai . ' ';
            $nilai++;
        }
        $output .= trim($baris) . '<br>';
    }

    return $output;
}

echo urutanAngka(5);

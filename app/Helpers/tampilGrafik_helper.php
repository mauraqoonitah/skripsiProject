<?php

function check_tampil($tampil_grafik)
{

    $db = \Config\Database::connect();
    $builder = $db->table('instrumen');
    $builder->getWhere(['tampil_grafik' => $tampil_grafik]);

    //jika status 1, maka checked box nya (showing grafik)
    if ($tampil_grafik == '1') {
        return "checked='checked'";
    }
}

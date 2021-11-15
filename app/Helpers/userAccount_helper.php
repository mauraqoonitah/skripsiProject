<?php
function check_access($is_active)
{
    $db = \Config\Database::connect();
    $builder = $db->table('users');
    $builder->getWhere(['active' => $is_active]);

    //jika status 1, maka checked box
    if ($is_active == '1') {
        return "checked='checked'";
    }
}

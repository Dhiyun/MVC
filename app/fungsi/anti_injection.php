<?php
function antiinjection($koneksi, $data) {
    $filter_sql = htmlspecialchars($data, ENT_QUOTES);
    $filter_sql = stripslashes($filter_sql);

    $param = ':data';
    $type = PDO::PARAM_STR;
    $koneksi->bind($param, $filter_sql, $type);

    return $filter_sql;
}
?>
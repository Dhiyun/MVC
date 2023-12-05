<?php
function antiinjection($koneksi, $data){
    // Melakukan htmlspecialchars dan stripslashes
    $filter_sql = htmlspecialchars($data, ENT_QUOTES);
    $filter_sql = stripslashes($filter_sql);

    // Bind parameter ke statement PDO
    $param = ':data';
    $type = PDO::PARAM_STR;
    $koneksi->bind($param, $filter_sql, $type);

    return $filter_sql;
}
?>

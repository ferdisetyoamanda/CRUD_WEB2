<?php
$conn_str = "host=hansken.db.elephantsql.com " .
    "port=5432 " .
    "user=kgrdvcrs " .
    "dbname=kgrdvcrs " .
    "password=Jvb9Oks2CFvMJLy-KGCIRj1wEtI5n5_h";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>
<?php
$conn_string = "host=172.28.0.2 port=5432 dbname=wp2_a user=postgres password=rahasia";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi DB Tersambung";
} else {
    echo "Koneksi DB GAGAL";
}
?>
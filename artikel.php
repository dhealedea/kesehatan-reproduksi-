<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM artikel ORDER BY tanggal_post DESC");
while ($row = mysqli_fetch_assoc($result)) {
  echo "<h3>{$row['judul']}</h3>";
  echo "<p>".substr($row['isi'],0,200)."...</p>";
  echo "<small>Ditulis oleh {$row['penulis']} - {$row['tanggal_post']}</small><hr>";
}
?>

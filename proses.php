<?php
// proses.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_telegram = $_POST['id_telegram'];
    $id_botTele = $_POST['id_botTele'];
    
    // Simpan nilai baru ke file konfigurasi atau database
    // Contoh jika menyimpan ke file konfigurasi:
    $configFile = 'telegram.php';
    $configContent = '<?php' . PHP_EOL .
                     '$id_telegram = "' . $id_telegram . '";' . PHP_EOL .
                     '$id_botTele = "' . $id_botTele . '";' . PHP_EOL .
                     '?>';
    
    file_put_contents($configFile, $configContent);
    
    echo "Pengaturan berhasil disimpan!";
}
?>

<?php
$key = substr(hash('sha256', "abcde12345", true), 0, 32);
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["message"] != null) {
    $data = $_POST["message"];
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["encrypted"] != null) {
    $data = base64_decode( $_POST["encrypted"] );
    $decrypted = openssl_decrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
}

?>

<h1>AES</h1>
<p>

</p>

<div class="card">
<div class="card-body">
    <h5 class="card-title">Plain Text</h5>
    <form action="" method="post">
        <div class="form-group">
            <label >Pesan untuk dienkripsi</label>
            <input type="text" class="form-control" name="message" placeholder="Tulis Pesan"><br>
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
</div>
</div>

<?php
if ($encrypted) {
?>
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Chiper Text</h5>
        <pre class="card-text"><?php echo base64_encode($encrypted);?></pre>
        <form action="" method="post">
            <div class="form-group">
                <label >Decrypt Pesan</label>
                <textarea class="form-control" name="encrypted"></textarea><br>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
    </div>
<?php } elseif ($decrypted) {
?>
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Hasil Decrypt</h5>
        <pre class="card-text"><?php echo $decrypted;?></pre>
    </div>
    </div>

<?php } ?>

<div class="card">
<div class="card-body">
    <h5 class="card-title">Key (base64 encoded)</h5>
    <pre class="card-text"><?php echo base64_encode( $key); ?></pre>
</div>
</div>

<div class="card">
<div class="card-body">
    <h5 class="card-title">Initialization Vector (base64 encoded)</h5>
    <pre class="card-text"><?php echo base64_encode( $iv );?></pre>
</div>
</div>

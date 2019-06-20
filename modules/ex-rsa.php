<?php

$privKey = openssl_pkey_get_private('file:///var/www/html/keys/private.pem');
$pubKey = openssl_pkey_get_public('file:///var/www/html/keys/public.pem');

$priv = file_get_contents('/var/www/html/keys/private.pem');
$pub = file_get_contents('/var/www/html/keys/public.pem');

$encryptedData = "";
$decryptedData = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["message"] != null) {
    $data = $_POST["message"];
    $encrypt = openssl_private_encrypt($data, $encryptedData, $privKey);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["encrypted"] != null) {
    $data = base64_decode( $_POST["encrypted"] );
    $decrypt = openssl_public_decrypt($data, $decryptedData, $pubKey);
}

?>

<h1>Metode RSA (Rivest–Shamir–Adleman)</h1>
<p>
RSA Merupakan salah satu sistem kriptografi yang menggunakan public-private key.
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
if ($encrypt) {
?>
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Chiper Text (Base64 Encoded)</h5>
        <pre class="card-text"><?php echo base64_encode($encryptedData);?></pre>
        <form action="" method="post">
            <div class="form-group">
                <label >Decrypt Pesan</label>
                <textarea class="form-control" name="encrypted"></textarea><br>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
    </div>
<?php } elseif ($decrypt) {
?>
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Hasil Decrypt</h5>
        <pre class="card-text"><?php echo $decryptedData;?></pre>
    </div>
    </div>

<?php } ?>

<div class="card">
<div class="card-body">
    <h5 class="card-title">Private Key</h5>
    <pre class="card-text"><?php echo $priv;?></pre>
</div>
</div>

<div class="card">
<div class="card-body">
    <h5 class="card-title">Pulic Key</h5>
    <pre class="card-text"><?php echo $pub;?></pre>
</div>
</div>

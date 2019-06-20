<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["message"] != null) {
    $data = $_POST["message"];
    $encrypted = md5($data);
}

?>

<h1>MD5 - message-digest algorithm</h1>
<p>

</p>

<div class="card">
<div class="card-body">
    <h5 class="card-title">Plain Text</h5>
    <form action="" method="post">
        <div class="form-group">
            <label >Pesan untuk hash</label>
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
        <h5 class="card-title">Hash String</h5>
        <pre class="card-text"><?php echo $encrypted;?></pre>
    </div>
    </div>
<?php } ?>

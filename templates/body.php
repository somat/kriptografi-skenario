<main role="main" class="container">
    <?php
        if (isset($_GET['mod'])) {
            switch ($_GET['mod']) {
                case 'rsa':
                    include 'modules/ex-rsa.php';
                    break;

                case 'aes':
                    include 'modules/ex-aes.php';
                    break;

                case 'md5':
                    include 'modules/ex-md5.php';
                    break;

                case 'sha':
                    include 'modules/ex-sha.php';
                    break;
            }
        }
    ?>
</main>

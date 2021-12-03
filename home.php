<?php
session_start();
if (!isset($_SESSION['userID'])){
    header("Location: index.php");
    die();
}
?>

<?php require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklann.css">
</head>

<body>
    <div class="header">
        <div class="content">
            <h1 class="judul">Welcome to My Website...</h1>   
            <p><i>Hallo, <?php echo $_SESSION['nama']; ?>...</i></p>
            <a href="logout.php" class="logout" onclick="return confirm('Apakah anda yakin ingin keluar?')">Logout</a><br>
        </div>
    </div>
    <br>
    <hr>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" data-id="<?= $item['id']; ?>" onclick ="addHist(this)">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>

        <aside>
            <h2>History</h2>
            <div id="history_buck">
                
            </div>
        </aside>
    </section>
    <script type="text/javascript" src="./assets/history.js"></script>
    <?php
    if (!isset($_COOKIE['tolak']) || $_COOKIE['tolak'] !== 'yes'){
        echo '<script src ="./assets/iklan/iklanfix.js"></script>';
    }
    ?>
</body>

</html>
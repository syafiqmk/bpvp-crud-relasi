<?php 
    require_once("config.php");

    $page = "";

    if(!empty($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "product-index";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title($page) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <div class="header-content">
            <h2 id="logo">CRUD</h2>
    
            <nav>
                <a href="index.php?page=product-index">Products</a>
            </nav>
        </div>
    </header>

    <main>
        <?php 
            require_once page($page);
        ?>
    </main>


    <script>
        function deleteConfirm($url) {
            $result = confirm("Hapus data?");

            if($result == true) {
                window.location.href = $url;
            }
        }
    </script>
</body>
</html>
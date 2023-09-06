<?php 
    require_once("config.php");

    $page = "";

    if(!empty($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "city-index";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Syafiq Muhammad Kahfi">
    <meta name="description" content="Website ini digunakan untuk belajar CRUD">
    <title><?= title($page) ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <header>
        <div class="header-content">
            <h2 id="logo">CRUD</h2>
    
            <nav>
                <a href="index.php?page=product-index">Products</a>
                <a href="index.php?page=customer-index">Customers</a>
                <a href="index.php?page=supplier-index">Suppliers</a>
            </nav>
        </div>
    </header>

    <main>
        <?php 
            require_once page($page);
        ?>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
<?php 
    // Basic Config
    // error_reporting(0);
    date_default_timezone_set('Asia/Singapore');
    session_start();

    // Database Constants
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "learn_hasil");

    // Database Connetction
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Title function
    function title($page) {
        switch($page) {
            case "product-index":
                return "Products";
                break;

            case "product-create":
                return "Add new product";
                break;

            case "product-update":
                return "Edit product";
                break;

            case "customer-index":
                return "Customers";
                break;

            case "customer-create":
                return "Add new customer";
                break;

            case "customer-update":
                return "Edit customer";
                break;

            case "supplier-index":
                return "Suppliers";
                break;

            case "supplier-create":
                return "Add new supplier";
                break;

            case "supplier-update":
                return "Edit supplier";
                break;

            default:
                return "default";
                break;
        }
    }

    // Page function
    function page($page) {
        switch($page) {
            case "product-index":
                return "product/index.php";
                break;

            case "product-create":
                return "product/create.php";
                break;

            case "product-update":
                return "product/update.php";
                break;

            case "product-destroy":
                return "product/destroy.php";
                break;

            case "customer-index":
                return "customer/index.php";
                break;

            case "customer-create":
                return "customer/create.php";
                break;

            case "customer-update":
                return "customer/update.php";
                break;

            case "customer-destroy":
                return "customer/destroy.php";
                break;

            case "supplier-index":
                return "supplier/index.php";
                break;

            case "supplier-create":
                return "supplier/create.php";
                break;

            case "supplier-update":
                return "supplier/update.php";
                break;

            case "supplier-destroy":
                return "supplier/destroy.php";
                break;
        }
    }
?>
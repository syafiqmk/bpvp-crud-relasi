<?php 
    // Basic Config
    // error_reporting(0);
    date_default_timezone_set('Asia/Singapore');
    session_start();

    // Database Constants
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "learn_sekolah");

    // Database Connetction
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Title function
    function title($page) {
        switch($page) {
            case "city-index":
                return "Cities";
                break;

            case "city-create":
                return "Add new city";
                break;

            case "city-update":
                return "Edit city";
                break;

            case "class-index":
                return "Clases";
                break;

            case "class-create":
                return "Add new class";
                break;

            case "class-update":
                return "Edit class";
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
            case "city-index":
                return "city/index.php";
                break;

            case "city-create":
                return "city/create.php";
                break;

            case "city-update":
                return "city/update.php";
                break;

            case "city-destroy":
                return "city/destroy.php";
                break;

            case "class-index":
                return "class/index.php";
                break;

            case "class-create":
                return "class/create.php";
                break;

            case "class-update":
                return "class/update.php";
                break;

            case "class-destroy":
                return "class/destroy.php";
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
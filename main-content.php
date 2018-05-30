<div class="main-content">
    <?php switch($module){
        case 'home':
            require 'homepage.php';
            exit;
        case 'portfolio':
            require_once 'portfolio/index.php';
            exit;
        case 'about':
            require_once 'about.php';
            exit;
        case 'contact':
            require_once 'contact.php';
            exit;
        case 'contact2':
            require_once 'contact2.php';
            exit;
        default:
            require_once 'homepage.php';
    } ?>
</div>
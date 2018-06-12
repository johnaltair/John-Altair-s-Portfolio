<script>
    $(document).ready(function ()
    {
        document.title = "John Altair Gensola - Portfolio";
    });
</script>
<div class="portfolio">
    <?php switch ($sub) {
        case 'altair-brewery':
            require_once 'portfolio/altair-brewery.php';
            exit;
        case 'artificial-intelligence':
            require_once 'portfolio/artificial-intelligence.php';
            exit;
        case 'artzone':
            require_once 'portfolio/artzone.php';
            exit;
        case 'barista-panda':
            require_once 'portfolio/barista-panda.php';
            exit;
        case 'caap':
            require_once 'portfolio/caap.php';
            exit;
        case 'capstoned':
            require_once 'portfolio/capstoned.php';
            exit;
        case 'colors':
            require_once 'portfolio/colors.php';
            exit;
        case 'consciousness':
            require_once 'portfolio/consciousness.php';
            exit;
        case 'doggie-cool':
            require_once 'portfolio/doggie-cool.php';
            exit;
        case 'el-verde-trio':
            require_once 'portfolio/el-verde-trio.php';
            exit;
        case 'e-voting-system':
            require_once 'portfolio/e-voting-system.php';
            exit;
        case 'eyedentity':
            require_once 'portfolio/eyedentity.php';
            exit;
        case 'gneus-x':
            require_once 'portfolio/gneus-x.php';
            exit;
        case 'jazen-co':
            require_once 'portfolio/jazen-co.php';
            exit;
        case 'manpower-system':
            require_once 'portfolio/manpower-system.php';
            exit;
        case 'match-me':
            require_once 'portfolio/match-me.php';
            exit;
        case 'medically':
            require_once 'portfolio/medically.php';
            exit;
        case 'mail-my-prescriptions':
            require_once 'portfolio/mail-my-prescriptions.php';
            exit;
        case 'oishii':
            require_once 'portfolio/oishii.php';
            exit;
        case 'pacialand':
            require_once 'portfolio/pacialand.php';
            exit;
        case 'paper-head':
            require_once 'portfolio/paper-head.php';
            exit;
        case 'phyco':
            require_once 'portfolio/phyco.php';
            exit;
        case 'piastra-italiano':
            require_once 'portfolio/piastra-italiano.php';
            exit;
        case 'pokemon-catcher':
            require_once 'portfolio/pokemon-catcher.php';
            exit;
        case 'portrait-i':
            require_once 'portfolio/portrait-i.php';
            exit;
        case 'portrait-ii':
            require_once 'portfolio/portrait-ii.php';
            exit;
        case 'policeaid-app':
            require_once 'portfolio/policeaid-app.php';
            exit;
        case 'propaganda':
            require_once 'portfolio/propaganda.php';
            exit;
        case 'stark-coffee':
            require_once 'portfolio/stark-coffee.php';
            exit;
        case 'tienda-del-palmera':
            require_once 'portfolio/tienda-del-palmera.php';
            exit;
        case 'true-or-false':
            require_once 'portfolio/true-or-false.php';
            exit;
        case 'ts9':
            require_once 'portfolio/ts9.php';
            exit;
        case 'wefly':
            require_once 'portfolio/wefly.php';
            exit;
        case 'yeoleum-isle':
            require_once 'portfolio/yeoleum-isle.php';
            exit;
        case 'yingpei-design':
            require_once 'portfolio/yingpei-design.php';
            exit;
        case 'yingpei-photography':
            require_once 'portfolio/yingpei-photography.php';
            exit;
        default:
            require_once 'portfolio/portfolio.php';
    } ?>
</div>
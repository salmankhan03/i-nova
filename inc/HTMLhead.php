<?php
$config = [
    'base_url' => ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '192.168.0.47')
        ? 'https://192.168.0.47/inova/'
        : 'https://inova.intelligrp.com/'
];
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="<?php echo $config['base_url']; ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<!-- <script src="js/script.js" defer></script> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="icon" href="img/logo/favicon/favicon.ico" sizes="16x16" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="img/logo/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="img/logo/favicon/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="img/logo/favicon/android-chrome-512x512.png">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CPT3SS8RVH"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-CPT3SS8RVH');
</script>
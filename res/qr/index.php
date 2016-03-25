<?php    

    include "qrlib.php";    
    $address = empty($_GET['address'])?'':$_GET['address'];
    QRcode::png($address, false, QR_ECLEVEL_L, 6);

    

    
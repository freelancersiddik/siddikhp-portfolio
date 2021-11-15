
<?php
// session start kora hoyacay
session_start();
// session set kora hoini
session_unset();
// sokol data dongso kora hoyacay jatay koray user ar sob data destroy hoya jai or new account create koray ba old account diya login koray
session_destroy();
// sob complete hoya galay takay nicer address a patiya dou
header("location:index.php");
// err exit koray dow 
exit;

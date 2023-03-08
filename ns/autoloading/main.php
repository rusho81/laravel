<?php
namespace CloudStorage;
 include "autoloader.php";

use CloudStorage\Mail\Mailer;
use CloudStorage\FileSystem\Scanner;
class Main{
    function __construct(){
        $mailer = new Mailer;
        $mailer->sendMail();

        $scanner = new Scanner();
        $scanner ->scan();
    }
}
new Main();
// CloudStorage\Mail\Mailer
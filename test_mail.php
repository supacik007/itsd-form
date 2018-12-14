<?php
 $recipient="username@localhost";
 $subject="Testovaci EMAIL z localhostu";
 $mail_body="Ahoj. Toto je testovacia sprava. Takze tak to vyzera, ze to funguje";
 mail($recipient, $subject, $mail_body);
 ?>

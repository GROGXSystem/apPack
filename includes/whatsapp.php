<?php

$whatsapp_data = file_get_contents("https://www.whatsapp.com/android/");
$whatsapp_string = explode("<p class=\"version\" align=\"center\">Version ", $whatsapp_data);
$whatsapp_string_array = explode("</p>Or", $whatsapp_string[1]);
$whatsapp_version = explode("-->" , $whatsapp_string_array[0]);
$whatsapp_link = "https://www.cdn.whatsapp.net/android/$whatsapp_version[0]/WhatsApp.apk";

$local_file = '../apk/WhatsApp.apk';
$copy = copy($whatsapp_link, $local_file);


?>




<?php
firma = $_POST['firma'];
name = $_POST['name'];
email = $_POST['email'];
phone = $_POST['phone'];
wnio = $_POST['wnio'];
kwota = $_POST['kwota'];
message = $_POST['message'];
formcontent=" Nazwa Firmy: $firma \n Imie i Nazwisko: $name \n Email: $email \n Telefon: $phone \n Wniosek: $wnio \n Prognozowana Kwota: $kwota \n Wiadomość: $message";
recipient = "<ashisharote4@gmail.com>";
subject = "Formularz Kontaktowy";
mailheader = "From: $email";
mail($recipient, $subject, $formcontent, $mailheader);
exit();//Remove this after debugging done
?>

<!--Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok
stampare “Accesso riuscito”, altrimenti “Accesso negato”-->
<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

//convalida nome---------------
$validName = false;

if(strlen($name) >=3 ){
    $validName = true;
}else {
    $validName = false;
}
//echo $validName ? 'Accesso effettuato come: '.$name : 'Nessun utente registrato come: '. $name;
//echo "<br>";

//convalida mail---------------
$validMail = false;

if (strrpos($mail, "@") && strrpos($mail, ".")) {
    $validMail = true;
} else {
    $validMail = false;
}
//echo $validMail ? 'Accesso effettuato' : 'A questa email non corrisponde un account';
//echo "<br>";

//convalida età---------------
$validAge = false;

if(ctype_digit($age)==true){
    $validAge = true;
}else {$validAge = false;
}

//echo $validAge ? 'ok' : 'no';
//echo "<br>";

//convalida accesso---------------

if(($validName == true) && ($validMail == true) && ($validAge == true)){
    echo "Accesso effettuato.";
}else{
    echo "Accesso negato.";
}

?>


<!--ESEMPIO TRUE ?name=feli&mail=feli@.com&age=31-->
<!--ESEMPIO FALSE ?name=fe&mail=feli.com&age=er-->

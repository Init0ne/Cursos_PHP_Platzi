<?php
// si se pide a traves de POST se cumple
// isset sirva para comprobar que exista la variable y no sea null
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lenght = intval($_POST['length']);
    $include_letters = isset($_POST['letters']);
    $include_numbers = isset($_POST['numbers']);
    $include_symbols = isset($_POST['symbols']);

    //Concatena los elementos seleccionados en el form
    $characters = '';
    if ($include_letters) {
        $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($include_numbers) {
        $characters .= '0123456789';
    }
    if ($include_symbols) {
        $characters .= '!@#$%^&*()_-+=<>?';
    }

    //Si no se selecciona ningun elemento manda mensaje de error
    if (empty($characters)) {
        header('Location: index.php?password=Error:SelectAtLeastOneCharacterType');
        exit;
    }

    //Bucle para seleccionar elementos random de la variable characters
    $password = '';
    for ($i = 0; $i < $lenght; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    header('Location: index.php?password=' . urldecode($password));
    exit;
} else {
    header('Location: index.php');
    exit;
}
?>
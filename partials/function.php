<!-- Gestione delle funzionalità la mail -->
<!-- Condizione per la mail corretta
Se la mail è settata e contiene una chiocciola e un punto
-->
<?php if(isset($_GET["email"]) && strpos($_GET["email"], '@') && strpos($_GET["email"], '.') ) {
        // Rendi la mail della sessione quella inserita dall' utente
        $_SESSION["email"] = $_GET["email"];
        // Stampa il messaggio di e-mail corretta ...
        $value = "Mail corretta";

        // ... Altimenti
    } else {
        // Stampa un messaggio di errore
        $value = "Errore, inserire una mail che contenga almeno un .";       
    }
     ?>
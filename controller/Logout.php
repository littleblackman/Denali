<?php

$session = new UserSession();
$session->destroy();

$_SESSION['flash']['success'] = 'vous etes maintenant deconnecte';

// Inclusion du template
include 'templates/logout.php';

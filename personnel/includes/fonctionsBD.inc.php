<?php
/**
 * fonctionsBD.inc.php
 * Contient toutes les fonctions qui permettent
 * 1. la connexion à la BD :getPdo()
 * 2. d'exécuter des requêtes et de retourner les résultats
 */

 /**
 /* fonction getPdo()
 /* IMPORTANT : utilisez un utilisateur MySQL dédié (jamais root en production).
 /* IMPORTANT : ne pas afficher $e->getMessage() en production
 /*
 /* @return PDO : objet de connexion à la BD
 /* @throws PDOException en cas d'erreur de connexion   
 */
 function getPdo(){
// **************************** TODO : Paramètres de connexion (à renseigner) ---
$host    = 'localhost';
$port    = '';                 // numéro du port du SGBDR utilisé
$dbname  = '';      		  // nom de la BD sur le SGBDR
$user    = '';               // utilisateur créé pour la connexion (ex: user_personnel)
$pass    = '';               // mot de passe de cet utilisateur
$charset = 'utf8';

// --- Connexion PDO ---
try {
    $conbd = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,  // lève des exceptions en cas d'erreur SQL
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,        // tableaux associatifs par défaut
            PDO::ATTR_EMULATE_PREPARES   => false,                   // requêtes préparées natives (plus sécurisé)
        ]
        );
    return $conbd;    
} catch (PDOException $e) {
     // EN DÉVELOPPEMENT uniquement — à ne jamais laisser en production
     die('<div class="alert alert-danger m-3">
             <strong>Erreur de connexion</strong><br>
             Vérifiez vos paramètres dans la fonction getPdo de fonctionsBD.inc.php<br>
             <small class="text-muted">' . htmlspecialchars($e->getMessage()) . '</small>
          </div>');
    // EN PRODUCTION : Ne PAS afficher le message brut ($e->getMessage() peut contenir le mot de passe)
    // décommenter la ligne suivante qui affiche un message neutre et supprimer le bloc // en développement
    // die('<p class="alert alert-danger m-3">Impossible de se connecter à la base de données. Contactez l\'administrateur.</p>');
}
 }
/**
 * fonction getEmployes()
 * Exécute une requête pour récupérer tous les employés de la BD
 * @return array : tableau associatif des employés
 * @throws PDOException en cas d'erreur de requête
 */
function getEmployes() {
    $employes=array(['Matricule'=>'1','NomEmpl'=>'El Maadani','PrenomEmpl'=>'Mehdi']); // TODO : à remplacer par le résultat de la requête de récupération de tous les employés
    return $employes;
}
?>
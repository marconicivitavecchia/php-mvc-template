# PHP MVC framework

Questo progetto è un fork per gli studenti del Marconi, fork del progetto di [daveh](https://github.com/daveh/php-mvc).

## Istruzioni
Le istruzioni di seguito sono per far funzionare il progetto sul server della scuola. Per indicazioni generiche, far riferimento direttamente al repository del progetto di daveh.
1. Fare un fork di questo progetto (è un progetto template)
1. Lanciare `composer update`; sul server della scuola il comando `composer` è già disponibile
1. Rinominare i file `.htaccess.rename` in `.htaccess` e modificarlo sostituendo al suo interno `nomeutente` con il vostro nome utente con il quale avete fatto l'accesso
1. Eseguire la stessa operazione del punto precedente anche con il file `public/.htaccess`
1. Se tutto è andato a buon fine, dovreste vedere il vostro sito live accedendo direttamente alla cartella del progetto sul server della scuola
1. Creare rotte, controllers, viste e modelli in base alle esigenze

### Connessione al database
Rispetto al progetto originale, che usava PDO, qui usiamo mysqli per connetterci al database locale.

Per impostare i parametri di configurazione per la connessione al db, rinominare `App/Config.php.rename` in `App/Config.php` e modificare le variabili al suo interno.

Per fare delle prove, è presente un file `create_users.sql` per creare una tabella di esempio.

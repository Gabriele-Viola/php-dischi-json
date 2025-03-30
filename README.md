# Album Musicali - Applicazione in PHP

Questa è una piccola applicazione in **PHP** che permette di visualizzare una lista di album musicali e aggiungerne di nuovi. I dati degli album sono gestiti tramite un file **JSON** che funge da "database". L'applicazione permette di visualizzare gli album esistenti e aggiungerne di nuovi tramite un form. Quando un nuovo album viene aggiunto, i dati vengono salvati nel file **JSON**.

## Funzionalità principali

- **Visualizzazione album**: Gli album musicali esistenti vengono caricati e mostrati in una lista.
- **Aggiunta di nuovi album**: Gli utenti possono aggiungere nuovi album tramite un semplice form, inserendo il nome dell'album, l'artista e l'anno di uscita.
- **Salvataggio in JSON**: I dati relativi agli album sono salvati e letti da un file **JSON**. Ogni volta che un nuovo album viene aggiunto, il file viene aggiornato con i nuovi dati.
- **Semplice interfaccia**: L'applicazione utilizza una semplice interfaccia web in HTML per interagire con gli utenti.

## Struttura del progetto

- **index.php**: La pagina principale dove vengono visualizzati gli album musicali e dove gli utenti possono aggiungerne di nuovi.
- **albums.json**: Il file JSON che contiene gli album musicali. Questo file viene letto e aggiornato per ogni nuova aggiunta.
- **functions.php**: Contiene la logica per la lettura e la scrittura del file JSON.


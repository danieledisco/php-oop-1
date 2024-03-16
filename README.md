# php-oop-1

# Descrizione
 Create un file index.php in cui: 
 * è definita una classe ‘Movie’ ed al suo interno:
      * sono dichiarate delle variabili d'istanza
      * è definito un costruttore
      * è definito almeno un metodo
 * vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 
# Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.

# Bonus 2: 
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice
 - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
 - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

# Bonus 3
Giochiamo con i nuovi concetti visti stasera e aggiungiamo nella classe Movie:

 - una proprietá statica che richiamiamo staticamente
 - un metodo 'normale' nel quale usiamo la proprietá statica
 - un metodo statico che chiamiamo staticamente
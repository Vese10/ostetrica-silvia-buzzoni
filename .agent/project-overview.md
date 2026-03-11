# Project Overview

Questo file fornisce una visione di alto livello del progetto web per **Silvia Buzzoni - Ostetrica**. Deve essere consultato dagli agenti IA prima di ogni intervento per comprendere lo scopo e le macro-funzionalità del sistema.

## 🎯 Obiettivo del Progetto
Creare un sito vetrina moderno, informativo e accessibile per un'ostetrica professionista operante nella zona di Ferrara. Il sito non solo descrive i vari servizi erogati in gravidanza, parto, e post-parto, ma cerca anche di posizionarsi organicamente sulle ricerche locali (SEO/GEO) attraverso una struttura mirata e un blog.

## ⚙️ Funzionalità Principali del Sito

1. **Vetrina dei Servizi Offerti**
   - **Gravidanza**: Corsi pre-parto, consulenze personalizzate, acquaticità in gravidanza, visite strutturate.
   - **Parto**: Accompagnamento ospedaliero, parto a casa, preparazione al travaglio.
   - **Post-Parto**: Consulenze sull'allattamento, corsi di svezzamento, acquaticità neonatale.
   - **Salute della donna (Per le donne)**: Pap test e tamponi, riabilitazione e gestione del pavimento pelvico.
   **(Queste funzionalità sono implementate in file .php dedicati nella root per una migliore scansione SEO locale).*

2. **Strumenti Pratici (Utilità Interattive)**
   Sono presenti delle piccole web-app / tool per pazienti o colleghi:
   - **Regolo Ostetrico** (`regolo.php`): Per il calcolo dell'epoca gestazionale e data presunta del parto.
   - **Rilevazione Sinfisi-Fondo** (`rilevazione-sinfisi-fondo.php`): Strumento per il monitoraggio della crescita fetale e dell'utero.
   - **Calcolo Calo Fisiologico** (`calcolo-calo-fisiologico.php`): Calcolatore per monitorare la perdita di peso neonatale nei primi giorni di vita.

3. **Sezione Blog & Articoli**
   Una zona dedicata al content marketing e all'emotional sharing, divisa in due categorie:
   - **Parla l'ostetrica**: Spazio per articoli divulgativi mirati.
   - **Storie di nascita**: Testimonianze dirette delle pazienti (social proof).
   **(Questi contenuti vengono raccolti e mostrati dinamicamente tramite i moduli `articles-info.php` e `articles-nascita.php`).*

4. **Interazione con l'Utente (Contatti)**
   - Un modulo di contatto integrato (PHP + JS) che permette agli utenti di inviare messaggi o prenotare appuntamenti, che vengono poi smistati tramite script `send_mail.php` verso una casella e-mail protetta.

5. **Conformità e Normative**
   - Presentazione di *Privacy Policy* e *Cookie Policy*, con relativo banner per la gestione dei consensi dell'utente tramite il modulo `cookie-banner`.

## 🛠 Modalità di Sviluppo e Tecnologie

Il progetto abbandona l'uso di pesanti CMS (come WordPress) in favore di un architettura basata su **PHP puro**, HTML5 e CSS nativo. 
I layout sono costruiti usando componenti condivisi (in `include/`) per massimizzare la velocità di caricamento delle pagine (fondamentale per gli utenti mobile e per la SEO), mantenendo le risorse statiche ben organizzate all'interno di `assets/`.

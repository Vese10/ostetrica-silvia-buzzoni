# Struttura del Progetto

Di seguito viene presentata l'alberatura del progetto web di **Silvia Buzzoni - Ostetrica**, accompagnata da una descrizione dello scopo dei vari file e directory.

```text
Silvia-Buzzoni/
├── .agent/                    # Configurazioni, workflow e regole per gli agenti IA (inclusi questo file e overview)
├── assets/                    # Risorse statiche globali
│   ├── css/                   # Fogli di stile (es. style.css) principale del sito
│   └── img/                   # Immagini, icone strutturate e ottimizzate (formati jpg, webp, svg) divise per tipologia/viewport
├── blog/                      # Contenuti editoriali divisi in categorie
│   ├── parla-l'ostetrica/     # Articoli informativi redatti dalla professionista
│   └── storie-di-nascita/     # Storie e testimonianze di parto raccontate dalle pazienti
├── components/                # Componenti indipendenti dell'interfaccia utente
│   └── faq/                   # Componenti isolati per le Domande Frequenti (es. faq-visita-gravidanza.php)
├── include/                   # Componenti strutturali condivisi dell'interfaccia utente
│   ├── contact.php            # Sezione per i contatti da includere nelle pagine
│   ├── footer.php             # Piè di pagina globale del sito
│   └── menu.php               # Barra di navigazione (header)
├── modules/                   # Moduli funzionali, script di backend o widget complessi
│   ├── articles-info.php      # Modulo per estrazione/visualizzazione articoli informativi
│   ├── articles-nascita.php   # Modulo per estrazione/visualizzazione storie di nascita
│   ├── contact-form/          # Logica per il modulo di contatto (contact-form.php, JS validation, send_mail.php)
│   └── cookie-banner/         # Componente per la gestione del consenso dei cookie
├── *.php (Root)               # Pagine pubbliche del sito accessibili dall'utente
│   ├── index.php              # La Homepage del sito web
│   ├── faq.php                # Pagina centralizzata delle FAQ
│   ├── [*].php                # Pagine specifiche relative a SERVIZI (es. corso-pre-parto-ferrara.php, post-parto.php)
│   ├── regolo.php, etc.       # Pagine relative a STRUMENTI PRATICI (es. calcolo-calo-fisiologico.php, rilevazione-sinfisi-fondo.php)
│   └── privacy-policy.php     # Pagine relative ad aspetti legali (Cookie Policy, Privacy Policy)
├── robots.txt                 # File per la gestione del crawling da parte dei motori di ricerca
└── sitemap.xml                # Mappa del sito per l'indicizzazione SEO
```

## Descrizione dei Componenti Principali

- **Directory `.agent/`**: Serve come memoria e punto di configurazione per gli LLM (come questa struttura e la overview). Viene consultata per mantenere il contesto delle lavorazioni in corso.
- **Root Files (`*.php`)**: Le pagine principali del sito sono costruite in PHP, in modo da poter includere in modo dinamico porzioni di codice standard (come Header e Footer) per evitare duplicazioni. Troviamo pagine specifiche sia per **servizi** in sede che per **tool** di utilità.
- **Pagine di Servizio (`[servizio].php`)**: Ogni singola pagina nella root racconta in dettaglio un servizio specifico per ottimizzare la SEO locale (es. `corso-pre-parto-ferrara.php`, `riabilitazione-pavimento-pelvico.php`).
- **Directory `components/` e `include/`**: Isolano le componenti riutilizzabili. `include` per elementi strutturali (header, footer), `components` per elementi funzionali di pagina come i blocchi delle singole FAQ.
- **Cartella `modules/`**: Isola le funzionalità più complesse. Ad esempio, la cartella `contact-form/` separa la presentazione del form dalla logica PHP backend di invio dell'email.
- **Cartella `blog/`**: Qui la logica del sito prevede l'organizzazione di diversi testi informativi che l'ostetrica usa per posizionarsi organicamente o condividere storie emozionali.
- **Cartella `assets/`**: Include tutto quello che non è codice o markup (immagini, stili) necessario al rendering della UI. Notevole attenzione è data all'ottimizzazione tramite il formato `.webp`.

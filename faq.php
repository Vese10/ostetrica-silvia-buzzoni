<?php require_once __DIR__ . '/include/config.php'; if (!FAQ_ENABLED) { header('Location: https://ostetricasilviabuzzoni.it/', true, 302); exit; } ?>
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="FAQ - Domande Frequenti | Ostetrica Silvia Buzzoni">
  <meta property="og:description" content="Trova le risposte alle domande più frequenti sui servizi di ostetricia, gravidanza, parto e post-parto a Ferrara offerti dalla D.ssa Silvia Buzzoni.">
  <meta property="og:image" content="https://ostetricasilviabuzzoni.it/assets/img/favicon.webp">
  <meta property="og:url" content="https://ostetricasilviabuzzoni.it/faq">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="it_IT">
  <meta name="description" content="Trova le risposte alle domande più frequenti sui servizi di ostetricia, gravidanza, parto e post-parto a Ferrara offerti dalla D.ssa Silvia Buzzoni.">
  <link rel="canonical" href="https://ostetricasilviabuzzoni.it/faq" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <title>FAQ - Domande Frequenti | Ostetrica Silvia Buzzoni</title>
  <?php include 'modules/cookie-banner/cookie-banner.php'; ?>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1RH0YQGVRW"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-1RH0YQGVRW');
</script>

<body>

  <?php include 'include/menu.php'; ?>

  <div class="container mt-5 mb-5 pt-3">
    <h1 class="mb-5 text-center title">Domande Frequenti (FAQ)</h1>

    <div class="row justify-content-center">
      <div class="col-lg-10 custom-accordion">

        <div class="accordion" id="accordionFaqPage">

          <!-- Categoria: Servizi per la gravidanza -->
          <h2 class="sub-title mt-5 mb-3 text-center">Servizi per la gravidanza</h2>

          <!-- Visita in Gravidanza -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVGOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqVGOne"
                aria-expanded="false" aria-controls="collapseFaqVGOne">
                Quando dovrei prenotare la prima visita in gravidanza?
              </button>
            </h3>
            <div id="collapseFaqVGOne" class="accordion-collapse collapse" aria-labelledby="headingFaqVGOne"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">L'ideale è prenotare la prima visita o colloquio con l'ostetrica intono all'ottava/decima settimana di gravidanza. Questo primo incontro serve per definire assieme il percorso assistenziale adatto, fare un'anamnesi accurata e impostare i primi esami e corretti stili di vita.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVGTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqVGTwo" aria-expanded="false" aria-controls="collapseFaqVGTwo">
                Posso essere seguita solo dall'ostetrica per tutta la gravidanza?
              </button>
            </h3>
            <div id="collapseFaqVGTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqVGTwo"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Sì, le linee guida nazionali indicano che, per gravidanze fisiologiche (ossia a basso rischio e senza complicazioni mediche), l'ostetrica è la figura professionale più adatta per monitorare la salute materno-fetale per tutto il percorso. Farai riferimento al ginecologo per le ecografie di routine (primo trimestre e morfologica).</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVGThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqVGThree" aria-expanded="false" aria-controls="collapseFaqVGThree">
                Cosa si fa materialmente durante una visita ostetrica in gravidanza?
              </button>
            </h3>
            <div id="collapseFaqVGThree" class="accordion-collapse collapse" aria-labelledby="headingFaqVGThree"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Controlliamo i referti medici e misuriamo parametri vitali come la pressione. Inoltre valutiamo la crescita del bimbo/a con la misurazione fondo-sinfisi (dalla 24esima settimana), ascoltiamo il battito cardiaco, e tramite le manovre di Leopold valutiamo manualmente il posizionamento e l'impegno fetale.</p>
              </div>
            </div>
          </div>

          <!-- Consulenza in Gravidanza -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCGOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqCGOne"
                aria-expanded="false" aria-controls="collapseFaqCGOne">
                Qual è la differenza tra visita ostetrica e consulenza?
              </button>
            </h3>
            <div id="collapseFaqCGOne" class="accordion-collapse collapse" aria-labelledby="headingFaqCGOne"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">A differenza di una visita di routine per monitorare clinico e bio-parametri della gravidanza, la consulenza è un'ora interamente dedicata a sviscerare uno specifico dubbio o lavorare su un obiettivo. È un colloquio profondamente informativo ed empatico in cui fare un punto sugli argomenti che più ti premono in un dato momento.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCGTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCGTwo" aria-expanded="false" aria-controls="collapseFaqCGTwo">
                Come posso preparare il mio bacino e il respiro per il parto?
              </button>
            </h3>
            <div id="collapseFaqCGTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqCGTwo"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Durante la consulenza, posso mostrarti posizioni asimmetriche (tramite la biomeccanica del parto) utili sia a far incanalare il bimbo correttamente o favorire un suo rivolgimento a testa in giù, e studiare insieme tecniche di vocalizzazione e respiro utili a gestire l'ondata del travaglio.</p>
              </div>
            </div>
          </div>

          <!-- Acquaticità -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAGOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqAGOne"
                aria-expanded="false" aria-controls="collapseFaqAGOne">
                Devo saper nuotare bene per fare acquaticità?
              </button>
            </h3>
            <div id="collapseFaqAGOne" class="accordion-collapse collapse" aria-labelledby="headingFaqAGOne"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Non è necessario saper nuotare. Stiamo principalmente in zone in cui si tocca sempre il fondo, concentrandoci su movimenti di rilassamento, mobilizzazione e respiro. L'acqua serve a scaricare il peso corporeo per la mamma in attesa, rendendo facili e poco faticosi posizioni utilissime al corpo e al bimbo.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAGTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAGTwo" aria-expanded="false" aria-controls="collapseFaqAGTwo">
                Esiste un abbonamento o pago ad ingressi singoli all'acquaticità?
              </button>
            </h3>
            <div id="collapseFaqAGTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqAGTwo"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Ci sono entrambe le forme. Dopo aver provato la prima volta gratuitamente, è possibile acquistare abbonamenti mensili per una o due frequenze alla settimana presso la piscina Doro, oppure prenotare lezioni ad ingressi singoli.</p>
              </div>
            </div>
          </div>

          <!-- Corso Pre Parto -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCP1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqCP1"
                aria-expanded="false" aria-controls="collapseFaqCP1">
                L'accompagnatore può o deve partecipare a tutti gli incontri del corso pre parto?
              </button>
            </h3>
            <div id="collapseFaqCP1" class="accordion-collapse collapse" aria-labelledby="headingFaqCP1"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Sì, il corso è pensato per la coppia! Tutti e 6 gli incontri permettono la partecipazione attiva del partner (o di una persona di fiducia a te cara). Prepararsi assieme all'evento vi garantisce un maggior sostegno ed informazione per il momento del travaglio, parto e soprattutto post-parto a casa.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCP2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCP2" aria-expanded="false" aria-controls="collapseFaqCP2">
                Quante settimane di gestazione dovrei avere per iniziare il corso pre parto?
              </button>
            </h3>
            <div id="collapseFaqCP2" class="accordion-collapse collapse" aria-labelledby="headingFaqCP2"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Generalmente il percorso inizia verso il terzo trimestre, indicativamente l'ideale è avviarlo tra la 28esima e la 32esima settimana in modo da terminare prima della fine della gravidanza, avendo il tempo di metabolizzare con calma quanto appreso ed arrivare al termine preparati.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCP3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCP3" aria-expanded="false" aria-controls="collapseFaqCP3">
                Quanto dura il percorso pre parto?
              </button>
            </h3>
            <div id="collapseFaqCP3" class="accordion-collapse collapse" aria-labelledby="headingFaqCP3"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Il corso pre parto è composto da un ciclo di 6 incontri in studio, a cadenza settimanale. Ogni incontro ha la durata di 2 ore (solitamente serali).</p>
              </div>
            </div>
          </div>

          <!-- Categoria: Servizi per il travaglio ed il parto -->
          <h2 class="sub-title mt-5 mb-3 text-center">Servizi per il travaglio ed il parto</h2>

          <!-- Accompagnamento in Sala Parto -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAcc1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqAcc1"
                aria-expanded="false" aria-controls="collapseFaqAcc1">
                Perché scegliere l'accompagnamento in sala parto?
              </button>
            </h3>
            <div id="collapseFaqAcc1" class="accordion-collapse collapse" aria-labelledby="headingFaqAcc1"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">L'accompagnamento garantisce la continuità assistenziale: la stessa ostetrica che ti ha seguita in gravidanza ti supporterà emotivamente e fisicamente durante il travaglio a casa e, successivamente, al momento del parto in ospedale, offrendoti una figura di riferimento costante e di fiducia in ogni momento cruciale.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAcc2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAcc2" aria-expanded="false" aria-controls="collapseFaqAcc2">
                Come funziona l'assistenza al momento del travaglio?
              </button>
            </h3>
            <div id="collapseFaqAcc2" class="accordion-collapse collapse" aria-labelledby="headingFaqAcc2"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">A partire dalla 37esima settimana è prevista una reperibilità H24. Ai primi prodromi, potrai chiamare l'ostetrica che valuterà la situazione direttamente a casa tua. Trascorreremo in intimità e sicurezza gran parte del travaglio a domicilio e ci sposteremo assieme nel punto nascita prescelto solo nel momento di travaglio attivo.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAcc3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAcc3" aria-expanded="false" aria-controls="collapseFaqAcc3">
                Cosa succede dopo il parto in ospedale?
              </button>
            </h3>
            <div id="collapseFaqAcc3" class="accordion-collapse collapse" aria-labelledby="headingFaqAcc3"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Resterò con te e la tua famiglia per alcune ore in seguito al parto. Il mio obiettivo principale è assicurarmi che mamma e neonato stiano bene, favorire il contatto pelle a pelle e assistervi nel primo, fondamentale, attacco precoce al seno.</p>
              </div>
            </div>
          </div>

          <!-- Parto a Casa -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPC1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqPC1"
                aria-expanded="false" aria-controls="collapseFaqPC1">
                Quali sono i requisiti di sicurezza per partorire a casa?
              </button>
            </h3>
            <div id="collapseFaqPC1" class="accordion-collapse collapse" aria-labelledby="headingFaqPC1"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Il parto a casa è un'opzione estremamente sicura solo se sono soddisfatti alcuni requisiti clinici e logistici stabiliti dalle evidenze internazionali: gravidanza fisiologica e senza complicanze, un solo bambino in presentazione cefalica giunto a termine della gravidanza (37-42 settimane), assistenza di due ostetriche preparate, e una distanza dal punto nascita/ospedale più vicino non superiore ai 30 minuti.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPC2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqPC2" aria-expanded="false" aria-controls="collapseFaqPC2">
                È previsto un rimborso economico per il parto in casa?
              </button>
            </h3>
            <div id="collapseFaqPC2" class="accordion-collapse collapse" aria-labelledby="headingFaqPC2"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Sì, la regione Emilia Romagna supporta la libera scelta del luogo del parto con un parziale rimborso delle spese sostenute. Per ottenerlo, occorre comunicare all'AUSL di appartenenza (entro le 32 settimane) l'intenzione di avvalersi dell'assistenza ostetrica e del pediatra in ambito domiciliare o in casa maternità.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPC3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqPC3" aria-expanded="false" aria-controls="collapseFaqPC3">
                Come viene gestita l'emergenza in caso di necessità durante un parto a domicilio?
              </button>
            </h3>
            <div id="collapseFaqPC3" class="accordion-collapse collapse" aria-labelledby="headingFaqPC3"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Le ostetriche sono ampiamente formate nella gestione delle emergenze ostetriche e neonatali di primo intervento. Inoltre, come prescritto dal protocollo sanitario, al momento della diagnosi di travaglio attivo il 118 viene pre-allertato rendendo sempre disponibile un trasferimento tempestivo presso l'ospedale di riferimento in caso le condizioni fisiologiche ottimali vengano a mancare.</p>
              </div>
            </div>
          </div>



          <!-- Categoria: Servizi nel post parto -->
          <h2 class="sub-title mt-5 mb-3 text-center">Servizi nel post parto</h2>

          <!-- Consulenza Allattamento -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCA1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqCA1"
                aria-expanded="false" aria-controls="collapseFaqCA1">
                In quali casi è utile richiedere una consulenza per l'allattamento?
              </button>
            </h3>
            <div id="collapseFaqCA1" class="accordion-collapse collapse" aria-labelledby="headingFaqCA1"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">La consulenza è fondamentale se provi dolore durante l'attacco o la poppata, se affronti la comparsa di ragadi, ingorghi, mastiti, o se hai difficoltà a gestire la montata lattea e l'utilizzo di paracapezzoli/aggiunte. L'obiettivo è ripartire da chiare indicazioni professionali evitando i "falsi miti".</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCA2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCA2" aria-expanded="false" aria-controls="collapseFaqCA2">
                Dove si svolge la consulenza sull'allattamento?
              </button>
            </h3>
            <div id="collapseFaqCA2" class="accordion-collapse collapse" aria-labelledby="headingFaqCA2"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">La consulenza può svolgersi comodamente a domicilio, nel tuo ambiente domestico dove ti senti più a tuo agio, oppure in studio. Osserveremo insieme una poppata per valutarne le caratteristiche e capire dove e come intervenire attivamente.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCA3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCA3" aria-expanded="false" aria-controls="collapseFaqCA3">
                L'ostetrica può aiutarmi anche se voglio solo prolungare serenamente l'allattamento?
              </button>
            </h3>
            <div id="collapseFaqCA3" class="accordion-collapse collapse" aria-labelledby="headingFaqCA3"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Assolutamente sì. Il mio ruolo non è solo risolvere i problemi imminenti, ma anche fornire un supporto emotivo e pratico che ti aiuti a vivere l'esperienza in modo sereno e consapevole, prolungandola felicemente con il tuo bimbo/a fino a quando entrambi lo desidererete.</p>
              </div>
            </div>
          </div>

          <!-- Visita Post Parto -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVPP1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqVPP1"
                aria-expanded="false" aria-controls="collapseFaqVPP1">
                Di cosa ci occupiamo durante la visita a domicilio nel post-parto?
              </button>
            </h3>
            <div id="collapseFaqVPP1" class="accordion-collapse collapse" aria-labelledby="headingFaqVPP1"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">L'ostetrica valuta a 360 gradi il benessere della neomamma e del neonato durante il puerperio. Si offrono consigli sulla gestione del piccolo, si chiarificano dubbi pratici e si assicura un riposo e un recupero fisico e mentale ottimale per i primi, delicati, mesi di vita.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVPP2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqVPP2" aria-expanded="false" aria-controls="collapseFaqVPP2">
                L'ostetrica controlla anche eventuali punti di sutura o cicatrici?
              </button>
            </h3>
            <div id="collapseFaqVPP2" class="accordion-collapse collapse" aria-labelledby="headingFaqVPP2"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Certamente. Durante la visita mi dedico agli aspetti fisici legati alla cura della mamma: controllo il fisiologico decorso del puerperio e mi occupo, se necessario, di rimuovere in totale sicurezza i punti perineali, controllando la corretta guarigione.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVPP3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqVPP3" aria-expanded="false" aria-controls="collapseFaqVPP3">
                Parliamo solo degli aspetti fisici o anche di quelli emotivi?
              </button>
            </h3>
            <div id="collapseFaqVPP3" class="accordion-collapse collapse" aria-labelledby="headingFaqVPP3"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Do grande importanza all'ascolto di entrambe le sfere. Valutare il benessere psicologico e il carico emotivo, parlando di baby blues o di altre comuni sfide legate al drastico cambiamento di vita, è parte integrante del supporto personalizzato di questa visita.</p>
              </div>
            </div>
          </div>

          <!-- Acquaticità Neonatale -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAN1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqAN1"
                aria-expanded="false" aria-controls="collapseFaqAN1">
                Da che età il mio bambino può iniziare il corso di acquaticità?
              </button>
            </h3>
            <div id="collapseFaqAN1" class="accordion-collapse collapse" aria-labelledby="headingFaqAN1"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Gli incontri di acquaticità neonatale sono dolci, sicuri e pensati specificamente per lo sviluppo psicomotorio dei più piccoli. Il percorso è adatto e aperto per tutti i neonati a partire dai 3 mesi di vita in su.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAN2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAN2" aria-expanded="false" aria-controls="collapseFaqAN2">
                Cosa serve portare in piscina per me e per il mio bimbo?
              </button>
            </h3>
            <div id="collapseFaqAN2" class="accordion-collapse collapse" aria-labelledby="headingFaqAN2"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Per il tuo bambino è sufficiente procurarsi un pannolino specifico adatto all'uso in acqua. Per i genitori (che accompagnano in acqua il neonato e partecipano all'attività) servono semplicemente costume, cuffia per capelli e ciabattine antiscivolo.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAN3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAN3" aria-expanded="false" aria-controls="collapseFaqAN3">
                Dove e quando si tengono le lezioni di acquaticità neonatale?
              </button>
            </h3>
            <div id="collapseFaqAN3" class="accordion-collapse collapse" aria-labelledby="headingFaqAN3"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Il corso neonatale si svolge tutti i venerdì pomeriggio, precisamente dalle 17:00 alle 17:45, presso i locali della Piscina / Polisportiva Doro di Ferrara. Sono disponibili ingressi singoli opure pacchetti da 5 ingressi (con validità di tesseramento annuale).</p>
              </div>
            </div>
          </div>

          <!-- Corso Svezzamento -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCS1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqCS1"
                aria-expanded="false" aria-controls="collapseFaqCS1">
                A chi è rivolto il corso di gruppo sullo svezzamento?
              </button>
            </h3>
            <div id="collapseFaqCS1" class="accordion-collapse collapse" aria-labelledby="headingFaqCS1"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Il corso interattivo è pensato per tutte le famiglie che vogliono affrontare preparate e serene il delicato e fisiologico passaggio dall'allattamento esclusivo all'alimentazione complementare con i nuovi sapori sulla tavola.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCS2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCS2" aria-expanded="false" aria-controls="collapseFaqCS2">
                Che differenza c'è tra lo svezzamento tradizionale e l'autosvezzamento?
              </button>
            </h3>
            <div id="collapseFaqCS2" class="accordion-collapse collapse" aria-labelledby="headingFaqCS2"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Insieme ad una dietista specializzata (D.ssa Chiara Carpanelli) affronteremo questa ed altre differenze pratiche per aiutarvi a capire e scegliere l'approccio nutrizionale e le consistenze giuste più affini per il vostro bambino al momento di sedersi a tavola.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCS3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCS3" aria-expanded="false" aria-controls="collapseFaqCS3">
                Il corso prevede anche manovre pratiche o disostruzione?
              </button>
            </h3>
            <div id="collapseFaqCS3" class="accordion-collapse collapse" aria-labelledby="headingFaqCS3"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Sì! È un incontro fortemente pratico. È prevista un'esercitazione pratica a piccoli gruppi per imparare a fare tagli sicuri degli alimenti ed una sezione dedicata ad imparare le fondamentali e corrette manovre salvavita di disostruzione delle vie aeree pediatriche.</p>
              </div>
            </div>
          </div>


          <!-- Categoria: Servizi in tutte le fasi di vita della donna -->
          <h2 class="sub-title mt-5 mb-3 text-center">Servizi in tutte le fasi di vita della donna</h2>

          <!-- Pavimento Pelvico in Gravidanza -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPPGOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqPPGOne"
                aria-expanded="false" aria-controls="collapseFaqPPGOne">
                Perché è importante lo stretching perineale?
              </button>
            </h3>
            <div id="collapseFaqPPGOne" class="accordion-collapse collapse" aria-labelledby="headingFaqPPGOne"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Lo stretching, unito a una buona valutazione, serve ad aumentare l’elasticità dei tessuti perineali, diminuendo profondamente il rischio di lacerazioni spontanee importanti o la necessità di eseguire un'episiotomia durante la fase espulsiva del parto.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPPGTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqPPGTwo" aria-expanded="false" aria-controls="collapseFaqPPGTwo">
                A quante settimane si svolgono le valutazioni del pavimento pelvico in gravidanza?
              </button>
            </h3>
            <div id="collapseFaqPPGTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqPPGTwo"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Le linee guida raccomandano due visite. La prima avviene di solito nel corso del secondo trimestre (circa a metà percorso), per fotografare lo stato di partenza e dare i primi esercizi. La rivalutazione si fa nel terzo trimestre, in prossimità del parto (es. tra la 32esima e la 36esima settimana).</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingPgNew1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePgNew1" aria-expanded="false" aria-controls="collapsePgNew1">
                Cosa comprende la riabilitazione del pavimento pelvico?
              </button>
            </h3>
            <div id="collapsePgNew1" class="accordion-collapse collapse" aria-labelledby="headingPgNew1" data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Consiste in una valutazione perineale ed un percorso personalizzato per prevenire e trattare disfunzioni, dolori o prolassi, dalla pubertà alla menopausa, per farti riscoprire il tuo benessere e potenziale femminile.</p>
              </div>
            </div>
          </div>

          <!-- Riabilitazione Pavimento Pelvico -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqRP1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqRP1"
                aria-expanded="false" aria-controls="collapseFaqRP1">
                A cosa serve e come si svolge la prima valutazione del pavimento pelvico?
              </button>
            </h3>
            <div id="collapseFaqRP1" class="accordion-collapse collapse" aria-labelledby="headingFaqRP1"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">La prima valutazione serve a scattare una fotografia dello stato di salute del tuo perineo. Prevede un'anamnesi dettagliata e una visita delicata (eseguita senza alcun utilizzo dello speculum). In base a ciò che emerge, definiremo insieme un piano riabilitativo totalmente personalizzato.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqRP2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqRP2" aria-expanded="false" aria-controls="collapseFaqRP2">
                Quali sono i sintomi che dovrebbero spingermi a prenotare una valutazione?
              </button>
            </h3>
            <div id="collapseFaqRP2" class="accordion-collapse collapse" aria-labelledby="headingFaqRP2"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Ogni donna dovrebbe fare una valutazione almeno una volta nella vita. È particolarmente raccomandata se soffri di incontinenza (urinaria o fecale), dolore durante i rapporti, cistiti e vaginiti ricorrenti, dolori mestruali, prolasso, o se hai partorito da poco e presenti cicatrici perineali.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqRP3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqRP3" aria-expanded="false" aria-controls="collapseFaqRP3">
                Cosa è previsto durante le eventuali visite di follow-up?
              </button>
            </h3>
            <div id="collapseFaqRP3" class="accordion-collapse collapse" aria-labelledby="headingFaqRP3"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Le sedute di follow-up sono fondamentali per monitorare i progressi raggiunti con gli esercizi (assegnati da fare a domicilio) e le tecniche manuali. Verificheremo insieme i miglioramenti, adattando costantemente il piano terapeutico per risolvere il problema nel modo più efficace possibile.</p>
              </div>
            </div>
          </div>

          <!-- Pap Test e Tamponi -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPT1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqPT1"
                aria-expanded="false" aria-controls="collapseFaqPT1">
                L'ostetrica può eseguire Pap Test e tamponi in ambulatorio?
              </button>
            </h3>
            <div id="collapseFaqPT1" class="accordion-collapse collapse" aria-labelledby="headingFaqPT1"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Assolutamente sì. L'ostetrica è la figura professionale totalmente competente e formata per l'esecuzione di prestazioni sanitarie e ambulatoriali di routine, come i Pap test e i vari tamponi vaginali e cervico-vaginali.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPT2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqPT2" aria-expanded="false" aria-controls="collapseFaqPT2">
                Serve la prescrizione medica per fare il Pap test o un tampone con l'ostetrica?
              </button>
            </h3>
            <div id="collapseFaqPT2" class="accordion-collapse collapse" aria-labelledby="headingFaqPT2"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">No, non c'è alcun bisogno di presentare la classica prescrizione medica ("impegnativa") o di passare prima dal ginecologo. Puoi prenotare autonomamente il tuo appuntamento per l'esecuzione di questi esami.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPT3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqPT3" aria-expanded="false" aria-controls="collapseFaqPT3">
                Come posso prenotare l'esame?
              </button>
            </h3>
            <div id="collapseFaqPT3" class="accordion-collapse collapse" aria-labelledby="headingFaqPT3"
              data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Puoi prenotare facilmente e in autonomia scegliendo il giorno e l'orario che preferisci direttamente dal portale di prenotazione online, cliccando sul bottone "Prenota visita" presente sulla pagina del servizio, oppure contattandomi via WhatsApp.</p>
              </div>
            </div>
          </div>


          <!-- Categoria: Pratiche Generali -->
          <h2 class="sub-title mt-5 mb-3 text-center">Informazioni Generali</h2>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingPgSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePgSix" aria-expanded="false" aria-controls="collapsePgSix">
                In quali zone offri assistenza domiciliare?
              </button>
            </h3>
            <div id="collapsePgSix" class="accordion-collapse collapse" aria-labelledby="headingPgSix" data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Lavoro principalmente su Ferrara e provincia. Per distanze particolari, contattami per valutare insieme la fattibilità in base al servizio richiesto (ad esempio per l'assistenza al parto esistono distanze di sicurezza da rispettare).</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingPgNew2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePgNew2" aria-expanded="false" aria-controls="collapsePgNew2">
                Come posso prenotare una consulenza o una visita?
              </button>
            </h3>
            <div id="collapsePgNew2" class="accordion-collapse collapse" aria-labelledby="headingPgNew2" data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Puoi prenotare un appuntamento contattandomi direttamente tramite il modulo contatti a fondo pagina, oppure chiamandomi. Sarò io a ricontattarti per fissare il giorno e l'orario perfetti sia per te che per me.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header" id="headingPgNew3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePgNew3" aria-expanded="false" aria-controls="collapsePgNew3">
                È possibile essere seguita dalla stessa ostetrica in tutto il percorso?
              </button>
            </h3>
            <div id="collapsePgNew3" class="accordion-collapse collapse" aria-labelledby="headingPgNew3" data-bs-parent="#accordionFaqPage">
              <div class="accordion-body">
                <p class="text">Assolutamente sì. La continuità assistenziale è il fulcro del mio lavoro: posso seguirti durante la gravidanza, assisterti accompagnandoti in sala parto (o a casa) e supportarti nel post parto con l'allattamento e lo svezzamento.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <?php include 'include/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="assets/js/nav-drop-down.js"></script>
  <script src="assets/js/scrollToSection.js"></script>
</body>

</html>
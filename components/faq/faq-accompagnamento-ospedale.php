<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqAccomp">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAcc1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqAcc1"
                aria-expanded="false" aria-controls="collapseFaqAcc1">
                Perché scegliere l'accompagnamento in sala parto?
              </button>
            </h3>
            <div id="collapseFaqAcc1" class="accordion-collapse collapse" aria-labelledby="headingFaqAcc1"
              data-bs-parent="#accordionFaqAccomp">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">L'accompagnamento garantisce la continuità assistenziale: la stessa ostetrica che ti ha seguita in gravidanza ti supporterà emotivamente e fisicamente durante il travaglio a casa e, successivamente, al momento del parto in ospedale, offrendoti una figura di riferimento costante e di fiducia in ogni momento cruciale.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAcc2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAcc2" aria-expanded="false" aria-controls="collapseFaqAcc2">
                Come funziona l'assistenza al momento del travaglio?
              </button>
            </h3>
            <div id="collapseFaqAcc2" class="accordion-collapse collapse" aria-labelledby="headingFaqAcc2"
              data-bs-parent="#accordionFaqAccomp">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">A partire dalla 37esima settimana è prevista una reperibilità H24. Ai primi prodromi, potrai chiamare l'ostetrica che valuterà la situazione direttamente a casa tua. Trascorreremo in intimità e sicurezza gran parte del travaglio a domicilio e ci sposteremo assieme nel punto nascita prescelto solo nel momento di travaglio attivo.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAcc3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAcc3" aria-expanded="false" aria-controls="collapseFaqAcc3">
                Cosa succede dopo il parto in ospedale?
              </button>
            </h3>
            <div id="collapseFaqAcc3" class="accordion-collapse collapse" aria-labelledby="headingFaqAcc3"
              data-bs-parent="#accordionFaqAccomp">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Resterò con te e la tua famiglia per alcune ore in seguito al parto. Il mio obiettivo principale è assicurarmi che mamma e neonato stiano bene, favorire il contatto pelle a pelle e assistervi nel primo, fondamentale, attacco precoce al seno.</p>
              </div>
            </div>
          </div>

        </div>
        <div class="mt-4 text-center">
          <a href="https://ostetricasilviabuzzoni.it/faq" class="btn bg-light btn-servizi">Leggi tutte le FAQ</a>
        </div>
      </div>
    </div>
  </div>
</section>
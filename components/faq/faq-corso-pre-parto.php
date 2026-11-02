<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqCorsoPreParto">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCP1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqCP1"
                aria-expanded="false" aria-controls="collapseFaqCP1">
                L'accompagnatore può o deve partecipare a tutti gli incontri?
              </button>
            </h3>
            <div id="collapseFaqCP1" class="accordion-collapse collapse" aria-labelledby="headingFaqCP1"
              data-bs-parent="#accordionFaqCorsoPreParto">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Sì, il corso è pensato per la coppia! Tutti e 6 gli incontri permettono la partecipazione attiva del partner (o di una persona di fiducia a te cara). Prepararsi assieme all'evento vi garantisce un maggior sostegno ed informazione per il momento del travaglio, parto e soprattutto post-parto a casa.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCP2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCP2" aria-expanded="false" aria-controls="collapseFaqCP2">
                Quante settimane di gestazione dovrei avere per iniziare il corso?
              </button>
            </h3>
            <div id="collapseFaqCP2" class="accordion-collapse collapse" aria-labelledby="headingFaqCP2"
              data-bs-parent="#accordionFaqCorsoPreParto">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Generalmente il percorso inizia verso il terzo trimestre, indicativamente l'ideale è avviarlo tra la 28esima e la 32esima settimana in modo da terminare prima della fine della gravidanza, avendo il tempo di metabolizzare con calma quanto appreso ed arrivare al termine preparati.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCP3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCP3" aria-expanded="false" aria-controls="collapseFaqCP3">
                Quanto dura il percorso?
              </button>
            </h3>
            <div id="collapseFaqCP3" class="accordion-collapse collapse" aria-labelledby="headingFaqCP3"
              data-bs-parent="#accordionFaqCorsoPreParto">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Il corso pre parto è composto da un ciclo di 6 incontri in studio, a cadenza settimanale. Ogni incontro ha la durata di 2 ore (solitamente serali).</p>
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
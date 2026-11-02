<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqPartoCasa">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPC1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqPC1"
                aria-expanded="false" aria-controls="collapseFaqPC1">
                Quali sono i requisiti di sicurezza per partorire a casa?
              </button>
            </h3>
            <div id="collapseFaqPC1" class="accordion-collapse collapse" aria-labelledby="headingFaqPC1"
              data-bs-parent="#accordionFaqPartoCasa">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Il parto a casa è un'opzione estremamente sicura solo se sono soddisfatti alcuni requisiti clinici e logistici stabiliti dalle evidenze internazionali: gravidanza fisiologica e senza complicanze, un solo bambino in presentazione cefalica giunto a termine della gravidanza (37-42 settimane), assistenza di due ostetriche preparate, e una distanza dal punto nascita/ospedale più vicino non superiore ai 30 minuti.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPC2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqPC2" aria-expanded="false" aria-controls="collapseFaqPC2">
                È previsto un rimborso economico per il parto in casa?
              </button>
            </h3>
            <div id="collapseFaqPC2" class="accordion-collapse collapse" aria-labelledby="headingFaqPC2"
              data-bs-parent="#accordionFaqPartoCasa">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Sì, la regione Emilia Romagna supporta la libera scelta del luogo del parto con un parziale rimborso delle spese sostenute. Per ottenerlo, occorre comunicare all'AUSL di appartenenza (entro le 32 settimane) l'intenzione di avvalersi dell'assistenza ostetrica e del pediatra in ambito domiciliare o in casa maternità.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPC3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqPC3" aria-expanded="false" aria-controls="collapseFaqPC3">
                Come viene gestita l'emergenza in caso di necessità durante un parto a domicilio?
              </button>
            </h3>
            <div id="collapseFaqPC3" class="accordion-collapse collapse" aria-labelledby="headingFaqPC3"
              data-bs-parent="#accordionFaqPartoCasa">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Le ostetriche sono ampiamente formate nella gestione delle emergenze ostetriche e neonatali di primo intervento. Inoltre, come prescritto dal protocollo sanitario, al momento della diagnosi di travaglio attivo il 118 viene pre-allertato rendendo sempre disponibile un trasferimento tempestivo presso l'ospedale di riferimento in caso le condizioni fisiologiche ottimali vengano a mancare.</p>
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
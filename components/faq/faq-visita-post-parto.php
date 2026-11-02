<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqVisitaPostParto">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVPP1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqVPP1"
                aria-expanded="false" aria-controls="collapseFaqVPP1">
                Di cosa ci occupiamo durante la visita a domicilio nel post-parto?
              </button>
            </h3>
            <div id="collapseFaqVPP1" class="accordion-collapse collapse" aria-labelledby="headingFaqVPP1"
              data-bs-parent="#accordionFaqVisitaPostParto">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">L'ostetrica valuta a 360 gradi il benessere della neomamma e del neonato durante il puerperio. Si offrono consigli sulla gestione del piccolo, si chiarificano dubbi pratici e si assicura un riposo e un recupero fisico e mentale ottimale per i primi, delicati, mesi di vita.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVPP2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqVPP2" aria-expanded="false" aria-controls="collapseFaqVPP2">
                L'ostetrica controlla anche eventuali punti di sutura o cicatrici?
              </button>
            </h3>
            <div id="collapseFaqVPP2" class="accordion-collapse collapse" aria-labelledby="headingFaqVPP2"
              data-bs-parent="#accordionFaqVisitaPostParto">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Certamente. Durante la visita mi dedico agli aspetti fisici legati alla cura della mamma: controllo il fisiologico decorso del puerperio e mi occupo, se necessario, di rimuovere in totale sicurezza i punti perineali, controllando la corretta guarigione.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVPP3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqVPP3" aria-expanded="false" aria-controls="collapseFaqVPP3">
                Parliamo solo degli aspetti fisici o anche di quelli emotivi?
              </button>
            </h3>
            <div id="collapseFaqVPP3" class="accordion-collapse collapse" aria-labelledby="headingFaqVPP3"
              data-bs-parent="#accordionFaqVisitaPostParto">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Do grande importanza all'ascolto di entrambe le sfere. Valutare il benessere psicologico e il carico emotivo, parlando di baby blues o di altre comuni sfide legate al drastico cambiamento di vita, è parte integrante del supporto personalizzato di questa visita.</p>
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
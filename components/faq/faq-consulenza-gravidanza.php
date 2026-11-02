<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqConsGrav">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCGOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqCGOne"
                aria-expanded="false" aria-controls="collapseFaqCGOne">
                Qual è la differenza tra visita ostetrica e consulenza?
              </button>
            </h3>
            <div id="collapseFaqCGOne" class="accordion-collapse collapse" aria-labelledby="headingFaqCGOne"
              data-bs-parent="#accordionFaqConsGrav">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">A differenza di una visita di routine per monitorare clinico e bio-parametri della gravidanza, la consulenza è un'ora interamente dedicata a sviscerare uno specifico dubbio o lavorare su un obiettivo. È un colloquio profondamente informativo ed empatico in cui fare un punto sugli argomenti che più ti premono in un dato momento.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCGTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCGTwo" aria-expanded="false" aria-controls="collapseFaqCGTwo">
                Come posso preparare il mio bacino e il respiro per il parto?
              </button>
            </h3>
            <div id="collapseFaqCGTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqCGTwo"
              data-bs-parent="#accordionFaqConsGrav">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Durante la consulenza, posso mostrarti posizioni asimmetriche (tramite la biomeccanica del parto) utili sia a far incanalare il bimbo correttamente o favorire un suo rivolgimento a testa in giù, e studiare insieme tecniche di vocalizzazione e respiro utili a gestire l'ondata del travaglio.</p>
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
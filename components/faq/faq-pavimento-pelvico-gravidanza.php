<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqPPGrav">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPPGOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqPPGOne"
                aria-expanded="false" aria-controls="collapseFaqPPGOne">
                Perché è importante lo stretching perineale?
              </button>
            </h3>
            <div id="collapseFaqPPGOne" class="accordion-collapse collapse" aria-labelledby="headingFaqPPGOne"
              data-bs-parent="#accordionFaqPPGrav">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Lo stretching, unito a una buona valutazione, serve ad aumentare l’elasticità dei tessuti perineali, diminuendo profondamente il rischio di lacerazioni spontanee importanti o la necessità di eseguire un'episiotomia durante la fase espulsiva del parto.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqPPGTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqPPGTwo" aria-expanded="false" aria-controls="collapseFaqPPGTwo">
                A quante settimane si svolgono le valutazioni in gravidanza?
              </button>
            </h3>
            <div id="collapseFaqPPGTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqPPGTwo"
              data-bs-parent="#accordionFaqPPGrav">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Le linee guida raccomandano due visite. La prima avviene di solito nel corso del secondo trimestre (circa a metà percorso), per fotografare lo stato di partenza e dare i primi esercizi. La rivalutazione si fa nel terzo trimestre, in prossimità del parto (es. tra la 32esima e la 36esima settimana).</p>
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
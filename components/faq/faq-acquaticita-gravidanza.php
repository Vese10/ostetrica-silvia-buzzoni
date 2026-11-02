<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqAcqGrav">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAGOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqAGOne"
                aria-expanded="false" aria-controls="collapseFaqAGOne">
                Devo saper nuotare bene per fare acquaticità?
              </button>
            </h3>
            <div id="collapseFaqAGOne" class="accordion-collapse collapse" aria-labelledby="headingFaqAGOne"
              data-bs-parent="#accordionFaqAcqGrav">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Non è necessario saper nuotare. Stiamo principalmente in zone in cui si tocca sempre il fondo, concentrandoci su movimenti di rilassamento, mobilizzazione e respiro. L'acqua serve a scaricare il peso corporeo per la mamma in attesa, rendendo facili e poco faticosi posizioni utilissime al corpo e al bimbo.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAGTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAGTwo" aria-expanded="false" aria-controls="collapseFaqAGTwo">
                Esiste un abbonamento o pago ad ingressi singoli?
              </button>
            </h3>
            <div id="collapseFaqAGTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqAGTwo"
              data-bs-parent="#accordionFaqAcqGrav">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Ci sono entrambe le forme. Dopo aver provato la prima volta gratuitamente, è possibile acquistare abbonamenti mensili per una o due frequenze alla settimana presso la piscina Doro, oppure prenotare lezioni ad ingressi singoli.</p>
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
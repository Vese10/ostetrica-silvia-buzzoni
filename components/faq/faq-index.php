<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 second-section" id="faq-section">
  <h2 class="title mt-lg-0 mt-5">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqIndex">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqOne"
                aria-expanded="false" aria-controls="collapseFaqOne">
                In quali zone offri assistenza domiciliare?
              </button>
            </h3>
            <div id="collapseFaqOne" class="accordion-collapse collapse" aria-labelledby="headingFaqOne"
              data-bs-parent="#accordionFaqIndex">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Offro assistenza domiciliare a Ferrara e provincia, sia per i travagli a domicilio che per le visite in gravidanza e i consulti sull'allattamento post-parto. Accogliere la tua ostetrica a casa è il modo migliore per vivere i primi giorni dopo il parto.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqTwo" aria-expanded="false" aria-controls="collapseFaqTwo">
                Come posso prenotare una consulenza o una visita?
              </button>
            </h3>
            <div id="collapseFaqTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqTwo"
              data-bs-parent="#accordionFaqIndex">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Puoi prenotare un appuntamento contattandomi direttamente tramite il modulo contatti a fondo pagina, oppure chiamandomi. Sarò io a ricontattarti per fissare il giorno e l'orario perfetti sia per te che per me.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqThree" aria-expanded="false" aria-controls="collapseFaqThree">
                Cosa comprende la riabilitazione del pavimento pelvico?
              </button>
            </h3>
            <div id="collapseFaqThree" class="accordion-collapse collapse" aria-labelledby="headingFaqThree"
              data-bs-parent="#accordionFaqIndex">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Consiste in una valutazione perineale ed un percorso personalizzato per prevenire e trattare disfunzioni, dolori o prolassi, dalla pubertà alla menopausa, per farti riscoprire il tuo benessere e potenziale femminile.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqFour" aria-expanded="false" aria-controls="collapseFaqFour">
                È possibile essere seguita dalla stessa ostetrica in tutto il percorso?
              </button>
            </h3>
            <div id="collapseFaqFour" class="accordion-collapse collapse" aria-labelledby="headingFaqFour"
              data-bs-parent="#accordionFaqIndex">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Assolutamente sì. La continuità assistenziale è il fulcro del mio lavoro: posso seguirti durante la gravidanza, assisterti accompagnandoti in sala parto (o a casa) e supportarti nel post parto con l'allattamento e lo svezzamento.</p>
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
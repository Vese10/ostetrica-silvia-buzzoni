<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqCorsoSvezzamento">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCS1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqCS1"
                aria-expanded="false" aria-controls="collapseFaqCS1">
                A chi è rivolto il corso di gruppo sullo svezzamento?
              </button>
            </h3>
            <div id="collapseFaqCS1" class="accordion-collapse collapse" aria-labelledby="headingFaqCS1"
              data-bs-parent="#accordionFaqCorsoSvezzamento">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Il corso interattivo è pensato per tutte le famiglie che vogliono affrontare preparate e serene il delicato e fisiologico passaggio dall'allattamento esclusivo all'alimentazione complementare con i nuovi sapori sulla tavola.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCS2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCS2" aria-expanded="false" aria-controls="collapseFaqCS2">
                Che differenza c'è tra lo svezzamento tradizionale e l'autosvezzamento?
              </button>
            </h3>
            <div id="collapseFaqCS2" class="accordion-collapse collapse" aria-labelledby="headingFaqCS2"
              data-bs-parent="#accordionFaqCorsoSvezzamento">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Insieme ad una dietista specializzata (D.ssa Chiara Carpanelli) affronteremo questa ed altre differenze pratiche per aiutarvi a capire e scegliere l'approccio nutrizionale e le consistenze giuste più affini per il vostro bambino al momento di sedersi a tavola.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqCS3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqCS3" aria-expanded="false" aria-controls="collapseFaqCS3">
                Il corso prevede anche manovre pratiche o disostruzione?
              </button>
            </h3>
            <div id="collapseFaqCS3" class="accordion-collapse collapse" aria-labelledby="headingFaqCS3"
              data-bs-parent="#accordionFaqCorsoSvezzamento">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Sì! È un incontro fortemente pratico. È prevista un'esercitazione pratica a piccoli gruppi per imparare a fare tagli sicuri degli alimenti ed una sezione dedicata ad imparare le fondamentali e corrette manovre salvavita di disostruzione delle vie aeree pediatriche.</p>
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
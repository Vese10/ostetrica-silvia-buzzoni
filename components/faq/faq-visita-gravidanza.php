<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqVisitaGrav">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVGOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqVGOne"
                aria-expanded="false" aria-controls="collapseFaqVGOne">
                Quando dovrei prenotare la prima visita in gravidanza?
              </button>
            </h3>
            <div id="collapseFaqVGOne" class="accordion-collapse collapse" aria-labelledby="headingFaqVGOne"
              data-bs-parent="#accordionFaqVisitaGrav">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">L'ideale è prenotare la prima visita o colloquio con l'ostetrica intono all'ottava/decima settimana di gravidanza. Questo primo incontro serve per definire assieme il percorso assistenziale adatto, fare un'anamnesi accurata e impostare i primi esami e corretti stili di vita.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVGTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqVGTwo" aria-expanded="false" aria-controls="collapseFaqVGTwo">
                Posso essere seguita solo dall'ostetrica per tutta la gravidanza?
              </button>
            </h3>
            <div id="collapseFaqVGTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqVGTwo"
              data-bs-parent="#accordionFaqVisitaGrav">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Sì, le linee guida nazionali indicano che, per gravidanze fisiologiche (ossia a basso rischio e senza complicazioni mediche), l'ostetrica è la figura professionale più adatta per monitorare la salute materno-fetale per tutto il percorso. Farai riferimento al ginecologo per le ecografie di routine (primo trimestre e morfologica).</p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqVGThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqVGThree" aria-expanded="false" aria-controls="collapseFaqVGThree">
                Cosa si fa materialmente durante una visita ostetrica in gravidanza?
              </button>
            </h3>
            <div id="collapseFaqVGThree" class="accordion-collapse collapse" aria-labelledby="headingFaqVGThree"
              data-bs-parent="#accordionFaqVisitaGrav">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Controlliamo i referti medici e misuriamo parametri vitali come la pressione. Inoltre valutiamo la crescita del bimbo/a con la misurazione fondo-sinfisi (dalla 24esima settimana), ascoltiamo il battito cardiaco, e tramite le manovre di Leopold valutiamo manualmente il posizionamento e l'impegno fetale.</p>
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
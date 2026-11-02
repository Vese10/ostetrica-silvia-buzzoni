<?php require_once __DIR__ . '/../../include/config.php'; if (!FAQ_ENABLED) return; ?>
<section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 pt-0 second-section" id="faq-section">
  <h2 class="title mt-3 mt-lg-0 text-center">Domande Frequenti (FAQ)</h2>
  <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
    <div class="row justify-content-center p-0 p-lg-5 w-100">
      <div class="col-lg-10 text-center p-0 p-lg-3 custom-accordion">
        <div class="accordion mt-3 mt-lg-0" id="accordionFaqAcquaticitaNeo">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAN1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqAN1"
                aria-expanded="false" aria-controls="collapseFaqAN1">
                Da che età il mio bambino può iniziare il corso di acquaticità?
              </button>
            </h3>
            <div id="collapseFaqAN1" class="accordion-collapse collapse" aria-labelledby="headingFaqAN1"
              data-bs-parent="#accordionFaqAcquaticitaNeo">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Gli incontri di acquaticità neonatale sono dolci, sicuri e pensati specificamente per lo sviluppo psicomotorio dei più piccoli. Il percorso è adatto e aperto per tutti i neonati a partire dai 3 mesi di vita in su.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAN2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAN2" aria-expanded="false" aria-controls="collapseFaqAN2">
                Cosa serve portare in piscina per me e per il mio bimbo?
              </button>
            </h3>
            <div id="collapseFaqAN2" class="accordion-collapse collapse" aria-labelledby="headingFaqAN2"
              data-bs-parent="#accordionFaqAcquaticitaNeo">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Per il tuo bambino è sufficiente procurarsi un pannolino specifico adatto all'uso in acqua. Per i genitori (che accompagnano in acqua il neonato e partecipano all'attività) servono semplicemente costume, cuffia per capelli e ciabattine antiscivolo.</p>
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFaqAN3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFaqAN3" aria-expanded="false" aria-controls="collapseFaqAN3">
                Dove e quando si tengono le lezioni di acquaticità neonatale?
              </button>
            </h3>
            <div id="collapseFaqAN3" class="accordion-collapse collapse" aria-labelledby="headingFaqAN3"
              data-bs-parent="#accordionFaqAcquaticitaNeo">
              <div class="d-flex flex-column align-items-center align-items-lg-start accordion-body">
                <p class="text">Il corso neonatale si svolge tutti i venerdì pomeriggio, precisamente dalle 17:00 alle 17:45, presso i locali della Piscina / Polisportiva Doro di Ferrara. Sono disponibili ingressi singoli opure pacchetti da 5 ingressi (con validità di tesseramento annuale).</p>
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
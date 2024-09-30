<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dottoressa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
  <meta property="og:title" content="D.ssa Silvia Buzzoni - Ostetrica Libera Professionista">
  <meta property="og:description" content="D.ssa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia">
  <title>Ostetrica Silvia Buzzoni</title>
  <meta name="description" content="Dottoressa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia.">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
  <?php include 'modules/cookie-banner/cookie-banner.php'; ?>
</head>

<body>

  <?php include 'include/menu.php'; ?>

  <section class="container-fluid d-flex flex-column align-items-center justify-content-center first-section"
    id="first-section">
    <h1 class="text-center mb-5 presentazione">D.ssa Silvia Buzzoni Ostetrica <br>Libera Professionista a Ferrara e
      provincia
    </h1>
    <a class="btn bg-light btn-servizi" href="javascript:void(0);" onclick="scrollToServizi()">Scopri i servizi</a>
  </section>

  <section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 second-section" id="second-section">
    <h2 class="title mt-lg-0 mt-5">Chi sono</h2>
    <div class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5">
      <div class="row align-items-center justify-content-center py-0 p-2 p-lg-5">
        <div class="col-lg-4 text-center">
          <img src="assets/img/chi-sono-img.png" alt="Image 1" class="rounded-circle img-fluid"
            style="width: 150px; height: 150px;">
        </div>
        <div class="col-lg-4 text-center">
          <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="col-lg-4 text-center">
          <img src="assets/img/chi-sono-img.png" alt="Image 1" class="rounded-circle img-fluid"
            style="width: 150px; height: 150px;">
        </div>
      </div>
      <div class="row align-items-center justify-content-center py-0 p-2 p-lg-5">
        <div class="col-lg-4 text-center">
          <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="col-lg-4 text-center">
          <img src="assets/img/chi-sono-img.png" alt="Image 1" class="rounded-circle img-fluid"
            style="width: 150px; height: 150px;">
        </div>
        <div class="col-lg-4 text-center">
          <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>
      <div class="row align-items-center justify-content-center py-0 p-2 p-lg-5">
        <div class="col-lg-4 text-center">
          <img src="assets/img/chi-sono-img.png" alt="Image 1" class="rounded-circle img-fluid"
            style="width: 150px; height: 150px;">
        </div>
        <div class="col-lg-4 text-center">
          <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="col-lg-4 text-center">
          <img src="assets/img/chi-sono-img.png" alt="Image 1" class="rounded-circle img-fluid"
            style="width: 150px; height: 150px;">
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 third-section" id="third-section">
    <h2 class="title mt-lg-0 mt-5">I miei servizi</h2>
    <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
      <div class="row justify-content-center p-0 p-lg-5">
        <div class="col-lg-6 text-center p-0 p-lg-3 order-lg-1 order-2">
          <img src="assets/img/chi-sono-img.png" alt="Image 1" class="img-fluid third-img">
        </div>
        <div class="col-lg-6 text-center p-0 p-lg-3 order-lg-2 order-1 custom-accordion">
          <div class="accordion mt-3 mt-lg-0" id="accordionExample">

            <!-- Servizi per la gravidanza -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="false" aria-controls="collapseOne">
                  Servizi per la gravidanza
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p class="text">Descrizione dei servizi offerti durante la gravidanza. Offriamo consulenze,
                    monitoraggi e
                    assistenza pre-natale.</p>
                  <a href="https://ostetricasilviabuzzoni.it/servizi-in-gravidanza" class="btn btn-accordion">Scopri di più</a>
                </div>
              </div>
            </div>

            <!-- Servizi per il travaglio ed il parto -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Servizi per il travaglio ed il parto
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p class="text">Descrizione dei servizi per il travaglio e il parto, incluse le tecniche di gestione
                    del dolore e
                    il supporto clinico.</p>
                  <a href="https://ostetricasilviabuzzoni.it/travaglio-e-parto" class="btn btn-accordion">Scopri di più</a>
                </div>
              </div>
            </div>

            <!-- Servizi nel post parto -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Servizi nel post parto
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p class="text">Descrizione dei servizi post-parto, incluse consulenze sull'allattamento e il recupero
                    fisico della
                    mamma.</p>
                  <a href="https://ostetricasilviabuzzoni.it/post-parto" class="btn btn-accordion">Scopri di più</a>
                </div>
              </div>
            </div>

            <!-- Servizi per ogni fase della vita della donna -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Servizi per ogni fase della vita della donna
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p class="text">Descrizione dei servizi per ogni fase della vita della donna, dalla pubertà alla
                    menopausa.</p>
                  <a href="https://ostetricasilviabuzzoni.it/per-le-donne" class="btn btn-accordion">Scopri di più</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid d-flex flex-column align-items-center p-0 fourth-section" id="fourth-section">
    <h2 class="title mt-lg-0 mt-5">Dove lavoro</h2>
    <div class="container-fluid d-flex flex-column p-0">
      <div class="row justify-content-center p-0">
        <div class=""></div>
        <h3 class="sub-title text-center p-2">A domicilio:</h3>
      </div>
      <div class="domicilio-cont ">
        <img src="assets/img/domicilio.jpg" alt="Image 1" class="img-fluid domicilio-img">
      </div>
      <div class="d-flex justify-content-center">
        <p class="text-dove p-4 p-lg-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
          galley of type and scrambled it to make a type specimen book.</p>
      </div>
    </div>
    </div>
    <div class="container-fluid d-flex flex-column p-0">
      <div class="row justify-content-center p-0">
        <div class=""></div>
        <h3 class="sub-title text-center p-2">In studio:</h3>
      </div>
      <div class="domicilio-cont">
        <img src="assets/img/domicilio.jpg" alt="Image 1" class="img-fluid domicilio-img">
      </div>
      <div class="d-flex justify-content-center">
        <p class="text-dove p-4 p-lg-5 pb-lg-1">- Lorem Ipsum is simply dummy text of the printing and typesetting
          industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
          galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="d-flex justify-content-center">
        <p class="text-dove p-4 p-lg-5 pt-lg-1">- Lorem Ipsum is simply dummy text of the printing and typesetting
          industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
          galley of type and scrambled it to make a type specimen book.</p>
      </div>
    </div>
    </div>
    <div class="container-fluid maps-cont p-4 p-lg-5 pt-0">
      <div class="row">
        <div class="col-md-6">
          <h3 class="sub-title text-center mt-4 mt-lg-0">Ferrara:</h3>
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.17069657456!2d11.661939799999999!3d44.838457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477e4f99a3816739%3A0xdad6577ba44b293b!2sOstetrica%20Silvia%20Buzzoni!5e0!3m2!1sit!2sit!4v1727279313656!5m2!1sit!2sit"
              class="map" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="sub-title text-center mt-4 mt-lg-0">Portomaggiore:</h3>
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2836.188673763629!2d11.80505367657397!3d44.695346784407796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477e400d463fac8d%3A0xfc68f9609bfa208a!2sFisiosport%20S.A.S.%20Di%20Dinardo%20Paolo%20%26%20C.!5e0!3m2!1sit!2sit!4v1727279428010!5m2!1sit!2sit"
              class="map" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 fifth-section" id="fifth-section">
    <h2 class="title text-center mt-lg-0 mt-5">Contatti</h2>
    <h3 class="sub-title text-center mt-lg-0 mt-2 px-4">Per informazioni, collaborazioni o altro non esitare a contattarmi</h3>
    <div class="container-fluid d-flex flex-column align-items-center p-0 p-lg-5 accordin-container">
      <div class="row justify-content-center p-0 p-lg-5">
        <div class="col-lg-6 text-center p-0 p-lg-3">
          <?php include 'modules/contact-form/contact-form.php' ?>
        </div>
        <div class="col-lg-6 d-flex justify-content-center text-center p-0 p-lg-3 pt-2 custom-accordion">
          <div class="social-contacts mt-3 mt-lg-0">
            <div class="d-flex flex-row align-items-center justify-content-start my-3 social">
              <img src="assets/img/whatsapp.svg" class="social-img" alt="WhatsApp Logo" style="width: 50px;">
              <a href="https://wa.me/3331676725" class="social-text p-2">+39 333 167 6725</a>
            </div>
            <div class="d-flex flex-row align-items-center justify-content-start my-3 my-lg-5 social">
              <img src="assets/img/instagram.svg" class="social-img" alt="Instagram Logo" style="width: 50px;">
              <a href="https://www.instagram.com/ostetricasilviabuzzoni/" class="social-text p-2">@ostetricasilviabuzzoni</a>
            </div>
            <div class="d-flex flex-row align-items-center justify-content-start my-3 my-lg-5 social">
              <img src="assets/img/facebook.svg" class="social-img" alt="Facebook Logo" style="width: 50px;">
              <a href="https://www.facebook.com/ostetricasilviabuzzoni/" class="social-text p-2">Dott.ssa Silvia Buzzoni Ostetrica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'include/footer.php'; ?>

  <script src="modules/contact-form/contact-form.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="assets/js/nav-drop-down.js"></script>
  <script src="assets/js/scrollToSection.js"></script>

</body>

</html>
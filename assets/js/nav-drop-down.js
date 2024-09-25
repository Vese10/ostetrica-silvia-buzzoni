document.addEventListener('DOMContentLoaded', function () {
  // Dropdown principale "Servizi"
  var servicesDropdown = document.querySelector('#servicesDropdown').parentElement;

  // Gestione del mouseover per il menu principale
  servicesDropdown.addEventListener('mouseover', function () {
    this.querySelector('.dropdown-menu').classList.add('show');
  });

  servicesDropdown.addEventListener('mouseout', function () {
    this.querySelector('.dropdown-menu').classList.remove('show');
  });

  // Gestione del click per il menu principale
  servicesDropdown.addEventListener('click', function (e) {
    e.preventDefault(); // Previene il comportamento predefinito
    var dropdownMenu = this.querySelector('.dropdown-menu');

    // Chiudi tutti i menu aperti prima di aprirne uno nuovo
    document.querySelectorAll('.dropdown-menu.show').forEach(function (menu) {
      menu.classList.remove('show');
    });

    // Toggles the visibility of the clicked menu
    dropdownMenu.classList.toggle('show');
  });

  // Sub-dropdowns (i menu all'interno di "Servizi")
  var subDropdowns = document.querySelectorAll('.dropdown-submenu');

  subDropdowns.forEach(function (dropdown) {
    // Gestione del mouseover per i sub-dropdowns
    dropdown.addEventListener('mouseover', function () {
      this.querySelector('.dropdown-menu').classList.add('show');
    });

    dropdown.addEventListener('mouseout', function () {
      this.querySelector('.dropdown-menu').classList.remove('show');
    });

    // Gestione del click per i sub-dropdowns
    dropdown.addEventListener('click', function (e) {
      e.stopPropagation(); // Blocca la propagazione del click verso l'alto
      e.preventDefault(); // Previene il comportamento predefinito
      var dropdownMenu = this.querySelector('.dropdown-menu');

      // Chiudi tutti i sub-dropdowns aperti prima di aprirne uno nuovo
      document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(function (menu) {
        menu.classList.remove('show');
      });

      // Toggles the visibility of the clicked sub-dropdown
      dropdownMenu.classList.toggle('show');
    });
  });
});
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Rimuovi messaggio di errore se presente
        var errorMessage = document.getElementById('error-message');
        errorMessage.classList.add('hidden');

        var form = this;
        var formData = new FormData(form);
        var valid = true;

        // Verifica se tutti i campi obbligatori sono compilati
        form.querySelectorAll('input, textarea').forEach(function(input) {
            if (!input.checkValidity()) {
                valid = false;
                input.classList.add('error');
            } else {
                input.classList.remove('error');
            }
        });

        if (valid) {
            fetch('modules/contact-form/send_mail.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text())
              .then(data => {
                  document.getElementById('form-container').classList.add('hidden');
                  document.getElementById('confirmation-message').classList.remove('hidden');
              }).catch(error => console.error('Error:', error));
        } else {
            // Mostra messaggio di errore
            errorMessage.classList.remove('hidden');
        }
    });
});

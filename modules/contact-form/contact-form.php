<style>
    .hidden { display: none; }
    .error { color: red; }
</style>
<div id="form-container">
    <form class="form" action="send_mail.php" id="contact-form">
        <div class="form-group">
            <input type="text" class="form-control" name="nome_cognome" placeholder="Nome e Cognome" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="messaggio" rows="3" placeholder="Messaggio"></textarea>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" name="privacy" required>
            <label class="form-check-label" for="privacy">Acconsento al trattamento dei miei dati personali in conformità alla normativa sulla <a class="privacy-link" href="privacy-policy.php">privacy.</a></label>
        </div>
        <button type="submit" class="btn btn-block btn-info-contact">Richiedi Informazioni</button>
        <div id="error-message" class="error hidden">Tutti i campi sono obbligatori e la privacy deve essere accettata.</div>
    </form>
</div>
<div id="confirmation-message" class="hidden">
    <p>Grazie per averci contattato. Vi risponderemo al più presto.</p>
</div>
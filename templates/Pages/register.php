<?php
$this->assign('title', 'Registrierung');
?>
<div class="container container-register">
    <form class="mb-4" novalidate>
        <div class="text-center mb-4">
            <h1>Registrierung</h1>
        </div>
        <div class="form-group">
            <label>E-Mailadresse</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label>Passwort</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label>Passwort wiederholen</label>
            <input type="password" class="form-control" name="password_repeat" required>
        </div>
        <div class="form-group">
            <label>Benutzername</label>
            <input type="text" class="form-control" name="username" required autofocus>
        </div>
        <div class="form-group">
            <p><strong>Ich bin damit einverstanden, dass mich die tracdelight GmbH als Betreiber von brands you love per E-Mail kontaktiert, um mich über neue Aktionen und Club-Deals zu informieren.</strong></p>
            <p>Mein Einverständnis zu den Aktionen kann ich jederzeit im Profil widerrufen. Eine Abmeldung vom Club-Newsletter ist jederzeit entweder per E-Mail an club@brandsyoulove.de oder im Newsletter selbst möglich.</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1">
                <label class="form-check-label" for="exampleRadios1">Ja</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="0">
                <label class="form-check-label" for="exampleRadios2">Nein</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" style="margin-top: .4rem;">
                <label class="form-check-label" for="inlineCheckbox1">Bitte bestätige unsere allgemeinen Nutzungsbedingungen und beachte auch unsere Datenschutzerklärung.</label>
            </div>
            <p><a href="#">Nutzungsbedingungen</a><br/><a href="#">Datenschutz</a></p>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Weiter</button>
    </form>
</div>
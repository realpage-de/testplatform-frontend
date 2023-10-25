<?php
$this->assign('title', 'Login');
?>
<div class="container container-login">
    <form class="mb-4" novalidate>
        <div class="text-center mb-4">
            <h1>Login</h1>
        </div>
        <div class="form-group">
            <label>Benutzername oder E-Mailadresse</label>
            <input type="email" class="form-control" name="user" required autofocus>
        </div>
        <div class="form-group">
            <label>Passwort</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Einloggen</button>
    </form>

    <p>Wenn du dich nicht einloggen kannst, löse einfach unten die Funktion Passwort vergessen aus, dann bekommst du per E-Mail ein neues Passwort zugesendet.</p>
    <button type="submit" class="btn btn-primary btn-block">Passwort vergessen</button>
</div>
<h1>Contact</h1>
Wilt u een offerte aanvragen, advies welk soort website het beste bij u past of heeft u vragen, opmerkingen en/of klachten?
Vul dan het onderstaande formulier in met de juiste onderwerp en uw e-mailadres.
Ons team probeert uw mail zo snel mogelijk te reageren.


<form action="../functions/mail.php" method="post">
    <div id="border">
            <br>
            <label for="naam">Volledige Naam</label><br>
            <input type="text" id="naam" name="naam" placeholder="Voornaam Achternaam"><br><br>

            <label for="e-mail">E-mailadres</label><br>
            <input type="email" id="e-mail" name="e-mail" placeholder="voorbeeld@live.nl"><br><br>

            <label for="onderwerp">Onderwerp</label><br>
            <select name="onderwerp" id="onderwerp">
                <option value="Aanvraag offerte">Aanvraag offerte</option>
                <option value="Op maat gemaakt advies">Op maat gemaakt advies</option>
                <option value="Aanvraag support">Support aanvraag</option>
                <option value="Overig">Overig</option>
            </select><br><br>

            <label for="tekst">Tekst</label><br>
            <textarea  name="tekst" id="tekst" rows="4" cols="100"></textarea><br><br>

            <input type="submit" value="Versturen" name="submit_contact">
    </div>
</form>

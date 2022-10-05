<?php include '/vendor/header.html' ?>
    <script>
        function myFunction() {
          document.getElementById("demo").innerHTML = document.getElementById("demo2").innerHTML;
        }
        </script>
<body>
    <h1>Formulaire</h1>
    <form method="POST" action="/toolkit/welcome.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Organisme d'acceuil 1/4</legend>
            <div class="label">
                <label for="img-company">Logo</label>
                <input type="file" name="img-company" id="" accept="image/*" onchange="readurl(this)" disabled>
            </div>
            <div class="label">
                <label for="company">Dénomination Sociale</label>
                <input type="text" name="company" id="company" required autofocus>
            </div>
            <div class="label">
                <label for="ice">ICE</label>
                <input type="text" name="ice" id="ice" required autofocus>
            </div>
            <div class="label">
                <label for="phone">Téléphone</label>
                <input type="tel" name="phone" id="" required>
            </div>
            <div class="label">
                <label for="country">Pays</label>
                <input type="text" name="country" id="" required>
            </div>
            <div class="label">
                <label for="address">Adresse</label>
                <input type="text" name="address" id="" required>
            </div>
            <div class="label">
                <label for="caddress">Complément d'adresse</label>
                <input type="text" name="caddress" id="">
            </div>
            <div class="label">
                <label for="city">Ville</label>
                <input type="text" name="city" id="" required>
            </div>
            <div class="label">
                <label for="postalcode">Code postal</label>
                <input type="text" name="postalcode" id="" required>
            </div>
            <div class="label">
                <label for="functionic">Fonction de la personne signant l'attestation</label>
                <input type="text" name="functionic" id="" required>
            </div>
            <div class="label">
                <label for="fname-org">Prénom du signataire</label>
                <input type="text" name="fname-org" id="" required>
            </div>
            <div class="label">
                <label for="lname-org">Nom du signataire</label>
                <input type="text" name="lname-org" id="" required>
            </div>
            <div class="label">
                <label for="d-sign">Date de l'attestation</label>
                <input type="date" name="d-sign" id="" required>
            </div>
        </fieldset>
        <fieldset>
        <legend>Le stagiaire 2/4</legend>
            <div class="label">
                <label for="fname-stg">Prénom du stagiaire</label>
                <input type="text" name="fname-stg" id="" required>
            </div>
            <div class="label">
                <label for="lname-stg">Nom du stagiaire</label>
                <input type="text" name="lname-stg" id="" required>
            </div>
            <div class="label">
                <label for="birthday-stg">Date de naissance</label>
                <input type="date" name="birthday-stg" id="" required>
            </div>
            <div class="label">
                <label for="civility">Civilité</label>
                <label for="male">Mr.</label>
                <input type="radio" name="civility" id="" value="Mr." required>
                <label for="female">M.</label>
                <input type="radio" name="civility" id="" value="M." required>
            </div>
            <div class="label">
                <label for="address-stg">Adresse</label>
                <input type="text" name="address-stg" id="" required>
            </div>
            <div class="label">
                <label for="caddress-stg">Complément d'adresse</label>
                <input type="text" name="caddress-stg" id="">
            </div>
            <div class="label">
                <label for="city-stg">Ville</label>
                <input type="text" name="city-stg" id="" required>
            </div>
            <div class="label">
                <label for="postalcode-stg">Code postal</label>
                <input type="text" name="postalcode-stg" id="" required>
            </div>
            <div class="label">
                <label for="cin-stg">Numéro de CIN</label>
                <input type="text" name="cin-stg" id="" required>
            </div>
            <div class="label">
                <label for="mail-stg">E-Mail</label>
                <input type="email" name="mail-stg" id="" required>
            </div>
            <div class="label">
                <label for="tel-stg">Téléphone</label>
                <input type="tel" name="tel-stg" id="" required>
            </div>

        </fieldset>
        <fieldset>
        <legend>Parcours de formation 3/4</legend>
            <div class="label">
                <label for="university">Nom de l'université</label>
                <input type="text" name="university" id="" required>
            </div>
            <div class="label">
                <label for="formation">Nom de la filière</label>
                <input type="text" name="formation" id="" required>
            </div>
        </fieldset>
        <fieldset>
        <legend>Stage 4/4</legend>
            <div class="label">
                <label for="start-stg">Début du stage</label>
                <input type="date" name="start-stg" id="" required>
            </div>
            <div class="label">
                <label for="end-stg">Fin du stage</label>
                <input type="date" name="end-stg" id="" required>
            </div>
            <div class="label">
                <label for="durationstg">Durée totale du stage (précisez en mois / en semaine)</label>
                <input type="text" name="durationstg" id="" required>
            </div>
            <div class="label">
                <p>Si aucune rémunération ou gratification n'a été offerte laissé les cases suivantes vides</p>
            </div>
            <div class="label">
                <label for="moneystg">Montant total de la gratification du stagiaire</label>
                <input type="number" name="moneystg" id="">
            </div>
            <div class="label">
                <label for="devise">Devise</label>
                <input type="text" name="devise" id="">
            </div>
        </fieldset>
        <div class="label">
            <input type="submit" value="Save" id="submit" class="myaccount">
        </div>
    </form>
</body>
</html>
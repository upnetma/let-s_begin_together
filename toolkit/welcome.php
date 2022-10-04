<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_base.css">
</head>
<body>
    <?php include './vendor/header.php'?>
    <div>
    </div>
    <div class="" style="text-align: right;">

        <h1>Attestation de stage</h1>
        <legend>à remettre au stagiaire à l'issue du stage</legend>
    </div>
    <div>
        <h2>Organisme d'acceuil</h2>
        <ul>
            <li>
                Nom ou dénomination sociale : <b><?php echo $_POST["company"]?></b>
            </li>
            <li>
                Téléphone : <b><?php echo $_POST["phone"]?></b>
            </li>
            <li>
                ICE : <b><?php echo $_POST["ice"]?></b>
            </li>
            <li>
                Adresse : <b><?php echo $_POST["address"]?></b>
            </li>
            <li>
                Complétment d'adresse : <b><?php echo $_POST["caddress"]?></b>
            </li>
            <li>
                Code Postal : <b><?php echo $_POST["postalcode"]?></b>
            </li>
            <li>
                Ville : <b><?php echo $_POST["city"]?></b>
            </li>
            <li>
                Pays : <b><?php echo $_POST["country"]?></b>
            </li>
        </ul>
    </div>
    <div>
        <p>Atteste que</p>
    </div>
    <div>
        <h2>Le stagiaire</h2>
        <p>
            <b><?php echo $_POST["civility"]?></b> <b><?php echo $_POST["fname-stg"]?></b> <b><?php echo $_POST["lname-stg"]?></b> née le <b><?php echo $_POST["birthday-stg"]?></b> 
            porteur de la cin <b><?php echo $_POST["cin-stg"]?></b> demeurant à <b><?php echo $_POST["address-stg"]?> <?php echo $_POST["caddress-stg"]?></b> pouvant être contacté sur
            son email <b><?php echo $_POST["mail-stg"]?></b> ou sur son portable <b><?php echo $_POST["tel-stg"]?></b> étudiant(e) dans la formation 
            <b><?php echo $_POST["formation"]?></b> au sein de <b><?php echo $_POST["university"]?></b>
        </p>
    </div>
    <div>
        <p>a effectué un stage prévu dans le cadre de ses études</p>
    </div>
    <div>
        <h2>Durée du stage</h2>
        <p>
            <ul>
                <li>Dates de début et de fin de stage : du <b><?php echo $_POST["start-stg"]?></b> au <b><?php echo $_POST["end-stg"]?></b></li>
                <li>Pour une durée de : <b><?php echo $_POST["durationstg"]?></b></li>
            </ul>
        </p>
    </div>
<!--     <div>
        <h2>Montant de la gratification versée au stagiaire</h2>
        <p>Le stagiaire a perçu une gratification de stage pour un montant total de <b> <?php echo $_POST["moneystg"]; echo $_POST["devise"] ?></b></p>
    </div> -->
    <?php if(isset($_POST['moneystg'], $_POST['devise']) && !empty($_POST['moneystg']) ){ ?>
        <h2>Montant de la gratification versée au stagiaire</h2>
        <p>Le stagiaire a perçu une gratification de stage pour un montant total de <b><?php echo $_POST['moneystg']; echo $_POST['devise'];?></b>
<?php } ?>
    <div class="" style="text-align: right;">
        <p class="signature"><b><?php echo $_POST['city'];?></b> <?php echo ', Le ';?> <b><?php echo $_POST['d-sign'] ?></b></p>
        <p class="signature" style="margin-top: 60px;"><b><?php echo $_POST['fname-org']; echo ' '; echo $_POST['lname-org']; echo ', ' ;echo $_POST['functionic']; ?></b></p>
    </div>
</body>
</html>
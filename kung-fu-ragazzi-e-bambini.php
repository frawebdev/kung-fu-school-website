<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include/bootstrap_link.php"); ?>
    <title>kung fu per bambini e ragazzi</title>
</head>
<body>
    
<?php include("include/nav.php"); ?>

    <header class="jumbotron jumbotron-corso-kfb">
        <h1 class="display-4 text-center">kung fu per bambini e ragazzi</h1>
    </header>

    <main class="container mt-5">
        <div class="card">
        <h3 class="card-header">Cosa imparerai?</h3>
            <div class="card-body">
              <p class="card-text">I corsi per i più piccoli sono divisi in un corso per bambini dai 4 ai 6 anni, 
                  e un corso per ragazzi dai 7 ai 15 anni.</p>
                  <h3 class="card-title">Corso dai 4 ai 6 anni</h3>
                  <p class="card-text">Nel corso per bambini i piccoli impareranno, divertendosi, le basi e i principi delle arti marziali. 
                      Attraverso il gioco miglioreranno la coordinazione, 
                      impareranno la disciplina, l’autocontrollo, l’autostima, e lo stare in gruppo.
                    </p>
                    <h3 class="card-title">Corso dai 7 ai 15 anni</h3>
                  <p class="card-text">Nel corso per ragazzi si iniziano a studiare le arti marziali in modo più serio 
                      (senza comunque mettere da parte il divertimento). Infatti si imparano le vere basi del kung fu shaolin, 
                      con esercizi e movimenti molto vicini a quelli delle lezioni per adulti.
                    Oltre ai valori che stanno alla base del della filosofia cinese, 
                    i ragazzi impareranno i fondamentali e le forme tradizionali del kung fu Shaolin
                    </p>
            </div>
          </div>
    </main>

    <h2 class="display-4 text-center mt-5 mb-5" id="orari-section">orari del corso bambini</h2>
    <section class="container">
      <ul class="list-group list-group-flush">
        <li class="list-group-item text-center"><span class="text-muted mr-2">Lunedì</span>17:00 alle 18:00</li>
        <li class="list-group-item text-center"><span class="text-muted mr-2">Mercoledì</span>17:00 alle 18:00</li>
      </ul>
    </section>

    <h2 class="display-4 text-center mt-5 mb-5" id="orari-section">orari del corso ragazzi</h2>
    <section class="container">
      <ul class="list-group list-group-flush">
        <li class="list-group-item text-center"><span class="text-muted mr-2">Martedì</span>17:30 alle 19:00</li>
        <li class="list-group-item text-center"><span class="text-muted mr-2">Giovedì</span>17:30 alle 19:00</li>
      </ul>
    </section>

    <?php include("include/contacts.php");?>

    <?php include("include/footer.php"); ?>
    
    <?php include("include/js_link.php"); ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include/bootstrap_link.php"); ?>
    <title>il maestro Liu Peng</title>
</head>
<body>
    
<?php include("include/nav.php"); ?>

    <header class="jumbotron jumbotron-liu-peng">
        <h1 class="display-4 text-center">il maestro liu peng</h1>
    </header>

    <main class="container mt-5">
        <div class="card">
        <h3 class="card-header">chi è il maestro Liu Peng?</h3>
            <div class="card-body">
              <p class="card-text">Liu Peng, maestro Shaolin al 7° livello nella federazione internazionale Chan Wu, 
                  e allievo diretto del monaco di 32a generazione Shi Xing Hong, 
                  inizia a praticare Kung Fu e Tai Chi all’età di 6 anni, nel monastero Shaolin.<br>
                  Qui si specializza nello stile della scimmia, del bastone scimmia, 
                  nello stile dell’ubriaco e nello stile Tong Zhi Gong.<br>
                Nella sua carriera ha vinto numerosi premi, 
                tra cui quello per il campionato nazionale cinese di wushu con arma tradizionale, e quello, 
                sempre per il campionato nazionale cinese, in stile dell’ubriaco.<br>
                Ha viaggiatoin più di 40 paesi, con la missione di diffondere 
                e condividere il Kung Fu e la sua tradizione millenaria in giro per il mondo.<br>
                Nel 2011 si trasferisce a Colleferro, dove apre la sua scuola. Nella sua scuola, 
                il maestro Liu Peng, oltre a continuare nella sua opera di condivisione e 
                insegnamento della cultura cinese, tiene dei corsi di Kung Fu Shaolin, 
                per adulti ma anche per ragazzi e bambini, e un corso di Tai Chi.</p>
            </div>
          </div>
    </main>

    <section class="container mt-5">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="background:url('img/shifu_gallery_1.jpg') center/cover;">
          </div>
          <div class="carousel-item" style="background:url('img/shifu_gallery_2.jpg') center/cover;">
          </div>
          <div class="carousel-item" style="background:url('img/shifu_gallery_3.jpg') center/cover;">
          </div>
          <div class="carousel-item" style="background:url('img/shifu_gallery_4.jpg') center/cover;">
          </div>
          <div class="carousel-item" style="background:url('img/shifu_gallery_5.jpg') center/cover;">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <?php include("include/contacts.php");?>

    <?php include("include/footer.php"); ?>
    
    <?php include("include/js_link.php"); ?>
</body>
</html>
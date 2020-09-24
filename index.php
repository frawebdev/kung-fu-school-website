<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Nella scuola Kung Fu Quan potrai imparare il Kung Fu con un vero maestro Shaolin! Contattaci subito!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include/bootstrap_link.php"); ?>
    <title>Kung Fu Quan - scuola di kung fu shaolin - maestro shaolin Liu Peng</title>
</head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-light bg-color">
        <a class="navbar-brand" href="#">
            <img src="img/logo_kung_fu_quan.jpg" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  I corsi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Kung Fu</a>
                  <a class="dropdown-item" href="corso-di-tai-chi.html">Tai Chi</a>
                  <a class="dropdown-item" href="kung-fu-ragazzi-e-bambini.html">Kung fu per bambini e ragazzi</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="il-maestro-e-la-scuola.html">Il Maestro Liu Peng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chi-siamo.html">Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cultura-zen.html">Cultura Zen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="eventi-e-comunicazioni.html">Eventi e comunicazioni</a>
              </li>
            
          </ul>
        </div>
      </nav>
      
<header class="jumbotron jumbotron-home">
        <h1 class="display-4 text-center">kung fu quan</h1>
           <p class="lead text-center">Impara il Kung Fu con un vero
            Maestro Shaolin</p>
           <div class="text-center">
           <a class="btn btn-lg btn-color-font" href="#" role="button">Scopri di più</a>
           </div>
    </header>

    <main class="container">
        <h2 class="display-4 text-center mt-5 mb-5">i corsi</h2>
        <div class="card-deck">
            <div class="card">
              <img src="img/corsi_di_kung_fu.jpg" class="card-img-top" alt="allenamento di kung fu">
              <div class="card-body">
                <h3 class="card-title">Corsi di Kung Fu</h3>
                <p class="card-text">Nella palestra Kung Fu Quan potrai studiare lo stile Shaolinquan, inizialmente ideato nel monastero di Shaolin dai monaci buddisti...</p>
                <div class="text-center">
                <button class="btn btn-md btn-color-font">scopri di più</button>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="img/corsi_di_tai_chi.jpg" class="card-img-top" alt="shifu che pratica tai chi">
              <div class="card-body">
                <h3 class="card-title">Corsi di Tai Chi</h3>
                <p class="card-text">Il Tai Chi è uno stile molto famoso nelle arti marziali cinesi. E’ conosciuto sia come tecnica di combattimento, sia come ginnastica...</p>
                <div class="text-center">
                <button class="btn btn-md btn-color-font">scopri di più</button>
                </div>
              </div>
            </div>
          </div>
    </main>

    <h2 class="display-4 text-center mt-5 mb-5">il maestro liu peng</h2>
    <section class="container mt-4">
      <div class="card">
        <img src="img/shifu_gallery_4.jpg" class="card-img" alt="shifu con la spada">
        <div class="card-img-overlay" style="background-color: rgba(255,255,255,0.8);">
          <p class="card-text text-center">maestro Shaolin al 7° livello nella federazione internazionale Chan Wu, e allievo diretto del monaco di 32a generazione Shi Xing Hong...</p>
          <button class="btn btn-md btn-color-font">scopri di più</button>
        </div>
      </div>
    </section>
    
    <h2 class="display-4 text-center mt-5 mb-5">dicono di noi</h2>
    <section class="slider container-fluid shadows mt-5 d-flex justify-content-center align-items-center">
      <div class="slider-content container p-5"></div>
      <div class="slider-counter">
        <img src="icon/arrow_left.svg" alt="" class="arrow-left">
        <div class="count"></div>
        <img src="icon/arrow_right.svg" alt="" class="arrow-right">
      </div>
    </section>

    <?php include("include/contacts.php");?>

    <?php include("include/footer.php"); ?>

    <?php include("include/js_link.php"); ?>
</body>
</html>
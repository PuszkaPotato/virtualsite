<nav class="navbar navbar-dark fixed-top bg-vge navbar-expand-lg">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav navbar-center mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= getEnv('app.baseURL') ?>">Strona Główna</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md">
        <p class="logo text-center"><img src="/theme/img/logo.png" alt="Virtual-Gaming" class="img-fluid mt-3 w-25"></p>
        <div class="texts text-center">
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="bg-dark">
          <div class="card bg-dark">
            <div class="card-body">
                <h3 class="vge-header text-center card-title">Formularz Partnerski Dla Drużyn E-Sportowych</h3>
                <form class="mt-5">
                  <?= csrf_field() ?>

                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="leaderName" class="form-label">Nazwa Lidera</label>
                        <input type="text" class="form-control" id="leaderName" placeholder="Nick lub imię Lidera Drużyny">
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="leaderUID" class="form-label">UID Lidera</label>
                        <input type="text" class="form-control" id="leaderUID" placeholder="UID na Teamspeak 3 Lidera Drużyny">
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="leaderEmail" class="form-label">Adres E-Mail Lidera</label>
                        <input type="text" class="form-control" id="leaderEmail" placeholder="Adres e-mail lidera drużyny">
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="teamName" class="form-label">Nazwa Drużyny</label>
                        <input type="text" class="form-control" id="teamName" placeholder="Pełna Nazwa Drużyny">
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="teamTag" class="form-label">TAG Drużyny</label>
                        <input type="text" class="form-control" id="teamTag" placeholder="TAG Drużyny">
                    </div>
                  </div>
                  <!-- <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="teamLogo" class="form-label">Logo Drużyny</label>
                        <input type="file" class="form-control" id="teamLogo">
                    </div>
                  </div> -->
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="teamFacebook" class="form-label">Strona Facebook Drużyny</label>
                        <input type="text" class="form-control" id="teamFacebook" placeholder="Link do strony Facebook drużyny">
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="teamWebsite" class="form-label">Strona Drużyny</label>
                        <input type="text" class="form-control" id="teamWebsite" placeholder="Link do strony oficjalnej strony drużyny">
                    </div>
                  </div>
                  <div class="row mb-3 mt-5 justify-content-center">
                    <div class="col-md-8">
                      <input class="form-check-input" id="privacypolicy" type="checkbox" value="">
                      <label class="form-check-label">
                        Wyrażam zgodę na <a href="#">przetwarzanie danych</a> oraz <a href="#">warunki współpracy</a>
                      </label>
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <input id="submitForm" class="btn btn-light" type="submit" name="submit" value="Wyślij">
                    </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer font-small vge-footer mt-3">
    <div class="social-links">
      <div class="text-center">
        <ul class="list-group justify-content-center list-group-horizontal">
          <li class="list-group-item social-email">
            <a href="mailto:kontakt@virtual-gaming.eu"><i class="fas fa-envelope" style="font-size: 2em;"></i>
              <p>E-Mail</p>
            </a>
          </li>
          <li class="list-group-item social-facebook">
            <a href="https://facebook.com/virtualgamingEU" target="_blank"><i class="fab fa-facebook" style="font-size: 2em;"></i>
              <p>Facebook</p>
            </a>
          </li>
          <li class="list-group-item social-teamspeak">
            <a href="ts3server://ts.virtual-gaming.eu"><i class="fab fa-teamspeak" style="font-size: 2em;"></i>
              <p>Teamspeak</p>
            </a>
          </li>
          <li class="list-group-item social-youtube">
            <a href="https://www.youtube.com/channel/UCBMyP9FnGuHm4U9I1Bs006g" target="_blank"><i class="fab fa-youtube" style="font-size: 2em;"></i>
              <p>Youtube</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center footer-bg py-3">© 2020-<?= date('Y'); ?> Copyright:
      <a href="<?= getEnv('app.baseURL') ?>"  target="_blank"> Virtual-Gaming</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
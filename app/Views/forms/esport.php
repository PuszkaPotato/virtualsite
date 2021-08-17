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
                        <input type="text" class="form-control" id="leaderName" placeholder="Nick lub Imię Lidera Drużyny" aria-describedby="leaderNameHelp">
                        <div id="leaderNameHelp" class="form-text">Imię Lidera Drużyny lub jego nazwa użytkownika na naszym serwerze. 
                          Jeśli Lider Drużyny nie był na naszym serwerze to prosimy o podanie nazwy użytkownika, którą Lider Drużyny zazwyczaj używa online.
                          <br/>
                          <span style="color:red;">Minimum 3 znaki oraz maksymalnie 32 znaki. Wymagane</span>
                        </div>
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="leaderUID" class="form-label">UID Lidera</label>
                        <input type="text" class="form-control" id="leaderUID" placeholder="UID na Teamspeak 3 Lidera Drużyny" aria-describedby="leaderUidHelp">
                        <div id="leaderUidHelp" class="form-text">UID Lidera Drużyny. UID to unikalny identyfikator klienta na teamspeak 3. <span style="color:#EAA221;font-weight:bold;">Po wejściu nasz serwer otrzymujesz wiadomość od bota "Czasoumilacz", 
                          w tej wiadomości znajduje się Twoje UID.</span> Jeśli masz problem ze znalezieniem swojego UID to zapraszamy do kontaktu z Administracją Serwera.
                          </br>
                          <span style="color:red;">Wymagane</span>
                        </div>
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="leaderEmail" class="form-label">Adres E-Mail Lidera</label>
                        <input type="text" class="form-control" id="leaderEmail" placeholder="Adres e-mail lidera drużyny" aria-describedby="leaderEmailHelp">
                        <div id="leaderEmailHelp" class="form-text">Adres E-Mail Lidera Drużyny. Adres e-mail wykorzystujemy w celu informowania o zmianach w naszej ofercie lub w celu kontaktu z Liderem Drużyny jeśli inne formy kontaktu są nie możliwe.
                          <span style="color:#EAA221;font-weight:bold;">Twój adres e-mail nie będzie wykorzystywany w celach marketingowych.</span>
                          </br>
                          <span style="color:red;">Wymagane</span>
                        </div>
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="teamName" class="form-label">Nazwa Drużyny</label>
                        <input type="text" class="form-control" id="teamName" placeholder="Pełna Nazwa Drużyny" aria-describedby="teamNameHelp">
                        <div id="teamNameHelp" class="form-text">Nazwa drużyny, którą zgłaszasz do partnerstwa.
                          </br>
                          <span style="color:red;">Minimum 3 znaki oraz maksymalnie 32 znaki. Wymagane</span>
                        </div>
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="teamTag" class="form-label">TAG Drużyny</label>
                        <input type="text" class="form-control" id="teamTag" placeholder="TAG Drużyny" aria-describedby="teamTagHelp">
                        <div id="teamTagHelp" class="form-text">TAG, czyli inaczej skrót drużyny.
                          </br>
                          <span style="color:red;">Minimum 3 znaki oraz maksymalnie 16 znaków. Wymagane</span>  
                        </div>
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="teamFacebook" class="form-label">Strona Facebook Drużyny</label>
                        <input type="text" class="form-control" id="teamFacebook" placeholder="Link do strony Facebook drużyny" aria-describedby="teamFacebookHelp">
                        <div id="teamFacebookHelp" class="form-text">Strona Facebook Twojej drużyny. Poprawny format nie zawiera ID strony oraz dodatkowych parametrów jak panel administratora. 
                          <br/></br><span style="color:#EAA221;font-weight:bold;">Przyklad: https://www.facebook.com/virtualgamingEU</span>
                          </br></br>
                          <span style="color:red;">Wymagane</span>
                        </div>
                    </div>
                  </div>
                  <!-- <div class="row mb-3 justify-content-center">
                    <div class="col-md-8">
                        <label for="teamWebsite" class="form-label">Strona Drużyny</label>
                        <input type="text" class="form-control" id="teamWebsite" placeholder="Link do strony oficjalnej strony drużyny" aria-describedby="teamWebsiteHelp">
                        <div id="teamWebsiteHelp" class="form-text"></div
                    </div>
                  </div> -->
                  <div class="row mb-3 mt-5 justify-content-center">
                    <div class="col-md-8">
                      <input class="form-check-input" id="privacyPolicy" type="checkbox" value="" aria-describedby="privacyPolicyHelp">
                      <label class="form-check-label">
                        Wyrażam zgodę na <a href="#" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">przetwarzanie danych</a> i akceptuję <a href="#">warunki współpracy</a>
                      </label>
                      <div id="privacyPolicyHelp" class="form-text">
                          <span style="color:red;">Wymagane</span>
                        </div>
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

  <!-- Modal -->
  <div class="modal fade" id="privacyPolicyModal" tabindex="-1" aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="privacyPolicyModalLabel">Polityka Prywatności</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Zamknij"></button>
        </div>
        <div class="modal-body text-wrap">
          Administratorem danych jest <span style="color:#EAA221;">Michał Kołodziej</span> (Może być dalej nazywany <span style="color:#EAA221;">Właścicielem Virtual-Gaming</span>).</br></br>

          Dane prywatne podane formularzu, które zbieramy o Tobie to adres e-mail i opcjonalnie imię i nazwisko. 
          Dostęp do Twoich danych ma Administracja Virtual-Gaming, do administracji zalicza się wszystkie osoby należące do zespołu Virtual-Gaming.</br></br>
          Wykorzystujemy te dane wyłącznie w celu kontaktu z Tobą w przypadku aktualizacji naszej oferty, potrzeby kontaktu w związku z partnerstwem między Tobą, 
          a Virtual-Gaming lub w celu poinformowania o aktualizacji naszej polityki prywatności.</br></br>
          Twoje dane <span style="font-weight:bold;">nie</span> są dzielone z osobami trzecimi lub używane w celach marketingowych.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
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


<script>

let siteUrl = "<?= getEnv('app.baseURL') ?>";

</script>

  </footer>
  <!-- Footer -->
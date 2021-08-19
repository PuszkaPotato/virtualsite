<nav class="navbar navbar-dark fixed-top bg-vge navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav navbar-center mx-auto">
          <li class="nav-item nav-item-slider active">
            <a class="nav-link" href="#about">O Nas</a>
          </li>
          <li class="nav-item nav-item-slider">
            <a class="nav-link" href="#teamspeak">Teamspeak</a>
          </li>
          <li class="nav-item nav-item-slider">
            <a class="nav-link" href="#partners">Współpraca</a>
          </li>
        </ul>

    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md">
          <p class="logo text-center"><img src="/theme/img/logo.png" alt="Virtual-Gaming" class="img-fluid mt-3 w-25"></p>
        <div class="texts text-center">
          <!-- 
              Text to be displayed
          -->
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md slider-container">
        <div class="slider bg-dark">
                <div class="card bg-dark text-center">
                    <div class="vge-text-center card-body">
                        <h1 id="about" class="vge-header card-title">Kim Jesteśmy?</h1>
                        <p class="card-text">
                            <b>
                            Jesteśmy strażnikami bezproblemowej komunikacji podczas rozgrywek online.</br>
                            Jest to możliwe dzięki magii opartej na cyferkach, literkach i znaczkach.
                            </b>
                
                            </br></br>

                            Nie będziemy was zanudzać chwaleniem się AntyDDOS czy automatyzacją, u nas to jest standard. 
                            Znajdziesz za to u nas różne autorskie pomysły, 
                            a jeśli już gdzieś je widziałeś, to komuś się u nas spodobało lub po prostu wpadł na podobny pomysł :).</br></br>
                            Wśród tych autorskich rozwiązań znajdziesz specjalnie zrobione dla Ciebie powitanie przez bota, porady seksualne od Zosi-Samosi, 
                            darmowe boty muzyczne do wypożyczenia oraz w pełni autorską i zautomatyzowaną Administrację.
                        </p>
                            <a href="ts3server://ts.virtual-gaming.eu" class="btn btn-outline-primary btn-vge m-1">Przejdź na Serwer</a>
                    </div>
                </div>
                <div class="card bg-dark text-center">
                    <div class="vge-text-center card-body">
                        <h1 id="teamspeak" class="vge-header card-title">Teamspeak 3</h1>
                        <p class="card-text">
                            <b>
                            Świetne miejsce na świąteczne spotkania rodzinne!</br>
                            Trochę gorsze na pogrzeby, ale zapraszamy!
                            </b>
                
                            </br></br>

                            Raczej nie musimy wyjaśniać czym jest komunikator Teamspeak 3. 
                            Nasz serwer działa już od ponad 1000 dni online, więc korzystając z naszego serwera masz pewność, 
                            że nagle nie znikniemy. Po takim czasie pracy nad serwerem 
                            wiemy już co I jak oraz najważniejsze wiemy, gdzie nocą tupta jeż.</br></br>
                            Dokładnie wiemy jakie jedzenie trzeba dać chomikom żeby serwer działał bez zakłóceń, 
                            więc póki ktoś nie wpuści kota do naszej serwerowni, to macie pewność, że nic naszego serwera nie złamię.
                        </p>
                            <a href="ts3server://ts.virtual-gaming.eu" class="btn btn-outline-primary btn-vge m-1">Przejdź na Serwer</a>
                            <a href="/regulamin" target="_blank" class="btn btn-outline-primary btn-vge m-1">Regulamin Serwera</a>
                    </div>
                </div>
                <div class="card bg-dark text-center">
                    <div class="vge-text-center card-body">
                        <h1 id="partners" class="vge-header card-title">Współpraca</h1>
                        <p class="card-text">
                            <b>
                            Jesteśmy w sam raz do zadań specjalnych i mniej specjalnych</br>
                            Ooooo! Ale ładny kotek!
                            </b>
                            
                            </br></br>

                            Jesteśmy otwarci na współpracę różnej maści, więc organizacje, które są zainteresowane współpracą z nami, 
                            powinny zacząć od napisania, czym się zajmują i czego oczekują od współpracy z nami. 
                            Oferty współpracy przyjmujemy na naszej stronie
                            <span class="vge-link"><a href="https://facebook.com/virtualgamingEU" target="_blank">Facebook</a></span> 
                            lub na nasz e-mail <span class="vge-link"><a href="mailto:kontakt@virtual-gaming.eu">kontakt@virtual-gaming.eu</a></span><br><br>
                            Jeśli prezentujesz drużynę esportową to mamy gotową ofertę 
                            <span class="vge-link"><<?= getEnv('app.baseURL') ?>/partners" target="_blank>">tutaj</a></span>. 
                            Jeżeli oferta się podoba, 
                            to zapraszamy do kontaktu na naszym <span class="vge-link"><a href="ts3server://ts.virtual-gaming.eu">serwerze</a>
                            lub na 
                            <span class="vge-link"><a href="https://facebook.com/virtualgamingEU" target="_blank>">Facebook</a>.<br><br>
                            Dla drużyn esportowych jest też możliwość wysłania nam od razu zapytania o partnerstwo poprzez formularz <a href="<?= getEnv('app.baseURL') ?>/forms/esport">tutaj</a>
                        </p>
                            <a href="https://facebook.com/virtualgamingEU" target="_blank" class="btn btn-outline-primary btn-vge m-1">Przejdź na Facebook</a>
                            <a href="<?= getEnv('app.baseURL') ?>/partners" target="_blank" class="btn btn-outline-primary btn-vge m-1">Nasza Oferta</a>
                            <a href="<?= getEnv('app.baseURL') ?>/forms/esport" target="_blank" class="btn btn-outline-primary btn-vge m-1">Wyślij Formularz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="page-footer font-small vge-footer">
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
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
        <p class="logo text-center"><img src="/theme/img/cgpoweredbyvge.png" alt="Charity Games" class="img-fluid mt-3 w-25"></p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="bg-dark">
          <div class="card bg-dark">
            </div>
            <form action="/forms/tournament/submit" method="post">
              <div class="card-body">
                <h4>Dane Drużyny</h4>
                <div class="form-group">
                  <br/>
                  <label for="teamName">Nazwa Drużyny</label>
                  <input type="text" id="teamName" class="form-control form-control-sm" name="teamName" aria-describedby="teamNameHelp" >
                  <div id="teamNameHelp" class="form-text">Podaj pełną nazwę swojej drużyny. <br/> <span class="text-danger">* To pole jest wymagane</span></div> 
                </div>
                <div class="form-group">
                  <br/>
                  <label for="teamTag">TAG Drużyny</label>
                  <input type="text" id="teamTag" class="form-control form-control-sm" name="teamTag" aria-describedby="teamTagHelp" >
                  <div id="teamTagHelp" class="form-text">Podaj TAG swojej drużyny. <br/> <span class="text-danger">* To pole jest wymagane</span></div>  
                </div>
                <div class="form-group">
                  <br/>
                  <label for="teamFacebook">Facebook Drużyny</label>
                  <input type="text" id="teamFacebook" class="form-control form-control-sm" name="teamFacebook" aria-describedby="teamFacebookHelp" >
                  <div id="teamFacebookHelp" class="form-text">Podaj stronę Facebook swojej drużyny. <br/> <span class="text-danger">* To pole jest wymagane</span></div>
                  <br/>
                </div>
                <div class="form-group">
                  <br/>
                  <label for="teamLeader">Kontakt Facebook Lidera</label>
                  <input type="text" id="teamLeader" class="form-control form-control-sm" name="teamLeader" aria-describedby="teamLeaderHelp" >
                  <div id="teamLeaderHelp" class="form-text">Podaj adres do profilu Facebook lidera w celu kontaktu.</div>
                </div>
                <div class="form-group">
                  <br/>
                  <label for="teamLogo">Logo Drużyny</label>
                  <input type="file" id="teamLogo" class="form-control form-control-sm" name="teamLogo" aria-describedby="teamLogoHelp" >
                  <div id="teamLogoHelp" class="form-text">Wyślij Logo swojej drużyny.  <br/> <span class="text-danger">* To pole jest wymagane</span></div>
                </div>
                <br/>
                <h4>Trener</h4>
                  <hr>
                <div class="form-group">
                  <label for="teamCoach">Nick w Grze Trenera</label>
                  <input type="text" id="teamCoach" class="form-control form-control-sm" name="teamCoach" aria-describedby="teamCoachHelp" >
                  <div id="teamCoachHelp" class="form-text">Podaj nick w grze Trenera.</div>
                </div>
                <br/>
                <div class="form-group">
                  <label for="teamCoachSteam">Profil Steam Trenera</label>
                  <input type="text" id="teamCoachSteam" class="form-control form-control-sm" name="teamCoachSteam" aria-describedby="teamCoachSteamHelp" >
                  <div id="teamCoachSteamHelp" class="form-text">Podaj link do profilu steam Trenera.</div>
                </div>
                <br/>
                <h4>Gracze</h4>
                  <hr>
                  <div class="form-group">
                  <label for="teamPlayers">Nick Graczy w Grze</label>
                  <textarea id="teamPlayers" class="form-control form-control-sm" name="teamPlayers" aria-describedby="teamPlayersHelp" rows="6" ></textarea>
                  <div id="teamPlayersHelp" class="form-text">Podaj nick każdego gracza, każdy gracz musi znajdować się w nowej linijcie.  <br/> <span class="text-danger">* To pole jest wymagane, maksymalna ilość graczy to 7</span></div>
                </div>
                <br/>
                <div class="form-group">
                  <label for="teamPlayersSteam">Profile Steam Graczy</label>
                  <textarea type="text" id="teamPlayersSteam" class="form-control form-control-sm" name="teamPlayersSteam" aria-describedby="teamPlayersSteamHelp" rows="6" ></textarea>
                  <div id="teamPlayersSteamHelp" class="form-text">Podaj profil Steam każdego gracza, każdy gracz musi znajdować się w nowej linijcie. <br/> <span class="text-danger">* To pole jest wymagane, maksymalna ilość graczy to 7</span></div>
                </div>
                <br/>
                <div class="form-group">
                  <label for="teamPlayersFaceit">Profile FaceIt Graczy</label>
                  <textarea type="text" id="teamPlayersFaceit" class="form-control form-control-sm" name="teamPlayersFaceit" aria-describedby="teamPlayersFaceitHelp" rows="6"></textarea>
                  <div id="teamPlayersFaceitHelp" class="form-text">Podaj profil FaceIt każdego gracza, każdy gracz musi znajdować się w nowej linijcie. <br/> <span class="text-danger">* To pole jest wymagane, maksymalna ilość graczy to 7</span></div>
                </div>
                <div id="otherErrors">

                </div>
              </div>
              <div class="card-footer">
                <button id="submitTeam" class="btn btn-success">Wyślij Zgłoszenie</button>
              </div>
            </form>
            <div id="successMessage" class="card-body text-success text-center h5 d-none">
              <p></p>
              <a href="ts3server://ts.virtual-gaming.eu"><button class="btn btn-outline-primary btn-vge m-1">Wejdź Na Serwer TS3 VGE!</button></a>
              <a href="https://www.facebook.com/risingstarses" target="_blank" ><button class="btn btn-outline-primary btn-vge m-1">Masz Pytania? Pisz Tutaj!</button></a>
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


<script>

let siteUrl = "<?= getEnv('app.baseURL') ?>";

function trimSteamURL(url) {
  var regex = /https:\/\/steamcommunity\.com\/profiles\/*/g;

  if(regex.test(url)) {
    url = url.replace(regex, "");
  } else {
    url = url.replace(/https:\/\/steamcommunity\.com\/id\/*/g, "");
  }

  return url;
}

function pushPlayersToFormData(field, players) {
  if(players !== "") {
    players = players.replace(/\n/g, " ").split(/\s+/);
    var array = [];
    for (var i=0;i < players.length; i++) {
      if(/\S/.test(players[i])) {
        trimSteamURL(players[i]);
        array.push($.trim(players[i]));
      }
    }

    
    //Convert to json string so we can handle it easier in back-end
    array = JSON.stringify(array);

    formData.set(field, array);

    return array;
  };
};

$(function() {
  $('form').submit(function(event) {
    event.preventDefault();

    //Restore input helpers in case they were edited
    $('.form-text').each(function() {
      $(this).children('.invalid-feedback').remove();
    });

    $('input, textarea').removeClass('is-invalid');

    //Clear #otherErrors
    $('#otherErrors').text('');

    //Disable button
    $('#submitTeam').attr('disabled', true);
    $('#submitTeam').html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> <span class=''>Wysyłanie...</span>");

    //Get form and create FormData, using DOM because FormData() get's angry about jquery
    var form = document.querySelector('form');

    formData = new FormData(form);

    //Convert players data to arrays and replace in FormData
    pushPlayersToFormData('teamPlayers', $('#teamPlayers').val());
    pushPlayersToFormData('teamPlayersSteam', $('#teamPlayersSteam').val());
    pushPlayersToFormData('teamPlayersFaceit', $('#teamPlayersFaceit').val());

    $.ajax({
      type: form.getAttribute('method'),
      url: form.getAttribute('action'),
      data: formData,
      processData: false,
      contentType: false,
    }).done(function(data) {
      //Parse data to json for easier response handling
      var data = JSON.parse(data);
      
      //Check if response was invalid and if true display errors
      if(data.status === 'invalid')
      {
        console.log(data);
        for(error in data.errors) {
          $(`#${error}`).addClass('is-invalid');
          $(`#${error}Help`).append(`<div class='invalid-feedback d-block'>${data.errors[error]}</div>`);
        }

        //Re-enable button
        $('#submitTeam').attr('disabled', false);
        $('#submitTeam').html("Wyślij Zgłoszenie");
        
        $('#otherErrors').addClass('invalid-feedback d-block').text(data.message);
      } else if (data.status === 'success')
      {
        $('form').addClass('d-none');
        $('#successMessage').removeClass('d-none').children('p').text(data.message);
      } else {
        //Re-enable button
        $('#submitTeam').attr('disabled', false);
        $('#submitTeam').html("Wyślij Zgłoszenie");
        
        $('#otherErrors').addClass('invalid-feedback d-block').text(data.message);
      }

    }).fail(function(data) {
      //Re-enable button
      $('#submitTeam').attr('disabled', false);
      $('#submitTeam').html("Wyślij Zgłoszenie");
      
      $('#otherErrors').addClass('invalid-feedback d-block').text(data.message);
    });
  });
});

</script>

  </footer>
  <!-- Footer -->
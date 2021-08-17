<style>
  table {
    width: 80%;
    word-wrap: break-word;
  }

  body {
    width: 750px;
    max-width: 800px;
    height: 100vh;
  }

  @media (max-width: 480px) {
    body {
      width: 80vw;
      max-width: 100vw;
    }
  }
</style>
<body>
    <h1>Prośba o Partnerstwo - <?= esc($team_name) ?>
<p style="font-size: 10pt; margin-bottom: 5pt; font-family: arial; margin-top: 0pt">
		
  <table cellSpacing=0 cellPadding=0 >
    <tbody>
      <tr>
        <td style="font-size: 9pt; font-family: arial; width: 80px; color: #000000" vAlign=top>Imię/Nick Lidera:</td>
        <td style="font-size: 9pt; font-family: arial; width: 175px; color: #000000" vAlign=top><strong><?= esc($leader_name) ?></strong></td>
      </tr>
      <tr>
        <td style="font-size: 9pt; font-family: arial; width: 80px; color: #000000" vAlign=top>UID Lidera:</td>
        <td style="font-size: 9pt; font-family: arial; width: 175px; color: #000000" vAlign=top><strong><?= esc($leader_uid) ?></strong></td>
      </tr>
      <tr>
        <td style="font-size: 9pt; font-family: arial; width: 80px; color: #000000" vAlign=top>Adres e-mail Lidera:</td>
        <td style="font-size: 9pt; font-family: arial; width: 175px; color: #000000" vAlign=top><strong><?= esc($leader_email) ?></strong></td>
      </tr>
      <tr>
        <td style="font-size: 9pt; font-family: arial; width: 80px; color: #000000" vAlign=top>Nazwa Drużyny:</td>
        <td style="font-size: 9pt; font-family: arial; width: 175px; color: #000000" vAlign=top><strong><?= esc($team_name) ?></strong></td>
      </tr>
      <tr>
        <td style="font-size: 9pt; font-family: arial; width: 80px; color: #000000" vAlign=top>TAG Drużyny:</td>
        <td style="font-size: 9pt; font-family: arial; width: 175px; color: #000000" vAlign=top><strong><?= esc($team_tag) ?></strong></td>
      </tr>
      <tr>
        <td style="font-size: 9pt; font-family: arial; width: 80px; color: #000000" vAlign=top>Strona Facebook Drużyny:</td>
        <td style="font-size: 9pt; font-family: arial; width: 175px; color: #000000" vAlign=top><strong><?= esc($team_facebook) ?></strong></td>
      </tr>
    </tbody>
  </table>
</p>
</body>
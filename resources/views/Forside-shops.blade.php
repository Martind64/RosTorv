<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <title>Ro's Torv Forside</title>
</head>
<body>
<p>For later:
if user.role = admin
include('header') 
else</p>
  @include('header-user') 
  <div class="col-md-2 text-left">
  </div>
  <div class="col-md-8 ">
      <div>
        <input type="text" disabled="disabled" value="" name="Butiksnavn">
      </div>
  <div class="row">
    <div class="btn text">

    </div>
  </div>
    <div class="row text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h2 class="panel-heading text-left">Tilbud</h2>
        </div>
        <table class="table">
          <thead>
          <tr>
            <th>
                    <div class="text-left">
        <button type="button" class="btn-success " style="width: 200px; height: 40px;">
        <span class="glyphicon glyphicon-plus"></span> Tilføj nyt tilbud</button>
            </th>
            <th>
            
            </th>
            <th>

            </th>
            <th class="text-right">
              <button type="button" class="btn-danger" style="width: 200px; height: 40px;">
              <span class="glyphicon glyphicon-minus"></span> Delete Tilbud</button>            
            </th>            
          </tr>
          <tr>
            <td>
              Navn
            </td>
            <td>
              Beskrivelse
            </td>
            <td>
              Fra
            </td>
            <td>
              Til
            </td>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Mindre langt</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-2">
<!--   <br>
  <br>
      <div class="text-left">
        <button type="button" class="btn-success" style="width: 200px; height: 40px;">
        <span class="glyphicon glyphicon-plus"></span>Tilføj nyt tilbud?</button>
  <br>
  <br>
        <button type="button" class="btn-success" style="width: 200px; height: 40px;">
        <span class="glyphicon glyphicon-plus"></span>Delete Tilbud</button>            
      </div>

  </div> -->
</body>


<style type="text/css">
.forsideheader {
      padding: 1em;
    color: white;
    background-color: white;
    clear: left;
    text-align: center;
}
</style>

</html>
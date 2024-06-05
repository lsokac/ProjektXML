<?php

$podaci= json_decode(file_get_contents('podaci.json'), true);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Projekt</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  
    <nav class="header-nav">
      <ul class="nav-list">
        <li class="nav-list-item">
          <a href="#" class="nav-list-link">Naslovnica</a>
        </li>
        <li class="nav-list-item">
          <a href="#" class="nav-list-link">O nama</a>
        </li>
        <li class="nav-list-item">
          <a href="#" class="nav-list-link">Ponuda</a>
        </li>
        <li class="nav-list-item">
          <a href="#" class="nav-list-link">Kontakt</a>
        </li>
      </ul>
    </nav> 
    

    <div class="container">

    
    <table class="table">
            <thead>
                <tr>
                    <th>Oznaka</th>
                    <th>Naziv</th>
                    <th>Cijena</th>
                    <th>Slika</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($podaci as $p): ?>
                    <tr>
                        <td class="align-middle"><?= $p['oznaka']; ?></td>
                        <td class="align-middle"><?= $p['naziv']; ?></td>
                        <td class="align-middle"><?= $p['cijena']; ?></td>
                        <td class="align-middle"><img src="<?= $p['url']; ?>"</td>
                        <td class="align-middle"><button>Dodaj u kosaricu</button></td>
                        
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        
      </div>     
      <footer>
        <span>Luka Sokač</span>
      </footer>      
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

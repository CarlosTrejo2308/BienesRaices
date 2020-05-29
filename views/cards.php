<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cartas</title>
    <link rel="stylesheet" href="cardscss.css">
  </head>
  <body>

    <div class="container">

      <div class="row">
        <div class="card">
          <img src="../includes/img/house0.jpg" width="70%">
        </div>
        <div class="card">
          <!-- <img src="http://placehold.it/200x150"> -->
          <p class="card-text">Autor: sjdfdjfd <br> Vendido: No <br> Cuartos: 2 <br> Banos: 0 <br> Precio: $99999</p>
        </div>
         <div class="card">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7206.247157524196!2d-100.97507202058576!3d25.43413168599915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDI2JzA4LjUiTiAxMDDCsDU4JzMxLjMiVw!5e0!3m2!1sen!2smx!4v1590717816612!5m2!1sen!2smx" width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <p>Saltillo, Coah, Mexico</p>
          <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
        </div>
      </div>

      <div class="row">
        <div class="card">
          <img src="../includes/img/house1.jpg" width="70%">
        </div>
        <div class="card">
          <!-- <img src="http://placehold.it/200x150"> -->
          <p class="card-text">Autor: sjdfdjfd <br> Vendido: No <br> Cuartos: 2 <br> Banos: 0 <br> Precio: $99999</p>
        </div>
         <div class="card">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7206.247157524196!2d-100.97507202058576!3d25.43413168599915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDI2JzA4LjUiTiAxMDDCsDU4JzMxLjMiVw!5e0!3m2!1sen!2smx!4v1590717816612!5m2!1sen!2smx" width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <p>Saltillo, Coah, Mexico</p>
          <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
        </div>
      </div>

      <?php
      $html = '<div class="row">
        <div class="card">
          <img src="../includes/img/house1.jpg" width="70%">
        </div>
        <div class="card">
          <!-- <img src="http://placehold.it/200x150"> -->
          <p class="card-text">Autor: sjdfdjfd <br> Vendido: No <br> Cuartos: 2 <br> Banos: 0 <br> Precio: $99999</p>
        </div>
         <div class="card">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7206.247157524196!2d-100.97507202058576!3d25.43413168599915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDI2JzA4LjUiTiAxMDDCsDU4JzMxLjMiVw!5e0!3m2!1sen!2smx!4v1590717816612!5m2!1sen!2smx" width="200" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <p>Saltillo, Coah, Mexico</p>
          <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
        </div>
      </div>';
      $dom = new DomDocument();
      $dom->loadHTML($html);

      // $node = $dom->getElementsByTagName('div')->item(0); // your div to append to
      //
      // $fragment = $dom->createDocumentFragment();
      // $fragment->appendXML('<ul><li>some items</li><li>some items</li><li>some items</li></ul>');
      //
      // $node->appendChild($fragment);
      //
      echo $dom->saveHTML();
       ?>

    </div>
  </body>
</html>

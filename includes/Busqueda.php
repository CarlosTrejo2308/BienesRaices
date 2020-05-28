<form action="../controller/lookup.php" method="post" onsubmit="">
  <div class="row">
    <div class="lupa">
      <img src="../includes/img/img_lupa.png">
    </div>
    <div class="encuentra_tu_casa">
      <img src="../includes/img/encuentra tu  futura propiedad .png">
    </div>
  </div>
  <br>
  <label>Ciudad y Estado, o C.P.</label>
  <input type="text" name="CEoCP">

  <label>Rango De Busqueda</label><br>
  <select name = "rango">
    <option value="0">Sin Rango</option>
    <option value="1">5km</option>
    <option value="2">10km</option>
    <option value="3">20km</option>
  </select>

  <label>Rango de Precio De : - A:</label>
  <div class="row">
    <div class="De">
      <select name = "precio_min">
        <option value="0">Todos</option>
        <option value="1">100,000</option>
        <option value="2">500,000</option>
        <option value="3">1,000,000</option>
        <option value="4">2,000,000</option>
      </select>
    </div>
    <div class="A">
      <select name = "precio_max">
        <option value="0">Todos</option>
        <option value="1">100,000</option>
        <option value="2">500,000</option>
        <option value="3">1,000,000</option>
        <option value="4">2,000,000</option>
      </select>
    </div>
  </div>

  <label>Recámara(s)</label><br>
  <select name = "rooms">
    <option value="0">No importa.</option>
    <option value="1">3</option>
    <option value="2">4</option>
    <option value="3">5</option>
  </select>

  <br><label>Baño(s)</label><br>
  <select name = "baths">
    <option value="0">No importa.</option>
    <option value="1">1</option>
    <option value="2">1 y medio</option>
    <option value="3">2</option>
    <option value="4">3</option>
  </select>
  <div class="row">
    <div class="buton_busqueda">
      <input type="submit" value="Buscar">
    </div>
  </div>
</form>

<?php 
function getStars($hotel) {
  // Numero totale di stelle (5 stelle)
  $total_stars = 5;

  // Creazione delle stelle piene
  for ($i = 0; $i < $hotel['vote']; $i++) {
    echo '<i class="fa-solid fa-star"></i>';
  }

  // Creazione delle stelle vuote (se necessario)
  for ($i = $hotel['vote']; $i < $total_stars; $i++) {
    echo '<i class="far fa-star"></i>';
  }
}
?>

<table class="table table-dark table-striped ">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">description</th>
        <th scope="col">parking</th>
        <th scope="col">vote</th>
        <th scope="col">distance to center</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($hotels_foreach as $hotel) {
        echo "<tr> 
        <td class='table-dark'>{$hotel['name']}</td> 
        <td class='table-dark'>{$hotel['description']}</td> 
        <td class='table-dark'>
          {$hotel['parking']}
          <div class=\"" . ($hotel['parking']   ? 'circle-green' : 'circle-red') . "\"></div>
        </td> 
        <td class='table-dark'>
          {$hotel['vote']}
          <div class=\"" . getStars($hotel) . ' prova' . "\" ></div>
        </td> 
        <td class='table-dark'>{$hotel['distance_to_center']}</td>
        </tr>";
        }
      ?>

    </tbody>
</table>
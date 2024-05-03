<?php 
function getStars($hotel) {
  $total_stars = 5;
  $stars_html = ''; 

  for ($i = 0; $i < $hotel['vote']; $i++) {
    $stars_html .= '<i class="fa-solid fa-star text-warning "></i>';
  }

  for ($i = $hotel['vote']; $i < $total_stars; $i++) {
    $stars_html .= '<i class="far fa-star"></i>';
  }

  return $stars_html; 
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
        <td class='table-dark'><a href='details/hotelpage.php?id={$hotel['id']}'> {$hotel['name']}</td> 
        <td class='table-dark'>{$hotel['description']}</td> 
        <td class='table-dark'>
          <div class=\"" . ($hotel['parking']   ? 'circle-green' : 'circle-red') . "\"></div>
        </td> 
        <td class='table-dark'>
          <div class=\"stars-container\">" . getStars($hotel) . "</div> 
        </td> 
        <td class='table-dark'>{$hotel['distance_to_center']} km</td>
        </tr>";
        }
      ?>

    </tbody>
</table>
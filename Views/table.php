<table class="table table-striped">
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
        echo "<tr> <td>{$hotel['name']}</td> <td>{$hotel['description']}</td> 
        <td>{$hotel['parking']}
          <i class=\"" . ($hotel['parking']  ? 'fa-solid fa-square-check' : 'fa-solid fa-square-xmark') . "\"></i>
        </td> 
        <td>{$hotel['vote']}</td> 
        <td>{$hotel['distance_to_center']}</td>
        </tr>";
        }
      ?>

    </tbody>
</table>
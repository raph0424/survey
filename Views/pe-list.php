<?php
  //var_dump($result);

  // affichage
  echo
  "<table class ='table table-white'>
  <thead>
    <tr>
      <th scope='col'>id personne</td>
      <th scope='col'>nom</td>
      <th scope='col'>prenom</td>
      <th scope='col'>email</td>
    </tr>
  </thead>
  ";

  foreach ($result as $unResultat) {
    echo
    "<tr>
      <td>".$unResultat['id_personne']."</td>
      <td>".$unResultat['nom']."</td>
      <td>".$unResultat['prenom']."</td>
      <td>".$unResultat['email']."</td>
    </tr>";
  }
  echo "</table>";
?>
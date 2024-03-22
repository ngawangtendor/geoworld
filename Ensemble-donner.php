<?php

 
?>

<div class="containes">
<h1>Les pays en Ciel <?php echo $continent; ?></h1>
<div>
 <table class="table">
     <tr>
      <th>ID</th>
      <th>Drapeau</th>
      <th>Nom</th>
      <th>Population</th>
      <th>Continent</th>
      <th>SurfaceArea</th>
      <th>Capital</th>
       
     </tr>
   <?php
   // $desPays est un tableau dont les éléments sont des objets représentant
   // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
   
   foreach($desPays as $pays){ ?>
      <tr>
        <td> <?php echo $pays->id ?></td>
        <td> <img src="images/drapeau/<?php echo strtolower($pays->Code2) ?>.png"></td>
        <td> <a href="Ensemble-donner.php"> <?php echo $pays->Name ?></a></td>
        <td> <?php echo $pays->Population ?></td>
        <td> <?php echo $pays->Continent ?></td>
        <td> <?php echo $pays->SurfaceArea ?></td>
        <td> <?php if (!empty (getCountriesCAPITAL($pays->Capital))) {echo getCountriesCAPITAL($pays->Capital); } else{echo "NUL";} ?></td>
      </tr>
    <?php } ?>

 </table>
</div>








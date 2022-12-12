<?php foreach ($commande as $com): ?>
    <h1> <?= $com->produit->nom ?> </h1>
    <h1> <?= $this->Html->image($com->produit->photo, ["alt" => "photo"]); ?> </h1>
    <h1> <?= $com->produit->description ?> </h1>
<?php endforeach ?>
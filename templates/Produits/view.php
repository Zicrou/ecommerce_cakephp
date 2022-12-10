<?php

use Cake\Routing\Router;
?>
<h1> <?= h($produit->nom) ?> </h1>
<p> <?= h($produit->description)  ?> </p>
<p><small> <?= $produit->created->format(DATE_RFC850) ?> </small></p>
<p> <?= $produit->photo ?> </p>

<p> <?= $this->Html->link("Edit", ["action" => "edit", $produit->slug]) ?> </p>
<p> <?= $this->Html->link("CommandeR", ["controller" => "commandes","action" => "add", $produit->slug]) ?> </p>

<?= $this->Form->create($commande, ["url" => ["controller" => "Commandes", "action" => "add"]]) ?>
    <?= $this->Form->hidden('produit_id', ["value" => $produit->id]);  ?>
    <?= $this->Form->button("Commander"); ?>
<?= $this->Form->end(); ?>
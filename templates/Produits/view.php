<br>
<p> <?= $this->Html->link("Edit", ["action" => "edit", $produit->slug]) ?> </p>
<h1> <?= h($produit->nom) ?> </h1>
<p><small> <?= $produit->created->format(DATE_RFC850) ?> </small></p>
<p> <?= $this->Html->image($produit->photo, ["alt" => "photo"]); ?> </p>
<br>
<p><?= h($produit->description)  ?> </p>


<hr>
    <?= $this->Form->create($commande, ["url" => ["controller" => "Commandes", "action" => "add"]]) ?>
    <?= $this->Form->hidden('produit_id', ["value" => $produit->id]);  ?>
    <?= $this->Form->button("Commander"); ?>
    <?= $this->Form->end(); ?>
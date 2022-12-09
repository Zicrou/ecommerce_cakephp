<h1> <?= h($produit->nom) ?> </h1>
<p> <?= h($produit->description)  ?> </p>
<p><small> <?= $produit->created->format(DATE_RFC850) ?> </small></p>
<p> <?= $produit->photo ?> </p>

<p> <?= $this->Html->link("Edit", ["action" => "edit", $produit->slug]) ?> </p>


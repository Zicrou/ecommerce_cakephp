<h1>Produits</h1>
<?= $this->Html->link("Ajouter un produit", ["action" => "add"]) ?>
<table>
    <tr>
        <th>Nom</th>
        <th>photo</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
    
    <?php foreach ($produits as $produit): ?>
        <tr>
            <td>
                <?= $this->Html->link($produit->nom, ["action" => "view", $produit->slug]) ?>
            </td>
            <td>
                <?= $this->Html->image($produit->photo, ["alt" => "photo"]); ?>
            </td>
            <td>
                <?= $produit->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $this->Html->link("Editer", ["action" => "edit", $produit->slug]) ?>
                <?= $this->Form->postLink("Delete", ["action" => "delete", $produit->slug], ["confirm" => "Etes-vous sur?"]) ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>


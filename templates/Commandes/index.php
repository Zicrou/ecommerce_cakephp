<h1>Commandes</h1>
<table>
    <tr>
        <th>Produit</th>
        <th>User</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>
    
    <?php foreach ($commandes as $commande): ?>
        <tr>
            <td>
                <?= $this->Html->link($commande->produit->nom, ["action" => "view",  $commande->produit_id]) ?>
            </td>
            <td>
            <?= $commande->user->email ?>
            </td>
            <td>
                <?= $commande->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $commande->modified->format(DATE_RFC850) ?>
            </td>
            <td>
                
            </td>
        </tr>
    <?php endforeach ?>
</table>


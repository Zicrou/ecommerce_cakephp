<h1>Commandes</h1>
<table>
    <tr>
        <th>Produit ID</th>
        <th>User ID</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>
    
    <?php foreach ($commandes as $commande): ?>
        <tr>
            <td>
                <?= $this->Html->link($commande->produit_id, ["action" => "view",  $commande->produit_id]) ?>
            </td>
            <td>
            <?= $this->Html->link($commande->user_id, ["action" => "view",  $commande->user_id]) ?>
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

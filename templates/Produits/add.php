<h1>Ajouter un produit</h1>

<?php

    echo $this->Form->create($produit);

    echo $this->Form->control("nom");
    echo $this->Form->control("description");
    echo $this->Form->control("photo");

    echo $this->Form->button("Valider");
    echo $this->Form->end();
?>
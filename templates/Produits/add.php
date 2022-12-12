<h1>Ajouter un produit</h1>

<?php

    echo $this->Form->create($produit, ["type" => "file"]);

    echo $this->Form->control("nom");
    echo $this->Form->control("description");
    echo $this->Form->control("photo_file", ["type" => "file"]);

    echo $this->Form->button("Valider");
    echo $this->Form->end();
?>
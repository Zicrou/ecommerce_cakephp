<?php

namespace App\Controller;

class CommandesController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $commandes = $this->Paginator->paginate($this->Commandes->find());    
        $this->set(compact('commandes'));
    }

    public function view($id = null)
    {
        $commande = $this->Commandes->findByProduitId($id, ['contain' => ['Produits']])->all();
        
        //$produit = $Produit->findBySlug($slug)->firstOrFail();
        //$article = $articles->get($id);
        //$produit = $this->Produits->get(1)->firstOrFail();
        $this->set(compact('commande'));
    }

    public function add()
    {
        $commande = $this->Commandes->NewEmptyEntity();
        if ($this->request->is("post")) 
        {
            $commande = $this->Commandes->patchEntity($commande, $this->request->getData());

            if ($this->Commandes->save($commande))
            {
                $this->Flash->success("Votre commande à été sauvegardé!");
                return $this->redirect(["action" => "index"]);
            }
            $this->Flash->error("Impossible d'ajouter votre commande.");
        }
        $this->set(compact("commande"));
    }

    public function edit($slug)
    {
        $commande = $this->Commandes->findBySlug($slug)->firstOrFail();

        if ($this->request->is(["post", "put"])) 
        {
            $commande = $this->Commandes->patchEntity($commande, $this->request->getData());
            
            if ($this->Commandes->save($commande))
            {
                $this->Flash->success("Votre commande à été modifié!");
                return $this->redirect(["action" => "index"]);
            }
            $this->Flash->error("Impossible de modifier votre commande.");
        }
        $this->set(compact("commande"));
    }

    public function delete($slug)
    {
        $this->request->allowMethod(["post", "delete"]);
        
        $commande = $this->Commandes->findBySlug($slug)->firstOrFail();
        
        if ($this->Commandes->delete($commande)) {
            $this->Flash->success(__('Les données de "{0}" ont été supprimé!', $commande->nom) );
            return $this->redirect(["action" => "index"]);
        }
    }
}
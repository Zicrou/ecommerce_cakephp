<?php

namespace App\Controller;

class ProduitsController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $produits = $this->Paginator->paginate($this->Produits->find());    
        $this->set(compact('produits'));
    }

    public function view($slug = null)
    {
        $produit = $this->Produits->findBySlug($slug)->firstOrFail();
        $commande = null;
        $this->set(compact('produit', 'commande'));
    }

    public function add()
    {
        $produit = $this->Produits->NewEmptyEntity();
        if ($this->request->is("post")) 
        {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());

            if ($this->Produits->save($produit))
            {
                $this->Flash->success("Votre produit à été sauvegardé!");
                return $this->redirect(["action" => "index"]);
            }
            $this->Flash->error("Impossible d'ajouter votre produit.");
        }
        $this->set(compact("produit"));
    }

    public function edit($slug)
    {
        $produit = $this->Produits->findBySlug($slug)->firstOrFail();

        if ($this->request->is(["post", "put"])) 
        {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());
            
            if ($this->Produits->save($produit))
            {
                $this->Flash->success("Votre produit à été modifié!");
                return $this->redirect(["action" => "index"]);
            }
            $this->Flash->error("Impossible de modifier votre produit.");
        }
        $this->set(compact("produit"));
    }

    public function delete($slug)
    {
        $this->request->allowMethod(["post", "delete"]);
        
        $produit = $this->Produits->findBySlug($slug)->firstOrFail();
        
        if ($this->Produits->delete($produit)) {
            $this->Flash->success(__('Les données de "{0}" ont été supprimé!', $produit->nom) );
            return $this->redirect(["action" => "index"]);
        }
    }
}
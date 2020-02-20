<?php
include 'Modele/Commentaire.php';
include 'Vue/Vue.php';

class ControleurCommentaire {
    private $commentaire;
    public function __construct() {
        $this->commentaire = new Commentaire();
    }

    public function commentaire() {
        $commentaires = $this->commentaire->getAllCommentaires(); 
        $vue = new Vue("Commentaire");
        $vue->generer(array('commentaires' => $commentaires));        
    }
}
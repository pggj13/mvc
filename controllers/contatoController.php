<?php

class contatoController extends Controller{
    
    public function index() {
        
        $dados = array();
        
        $this->loadTemplate('contatos', $dados);
        
    }
    
}


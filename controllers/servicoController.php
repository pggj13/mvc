<?php

class servicoController extends Controller{
    
    public function index() {
        
        $dados = array();
        
        $this->loadTemplate('servicos', $dados);
        
    }
    
}

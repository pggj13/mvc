<?php


class fotografiaController extends Controller{
    
    public function index() {
        
        $dados = array();
        
        $fotografias = new fotografia();
        $dados['fotografias'] =  $fotografias->getTrabalhos();
        
        $this->loadTemplate('fotografias', $dados);
        
    }
    
}

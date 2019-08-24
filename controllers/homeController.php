<?php


class homeController extends Controller{
    
    public function index() {
        
        $dados = array();
        
        $fotografias = new fotografia();
        $dados['fotografias'] =  $fotografias->getTrabalhos(8);
        
        $this->loadTemplate('home', $dados);
        
    }
    
}

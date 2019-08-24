<?php

class noticiaController extends Controller {
    
    public function index() {
        
        $dados = array();
        
        $this->loadView('noticias', $dados);
        
    }
}

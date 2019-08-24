<?php

class Cache {

    public function is_valido($cache) {

        $ultimaalteracao = filemtime($cache);
        $c = time() - $ultimaalteracao;

        if ($c > 10) {
            return FALSE;
        } else {
            return true;
        }
    }

}

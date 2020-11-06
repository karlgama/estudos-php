<?php
class TocadorDeMusica{
    private $musicas;

    public function __construct()
    {
        $this->musicas = new SplDoublyLinkedList();
    }

    public function adicionarMusicas(SplFixedArray $musicas) {
        foreach($musicas as $musica){            
            $this->musicas->push($musica);
        }
        $this->musicas->rewind();
    }

    public function tocarMusica(){
        if($this->musicas->isEmpty()) {
            echo "erro nenhuma música adicionada";
        }
        echo "Tocando: " . $this->musicas->current();
    }

    public function addMusica($musica) {
        $this->musicas->push($musica);
    }
}
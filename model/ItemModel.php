<?php

class ItemModel{
    
    public function excluirItem($quantidade){
        $sql = "DELETE FROM item WHERE quantidade =:quantidade";

    }
}
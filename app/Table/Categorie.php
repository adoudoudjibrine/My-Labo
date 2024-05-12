<?php

namespace App\Table;


class Categorie extends Table {

    protected static $table = 'categories';

    public function getUrl()
    {
        return 'index.php?p=categories&id=' . $this->id;
    }
}
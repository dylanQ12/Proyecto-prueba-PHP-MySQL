<?php

namespace Model;

class Product extends ActiveRecord
{
    protected static $table = "products";
    protected static $columnsDB = ['id', 'name', 'description', 'quantity', 'price', 'stock'];

    public $id;
    public $name;
    public $description;
    public $quantity;
    public $price;
    public $stock;
}

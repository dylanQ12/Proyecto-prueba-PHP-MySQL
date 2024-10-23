<?php

namespace Controllers;

use Model\Product;
use MVC\Router;

class ProductController
{

    public static function index(Router $router)
    {
        $products = Product::all();

        $router->render("templates/products/index", [
            "title" => "Productos",
            "products" => $products,
            "colums" => [
                'ID',
                'Nombre',
                'Descripción',
                'Precio',
                'Cantidad'
            ]
        ]);
    }


    public static function create(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = new Product($_POST);
            $product->name = $_POST['name'];
            $product->description = $_POST['description'];
            $product->price = $_POST['price'];
            $product->quantity = $_POST['quantity'];
            $product->stock = $_POST['stock'];
            $product->guardar();

            return Product::redirect("/");
        }
        $router->render("templates/products/create", [
            "title" => "Crear Producto",
        ]);
    }


    public static function update(Router $router)
    {
        $id = $_GET['id'] ?? null;

        $product = Product::find($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product->name = $_POST['name'];
            $product->description = $_POST['description'];
            $product->price = $_POST['price'];
            $product->quantity = $_POST['quantity'];
            $product->stock = $_POST['stock'];

            $product->guardar();
            return Product::redirect("/");
        }

        $router->render("templates/products/edit", [
            "title" => "Editar Producto",
            "product" => $product
        ]);
    }


    public static function delete()
    {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $product = Product::find($id);

            if ($product) {
                $product->delete();
                return Product::redirect("/");
            } else {
                return Product::redirect("/?error=Producto no encontrado");
            }
        }
        Product::redirect("/");
    }
}

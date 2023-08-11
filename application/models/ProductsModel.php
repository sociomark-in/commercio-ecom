<?php
class ProductsModel extends CI_Model
{
    public function create()
    {
    }
    public function update(array $request)
    {
    }
    public function delete(array $request)
    {
    }
    public function get()
    {
        $response = [
            "products" => [
                [
                    "title" => "Product Title",
                    "price" => "4499.99",
                    "locale" => BASE_LOCALE
                ],
                [
                    "title" => "Product Title",
                    "price" => "9959.99",
                    "locale" => BASE_LOCALE
                ],
            ]
        ];

        return json_encode($response);
    }
}

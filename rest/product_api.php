<?php

// Get a list of products
dispatch_get('/products', 'get_produts');
function get_produts()
{
    $product1 = array(
        1,
        'newbox',
        'very good box',
        45.33,
        'games'
    );
    $product2 = array(
        2,
        'go phone',
        'nice smart phone',
        511.10,
        'phones'
    );
    $product3 = array(
        3,
        'hiphone',
        'the new top on phones',
        647,
        'phones'
    );
    $product4 = array(
        4,
        'greenbox',
        'an eco box',
        47.55,
        'games'
    );
    $product5 = array(
        5,
        'xiphone',
        'the new chinese and cheap phone',
        30.10,
        'phones'
    );
    $products = array($product1, $product2, $product3, $product4, $product5);
    echo json_encode($products);
	die;
}

// Get an individual product
dispatch_get('/products/:product_id', 'get_product');
function get_product()
{
    $product_id = params('product_id');
    // Do something to get a product
    $product = "product with id: $product_id";
    return $product;
}

// Create a new product
dispatch_post('/products', 'create_product');
function create_product()
{
    $success = TRUE;
    // Do something to create a product
    echo 'a new product was created!!!!';
    if ($success) {
        status(201);
    } else {
        halt(422, 'Could not create product');
    }
}

// Update an individual product
dispatch_put('/products/:product_id', 'update_product');
function update_product()
{
    $success = true;
    $product_id = params('product_id');
    // Do something to get a product and update
    echo "product with id: $product_id updated!!!";
    if ($success) {
        status(201);
    } else {
        halt(422, 'Could not update product');
    }
}

// Update an individual product
dispatch_delete('/products/:product_id', 'delete_product');
function delete_product()
{
    $success = True;
    $product_id = params('product_id');
    // Do something to delete a product
    echo "product $product_id removed!!!";
    if ($success) {
        status(201);
    } else {
        halt(422, 'Could not update product');
    }
}



run();
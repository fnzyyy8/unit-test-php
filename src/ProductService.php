<?php

namespace Rrim\PhpUnitTesting;

use Rrim\PhpUnitTesting\Product;
use Rrim\PhpUnitTesting\ProductRepository;

class ProductService
{
    public function __construct(
        private ProductRepository $repository
    ) {
    }
    public function register(Product $product): Product
    {
        if ($this->repository->findById($product->getId() != null)) {
            throw new \Exception("Product is already Exist");
        }
        return $this->repository->save($product);
    }
}

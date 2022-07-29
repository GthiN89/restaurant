<?php

namespace App\Http\Services;

use App\Models\Cart;


class CartService {
    protected $Cart;

    public function __construct(Cart $Cart) {
        $this->Cart =$Cart;
    }

    public function getCart(): array
    {
        return $this->Cart->show();
    }

    public function SetAddToCart($request) {
        $this->Cart->AddToCard($request);
    }




}
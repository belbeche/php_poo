<?php



class Cart
{
    // PHP 8 : Promotion de constructeur
    // Retirer les attributs, et ne pas assigner automatiquement les valeurs
    public function __construct(
        private int $quantity,
        private float $totalPrice
    ) {
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $price): void
    {
        $this->totalPrice = $price;
    }

    public function discount(float $discount): void
    {
        // if ($this->quantity > 3) {
        //     $this->totalPrice = $this->totalPrice * 0.9;
        // }

        $this->totalPrice -= $this->totalPrice * ($discount / 100);
    }
}

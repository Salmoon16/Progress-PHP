<?php
class Transaction {
    private string $customerName;
    private array $items; // [Product => Quantity]
    private float $total;

    public function __construct(string $customerName) {
        $this->customerName = $customerName;
        $this->items = [];
        $this->total = 0;
    }

    public function addItem(Product $product, int $quantity) {
        $product->reduceStock($quantity);
        $this->items[] = [$product, $quantity];
        $this->total += $product->getPrice() * $quantity;
    }

    public function getTotal(): float {
        return $this->total;
    }

    public function getDetails(): string {
        $details = "Pelanggan: {$this->customerName}\n";
        foreach ($this->items as [$product, $quantity]) {
            $details .= "{$product->getName()} x{$quantity} = " . ($product->getPrice() * $quantity) . "\n";
        }
        $details .= "Total: {$this->total}\n";
        return $details;
    }
}
?>

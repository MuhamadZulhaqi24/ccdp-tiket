<?php
interface Ticket {
    public function getPrice();
    public function getDescription();
}

class RegularTicket implements Ticket {
    private $name;
    private $concert;
    private $price;

    public function __construct($name, $concert, $price) {
        $this->name = $name;
        $this->concert = $concert;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return "Regular Ticket for $this->concert ($this->name)";
    }
}
?>
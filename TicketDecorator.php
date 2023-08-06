<?php
abstract class TicketDecorator implements Ticket {
    protected $decoratedTicket;

    public function __construct(Ticket $decoratedTicket) {
        $this->decoratedTicket = $decoratedTicket;
    }

    public function getPrice() {
        return $this->decoratedTicket->getPrice();
    }

    public function getDescription() {
        return $this->decoratedTicket->getDescription();
    }
}

class VIPDecorator extends TicketDecorator {
    private $extraPrice = 50.00;

    public function getPrice() {
        return $this->decoratedTicket->getPrice() + $this->extraPrice;
    }

    public function getDescription() {
        return $this->decoratedTicket->getDescription() . " (VIP)";
    }
}
?>
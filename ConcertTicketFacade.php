<?php
    include 'Ticket.php';
    include 'TicketDecorator.php';
    include 'PaymentProcessor.php';

        class ConcertTicketFacade {
            private $ticketInventory;
            private $paymentSystem;
            private $orderProcessor;

            public function __construct() {
                include 'TicketInventorySystem.php';
                include 'PaymentSystem.php';
                include 'OrderProcessingSystem.php';

                $this->ticketInventory = new TicketInventorySystem();
                $this->paymentSystem = new PaymentSystem();
                $this->orderProcessor = new OrderProcessingSystem();
            }

            public function bookTicket($ticket, $paymentMethod) {
                if ($this->ticketInventory->checkAvailability($ticket)) {
                    $order = $this->orderProcessor->createOrder($ticket);
                    $totalPrice = $this->orderProcessor->calculateTotalPrice($order);
                    $this->paymentSystem->makePayment($paymentMethod, $totalPrice);
                    $this->orderProcessor->finalizeOrder($order);
                } else {
                    echo "Sorry, the ticket is not available.";
                }
            }
        }
?>
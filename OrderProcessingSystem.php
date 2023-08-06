
<?php
class Order {
    private $orderItems = [];

    public function addOrderItem($item) {
        $this->orderItems[] = $item;
    }

    public function getOrderItems() {
        return $this->orderItems;
    }

    // You can add more methods as needed
}
?>
<?php
include 'Order.php'; // Include the Order class

class OrderProcessingSystem {
    public function createOrder($ticket) {
        $order = new Order(); // Create an instance of Order
        $order->addOrderItem($ticket); // Add ticket to the order
        return $order; // Return the created order
    }

    public function calculateTotalPrice($order) {
        // Implement your calculateTotalPrice logic here
        $totalPrice = 0;
        
        foreach ($order->getTickets() as $ticket) {
            $totalPrice += $ticket->getPrice();
        }
    
        if ($order->hasMerchandise()) {
            // Jika ada merchandise, tambahkan harga merchandise ke total harga
            $totalPrice += $order->getMerchandisePrice();
        }
    
        return $totalPrice; // Return the calculated total price
    }

    public function finalizeOrder($order) {
        // Implement your finalizeOrder logic here
        $orderItems = $order->getOrderItems(); // Get order items
    
        // Set order status to 'Completed'
        $order->setStatus('Completed');
    
        // Generate an order number
        $orderNumber = 'ORD' . uniqid();
    
        // Set order number and finalize the order
        $order->setOrderNumber($orderNumber);
        $order->setOrderItems($orderItems);
    
        // ... other finalization tasks ...
    
        // Return the finalized order
        return $order;
    }
}
?>
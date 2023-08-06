<?php
class TicketInventorySystem {
    private $availableTickets = [
        "Metallica Concert" => 10,
        "Pop Star Concert" => 5,
    ];

    public function checkAvailability($ticket) {
        if (isset($this->availableTickets[$ticket->getConcert()])) {
            $availableQuantity = $this->availableTickets[$ticket->getConcert()];
            if ($availableQuantity > 0) {
                return true; // Ticket is available
            }
        }
        return false; // Ticket is not available
    }
}
?>

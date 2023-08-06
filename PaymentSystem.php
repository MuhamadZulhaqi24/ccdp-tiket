<?php
    class PaymentSystem {
        public function makePayment($paymentMethod, $amount) {
            if ($paymentMethod === "Credit Card") {
                return "Payment of $" . $amount . " processed using Credit Card.";
            } elseif ($paymentMethod === "PayPal") {
                return "Payment of $" . $amount . " processed using PayPal.";
            } else {
                return "Invalid payment method.";
            }
        }
    }
?>
<?php
    class ExternalPaymentSystem {
        public function completeTransaction($amount) {
            echo "Payment of $" . $amount . " processed using ExternalPaymentSystem.";
        }
    }
?>
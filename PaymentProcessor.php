<?php
interface PaymentProcessor {
    public function processPayment($amount);
}

class PaymentSystemAdapter implements PaymentProcessor {
    public function processPayment($amount) {
        echo "Payment of $" . $amount . " processed using PaymentSystemAdapter.";
    }
}

class PaymentProcessorAdapter implements PaymentProcessor {
    private $externalPayment;

    public function __construct(ExternalPaymentSystem $externalPayment) {
        $this->externalPayment = $externalPayment;
    }

    public function processPayment($amount) {
        $this->externalPayment->completeTransaction($amount);
    }
}
?>
<?php

class CardTransactionController
{
    /**
     * Initialize the library in your constructor using
     * your environment, api key, and password
     */
    public function __construct()
    {
        $environment = 'staging'; // or 'production'
        \tdanielcox\Bluesnap\Bluesnap::init($environment, 'YOUR_API_KEY', 'YOUR_API_PASSWORD');
    }

    /**
     * Create a new Transaction (with vendor & vaultedShopper)
     *
     * @param int $vaulted_shopper_id
     * @param int $vendor_id
     * @return \tdanielcox\Bluesnap\Models\CardTransaction
     */
    public function createTransaction($vaulted_shopper_id, $vendor_id)
    {
        $response = \tdanielcox\Bluesnap\CardTransaction::create([
            'creditCard' => [
                'cardLastFourDigits' => '1111',
                'securityCode' => '111',
                'cardType' => 'VISA',
            ],
            'vendorInfo' => [
                'vendorId' => $vaulted_shopper_id,
                'commissionAmount' => 4.00,
            ],
            'vaultedShopperId' => $vendor_id,
            'amount' => 10.00,
            'currency' => 'USD',
            'recurringTransaction' => 'ECOMMERCE',
            'cardTransactionType' => 'AUTH_ONLY',
            'softDescriptor' => 'Your description',
        ]);

        if ($response->failed()) {
            $error = $response->data;

            // handle error
        }

        $transaction = $response->data;

        return $transaction;
    }

    /**
     * Get a Transaction
     *
     * @param int $transaction_id
     * @return \tdanielcox\Bluesnap\Models\CardTransaction
     */
    public function getTransaction($transaction_id)
    {
        $response = \tdanielcox\Bluesnap\CardTransaction::get($transaction_id);

        if ($response->failed()) {
            $error = $response->data;

            // handle error
        }

        $transaction = $response->data;

        return $transaction;
    }

    /**
     * Get All Transactions
     *
     * @return \tdanielcox\Bluesnap\Models\CardTransaction[]
     */
    public function getAllTransactions()
    {
        $response = \tdanielcox\Bluesnap\CardTransaction::get();

        $transactions = $response->data;

        return $transactions;
    }

    /**
     * Refund a Transaction
     *
     * @param int $transaction_id
     * @return \tdanielcox\Bluesnap\Models\Refund
     */
    public function refundTransaction($transaction_id)
    {
        // Pass query parameters as array
        $response = \tdanielcox\Bluesnap\Refund::update($transaction_id, [
            'amount' => 10.00,
            'reason' => 'Your refund description'
        ]);

        if ($response->failed())
        {
            $error = $response->data;

            //  handle error
        }

        $refund = $response->data;

        return $refund;
    }
}
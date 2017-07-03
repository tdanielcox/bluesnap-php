<?php

class ReportController
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
     * Get a Report
     *
     * @return \tdanielcox\Bluesnap\Models\Report
     */
    public function getReport()
    {
        // pass query parameters as array
        $response = \tdanielcox\Bluesnap\Report::get('TransactionDetail', [
            'period' => 'THIS_MONTH'
        ]);

        if ($response->failed()) {
            $error = $response->data;

            // handle error
        }

        $report = $response->data;

        return $report;
    }
}
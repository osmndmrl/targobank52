<?php

namespace TARGOBANKPAYMENTSYSTEMS\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;

class TARGOBANKPAYMENTSYSTEMSController extends Controller
{
    public function show()
    {
        // Replace these with actual data retrieval methods
        $data = [
            'sessionID' => 'your-session-id',
            'amount' => 'total-amount',
            'dealerText' => 'your-dealer-text-url',
            'documentno' => 'your-document-number',
            'dealerShopURL' => 'your-dealer-shop-url',
            'dealerRejectURL' => 'your-dealer-reject-url',
            'dealerAbortURL' => 'your-dealer-abort-url',
            'hash' => 'your-hash',
            'gender' => 'm',
            'surname' => 'Doe',
            'firstname' => 'John',
            'street' => 'Main St',
            'streetnumber' => '123',
            'zip' => '12345',
            'city' => 'City',
            'telnocode' => '0211',
            'telno' => '1234567',
            'birthday' => '1970-01-01',
            'email' => 'john.doe@example.com'
        ];

        return view('TARGOBANKPAYMENTSYSTEMS::TARGOBANKPAYMENTSYSTEMS', $data);
    }

    public function process(Request $request)
    {
        // Implement TARGOBANK API integration here
    }
}

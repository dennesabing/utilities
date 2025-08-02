<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show()
    {
        // Sample DigitalOcean invoice data structure
        $invoiceData = [
            'invoice_number' => 'DO-2025080001',
            'invoice_date' => '2025-08-01',
            'due_date' => '2025-08-31',
            'billing_period' => 'July 1, 2025 - July 31, 2025',

            // Company information
            'company' => [
                'name' => 'DigitalOcean, LLC',
                'address' => '101 Avenue of the Americas',
                'city' => 'New York, NY 10013',
                'country' => 'United States',
                'tax_id' => 'Tax ID: 27-0863145'
            ],

            // Customer information
            'customer' => [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'company' => 'Example Corp',
                'address' => '123 Main Street',
                'city' => 'San Francisco, CA 94105',
                'country' => 'United States'
            ],

            // Invoice items with sub-items
            'items' => [
                [
                    'category' => 'Droplets',
                    'description' => 'Virtual Private Servers',
                    'sub_items' => [
                        [
                            'name' => 'Basic Droplet - 1GB RAM, 1 vCPU, 25GB SSD',
                            'quantity' => 744, // hours in July
                            'rate' => 0.00744,
                            'amount' => 5.53
                        ],
                        [
                            'name' => 'Premium Droplet - 4GB RAM, 2 vCPU, 80GB SSD',
                            'quantity' => 744,
                            'rate' => 0.02976,
                            'amount' => 22.14
                        ]
                    ],
                    'subtotal' => 27.67
                ],
                [
                    'category' => 'Load Balancers',
                    'description' => 'Managed Load Balancing Service',
                    'sub_items' => [
                        [
                            'name' => 'Load Balancer - Small',
                            'quantity' => 744,
                            'rate' => 0.01339,
                            'amount' => 9.96
                        ]
                    ],
                    'subtotal' => 9.96
                ],
                [
                    'category' => 'Block Storage',
                    'description' => 'Additional SSD Storage Volumes',
                    'sub_items' => [
                        [
                            'name' => 'Volume Storage - 100GB',
                            'quantity' => 744,
                            'rate' => 0.00134,
                            'amount' => 1.00
                        ],
                        [
                            'name' => 'Volume Storage - 250GB',
                            'quantity' => 744,
                            'rate' => 0.00335,
                            'amount' => 2.49
                        ]
                    ],
                    'subtotal' => 3.49
                ],
                [
                    'category' => 'Databases',
                    'description' => 'Managed Database Services',
                    'sub_items' => [
                        [
                            'name' => 'PostgreSQL - Basic Plan',
                            'quantity' => 744,
                            'rate' => 0.02009,
                            'amount' => 14.95
                        ]
                    ],
                    'subtotal' => 14.95
                ],
                [
                    'category' => 'Bandwidth',
                    'description' => 'Data Transfer',
                    'sub_items' => [
                        [
                            'name' => 'Bandwidth Overage - 50GB',
                            'quantity' => 50,
                            'rate' => 0.01,
                            'amount' => 0.50
                        ]
                    ],
                    'subtotal' => 0.50
                ]
            ],

            // Totals
            'subtotal' => 56.57,
            'tax_rate' => 0.08875, // NY tax rate
            'tax_amount' => 5.02,
            'total' => 61.59,

            // Payment information
            'payment_method' => 'Credit Card ending in 4242',
            'payment_status' => 'Paid',
            'payment_date' => '2025-08-01'
        ];

        return view('invoice', compact('invoiceData'));
    }
}

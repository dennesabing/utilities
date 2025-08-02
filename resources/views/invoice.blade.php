<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalOcean Invoice - {{ $invoiceData['invoice_number'] }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.4;
            color: #000;
            background-color: white;
            font-size: 12px;
        }

        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
        }

        .invoice-header {
            /*border-bottom: 2px solid #000;*/
            padding-bottom: 0px;
            margin-bottom: 20px;
        }

        .logo {
            float: left;
        }

        .invoice-title {
            float: right;
            text-align: right;
        }

        .invoice-title h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #000;
        }

        .invoice-number {
            font-size: 14px;
            font-weight: normal;
            color: #000;
        }

        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        .invoice-details {
            padding: 0;
        }

        .billing-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .company-info, .customer-info {
            flex: 1;
        }

        .customer-info {
            margin-left: 40px;
        }

        .info-section h3 {
            color: #000;
            margin-bottom: 10px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .info-section p {
            margin-bottom: 3px;
            color: #000;
            font-size: 11px;
        }

        .invoice-meta {
            border: 1px solid #000;
            padding: 15px;
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
        }

        .meta-item {
            text-align: center;
        }

        .meta-label {
            font-weight: bold;
            color: #000;
            display: block;
            margin-bottom: 5px;
            font-size: 11px;
        }

        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border: 1px solid #000;
        }

        .items-table th {
            background: #000;
            color: white;
            padding: 10px;
            text-align: left;
            font-weight: bold;
            font-size: 11px;
            border: 1px solid #000;
        }

        .items-table td {
            padding: 8px 10px;
            border: 1px solid #000;
            font-size: 11px;
        }

        .category-row {
            background: #f0f0f0;
            font-weight: bold;
            color: #000;
        }

        .sub-item-row {
            background: white;
        }

        .sub-item-row td:first-child {
            padding-left: 20px;
            color: #000;
        }

        .amount {
            text-align: right;
            font-weight: bold;
        }

        .subtotal-row {
            background: #f0f0f0;
            font-weight: bold;
        }

        .totals-section {
            border: 1px solid #000;
            padding: 15px;
            margin-top: 20px;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            padding: 3px 0;
            font-size: 12px;
        }

        .total-row.final {
            border-top: 2px solid #000;
            padding-top: 10px;
            margin-top: 10px;
            font-size: 14px;
            font-weight: bold;
            color: #000;
        }

        .payment-info {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #000;
        }

        .payment-status {
            color: #000;
            font-weight: bold;
            font-size: 12px;
        }

        @media print {
            body {
                background: white;
            }
            .invoice-container {
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <!-- Header -->
        <div class="invoice-header clearfix">
            <div class="logo">
                <img src="{{ asset('images/digitalocean-logo.svg') }}" alt="DigitalOcean" style="height: 32px; width: 32px">
                <img src="{{ asset('images/digitalocean-text.svg') }}" alt="DigitalOcean" style="height: 32px;">
            </div>
        </div>
        <h2>Final invoice for the June 2025 billing period</h2>


        <table>
            <tr>
                <td>
                    <h3>From</h3>
                    <p>
                        <strong>DigitalOcean LLC</strong>
                        <br />105 Edgeview Drive, Suite 425
                        <br />Broomfield, CO, 80021
                        <br />TIN: 678-947-185-00000
                    </p>
                </td>
                <td>
                    <h3>Invoice Details</h3>
                    <table>
                        <tr>
                            <td>Invoice Number</td>
                            <td>519165746</td>
                        </tr>
                        <tr>
                            <td>Date of issue:</td>
                            <td>July 1, 2025</td>
                        </tr>
                        <tr>
                            <td>Payment due on:</td>
                            <td>July 1, 2025</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    <h3>Billing Details</h3>
                    <p>
                        My Team
                        <br /><dennes.b.abing@gmail.com>
                        <br />#71 Amethyst St, Phase 1,
                        <br />Countryside Subd., Bangkal
                        <br />Davao City, Davao del Sur, 8000
                        <br />PHILIPPINES

                    </p>
                </td>
                <td>
                    <h3>Team ID</h3>
                    do:team:928c34b7470a315def11a89c3fea68db8b4c1fd1
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td colspan="2">
                    <h3>Summary</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Total usage charges</h3>
                </td>
                <td>
                    $138.55
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Total due</h3>
                </td>
                <td>
                    $138.55
                </td>
            </tr>
        </table>

        <hr />

        <table>
            <tr>
                <td>
                    <h3>Product Usage Charges</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Detailed usage information is available via the API or can be downloaded from the billing section of your account</h3>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    <h3>Droplets - Aggregated by size</h3>
                </td>
                <td>
                    <h3>Collective Usage </h3>
                </td>
                <td>
                    <h3>$66.01</h3>
                </td>
            </tr>
            @foreach($invoiceData['items'] as $item)
                <!-- Category Header -->
                <tr class="category-row">
                    <td colspan="4">
                        <strong>{{ $item['category'] }}</strong> - {{ $item['description'] }}
                    </td>
                </tr>

                <!-- Sub-items -->
                @foreach($item['sub_items'] as $subItem)
                    <tr class="sub-item-row">
                        <td>{{ $subItem['name'] }}</td>
                        <td>{{ number_format($subItem['quantity']) }}</td>
                        <td>${{ number_format($subItem['rate'], 5) }}</td>
                        <td class="amount">${{ number_format($subItem['amount'], 2) }}</td>
                    </tr>
                @endforeach

                <!-- Category Subtotal -->
                <tr class="subtotal-row">
                    <td colspan="3"><strong>{{ $item['category'] }} Subtotal</strong></td>
                    <td class="amount"><strong>${{ number_format($item['subtotal'], 2) }}</strong></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

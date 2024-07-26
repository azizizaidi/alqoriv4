<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            padding: 20px;
        }
        .content h1 {
            color: #333;
        }
        .details {
            margin: 20px 0;
        }
        .details table {
            width: 100%;
            border-collapse: collapse;
        }
        .details th, .details td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .details th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://your-logo-url.com/logo.png" alt="toyyibPay">
        </div>
        <div class="content">
            <h1>You have made a payment! Yay!</h1>
            <p>Dear Sharipah, you have made a payment amounting <strong>RM 105.00</strong> from toyyibPay. Here's the details.</p>
            <div class="details">
                <table>
                    <tr>
                        <th colspan="2">Payment Details</th>
                    </tr>
                    <tr>
                        <td>Bill Name</td>
                        <td>AQ251</td>
                    </tr>
                    <tr>
                        <td>Amount Paid</td>
                        <td>RM 105.00</td>
                    </tr>
                    <tr>
                        <td>Payment Reference No</td>
                        <td>TP2407154725723548</td>
                    </tr>
                    <tr>
                        <td>External Reference No</td>
                        <td>bill-4324</td>
                    </tr>
                    <tr>
                        <td>Bill URL</td>
                        <td><a href="https://dev.toyyibpay.com/nnya1258">https://dev.toyyibpay.com/nnya1258</a></td>
                    </tr>
                    <tr>
                        <td>Date of Transaction</td>
                        <td>15/07/2024 09:32:25</td>
                    </tr>
                    <tr>
                        <td>Payment Method</td>
                        <td>FPX</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>Payment Approved</td>
                    </tr>
                </table>
            </div>
            <div class="details">
                <table>
                    <tr>
                        <th colspan="2">Merchant Details</th>
                    </tr>
                    <tr>
                        <td>Merchant's Name</td>
                        <td>ALQORI ACADEMY ENTERPRISE</td>
                    </tr>
                    <tr>
                        <td>Merchant's Phone Number</td>
                        <td>0183879635</td>
                    </tr>
                    <tr>
                        <td>Merchant's Email</td>
                        <td><a href="mailto:alqoriquran@gmail.com">alqoriquran@gmail.com</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="footer">
            &copy; 2024 toyyibPay. All rights reserved.
        </div>
    </div>
</body>
</html>

<?php
function calculateBill($units)
{
    $bill = 0;
    if ($units <= 50) {
        $bill = $units * 3.50;
    } else if ($units > 50 && $units <= 150) {
        $bill = (50 * 3.50) + (($units - 50) * 4.00);
    } else if ($units > 150 && $units <= 250) {
        $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
    } else {
        $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
    }
    return number_format($bill, 2);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input values
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Unknown';
    $month = isset($_POST['month']) ? htmlspecialchars($_POST['month']) : 'Current Month';
    $id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : 'N/A';
    $date = isset($_POST['date']) ? $_POST['date'] : date('Y-m-d');
    
    // Convert units to numeric and validate
    $units = isset($_POST['units']) ? filter_var($_POST['units'], FILTER_VALIDATE_INT) : 0;
    if ($units === false || $units < 0) {
        $units = 0;
    }
    
    $bill = calculateBill($units);
    $formattedDate = date('F d, Y', strtotime($date));
    
    // HTML output with better styling
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link href='https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css' rel='stylesheet'>
        <link rel='stylesheet' href='styles.css'>
        <title>Electricity Bill Result - Electra</title>
        <style>
            .bill-result {
                max-width: 600px;
                margin: 0 auto;
                padding: 2rem;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }
            .bill-result h2 {
                color: var(--text-dark);
                margin-bottom: 1.5rem;
                text-align: center;
            }
            .bill-details {
                border-top: 1px solid #eee;
                border-bottom: 1px solid #eee;
                padding: 1rem 0;
                margin-bottom: 1.5rem;
            }
            .bill-row {
                display: flex;
                justify-content: space-between;
                margin-bottom: 0.75rem;
            }
            .bill-label {
                font-weight: 500;
                color: var(--text-light);
            }
            .bill-value {
                font-weight: 600;
                color: var(--text-dark);
            }
            .bill-total {
                font-size: 1.5rem;
                text-align: center;
                margin-top: 1.5rem;
                font-weight: 700;
                color: var(--primary-color);
            }
            .btn-container {
                text-align: center;
                margin-top: 2rem;
            }
            .btn {
                display: inline-block;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <header class='header'>
            <nav>
                <div class='nav__logo'><a href='index.html'>Electra</a></div>
                <ul class='nav__links' id='nav-links'>
                    <li class='link'><a href='index.html#home'>Home</a></li>
                    <li class='link'><a href='./display.html'>Calculate Bill</a></li>
                    <li class='link'><a href='index.html#choose'>Why Choose Us?</a></li>
                    <li class='link'><a href='index.html#offer'>Cost Optimization</a></li>
                    <li class='link'><a href='index.html#review'>Customer Reviews</a></li>
                    <li class='link'><a href='index.html#store'>Service Centers</a></li>
                </ul>
                <div class='nav__menu__btn' id='menu-btn'>
                    <span><i class='ri-menu-line'></i></span>
                </div>
            </nav>
        </header>
        
        <section class='section__container'>
            <div class='bill-result'>
                <h2>Electricity Bill Details</h2>
                
                <div class='bill-details'>
                    <div class='bill-row'>
                        <span class='bill-label'>Customer Name:</span>
                        <span class='bill-value'>$name</span>
                    </div>
                    <div class='bill-row'>
                        <span class='bill-label'>Customer ID:</span>
                        <span class='bill-value'>$id</span>
                    </div>
                    <div class='bill-row'>
                        <span class='bill-label'>Billing Date:</span>
                        <span class='bill-value'>$formattedDate</span>
                    </div>
                    <div class='bill-row'>
                        <span class='bill-label'>City:</span>
                        <span class='bill-value'>$month</span>
                    </div>
                    <div class='bill-row'>
                        <span class='bill-label'>Units Consumed:</span>
                        <span class='bill-value'>$units</span>
                    </div>
                </div>
                
                <div class='bill-total'>
                    Total Bill Amount: ₹$bill
                </div>
                
                <div class='btn-container'>
                    <a href='display.html' class='btn'>Calculate Another Bill</a>
                </div>
            </div>
        </section>
        
        <footer class='footer'>
            <div class='section__container footer__bar'>
                <div class='footer__logo'>
                    <h4><a href='index.html'>Electra</a></h4>
                    <p>Copyright © 2024 Electra. All rights reserved.</p>
                </div>
            </div>
        </footer>
        
        <script src='main.js'></script>
    </body>
    </html>";
} else {
    // Redirect if accessed directly
    header("Location: display.html");
    exit();
}
?>


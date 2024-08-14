<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="styles.css">

    <style>

    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

    .form-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
}

    form h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

    .form-group {
    margin-bottom: 15px;
}

    .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

    .form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

    .form-group input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
}

    .submit-btn {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

    .submit-btn:hover {
    background-color: #218838;
}


     </style>
</head>
<body>
    <div class="form-container">
        <form method="post" action="{{ route('payment.store') }}">
            @csrf
            <h2>Payment Details</h2>
            <div class="form-group">
                <label for="card_name">Name on Card</label>
                <input type="text" id="card_name" name="card_name" placeholder="Cardholder Name" required>
            </div>
            <div class="form-group">
                <label for="card_number">Credit Card Number</label>
                <input type="text" id="card_number" name="card_number" placeholder="Card Number" required>
            </div>
            <div class="form-group">
                <label for="card_expiration">Expiration</label>
                <input type="text" id="card_expiration" name="card_expiration" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="card_cvv">CVV</label>
                <input type="text" id="card_cvv" name="card_cvv" placeholder="CVV" required>
            </div>
            <button type="submit" class="submit-btn">Complete Payment</button>
        </form>
    </div>
</body>
</html>

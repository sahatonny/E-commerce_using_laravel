<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Payment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Complete Payment</h2>
        <form method="post" action="{{ route('payment.process.submit') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="card_name">Name on Card</label>
                    <input type="text" class="form-control" id="card_name" name="card_name" placeholder="Cardholder Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="card_number">Credit Card Number</label>
                    <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card Number" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="card_expiration">Expiration</label>
                    <input type="text" class="form-control" id="card_expiration" name="card_expiration" placeholder="MM/YY" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="card_cvv">CVV</label>
                    <input type="text" class="form-control" id="card_cvv" name="card_cvv" placeholder="CVV" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Complete Payment</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



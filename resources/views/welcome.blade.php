<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <header class="bg-dark py-3">
        <nav class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a class="text-white h4 mr-4" href="/">Shopify</a>
                <a href="{{ route('product.index') }}" class="text-white h6">Products</a>
            </div>
            <div>
                <ul class="nav">
                    @guest
                        <li class="nav-item">
                            <a class="btn btn-primary text-white mx-1" href="/login">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success text-white mx-1" href="/register">
                                <i class="fas fa-user-plus"></i> Register
                            </a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/dashboard">Dashboard</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

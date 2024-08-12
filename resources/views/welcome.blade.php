<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
        }
        .hero {
            background: url('download.jpeg') no-repeat center center;
            background-size: cover;
            color: white;
            height: 100vh;
            position: relative;
        }
        .hero-overlay {
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .hero-text {
            text-align: center;
        }
        .btn-custom {
            background: linear-gradient(45deg, #ff6f61, #de4313);
            border: none;
            color: white;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body class="bg-light d-flex flex-column">

    <header class="bg-dark py-3 sticky-top">
        <nav class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a class="text-white h4 mr-4" href="/">Home</a>
            </div>
            <div>
                <ul class="nav">
                    @guest
                        <li class="nav-item">
                            <a class="btn btn-custom text-white mx-1" href="/login">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-custom text-white mx-1" href="/register">
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





    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/smartphone.jpg') }}" class="card-img-top" alt="Smartphone">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Smartphone</h5>
                        <p class="card-text flex-grow-1">High-end smartphone with latest features.</p>
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="4">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" min="1" value="1" required />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-auto">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/laptop.jpg') }}" class="card-img-top" alt="Laptop">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text flex-grow-1">Powerful laptop for all your needs.</p>
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="2">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" min="1" value="1" required />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-auto">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/fridge.jpg') }}" class="card-img-top" alt="Fridge">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Fridge</h5>
                        <p class="card-text flex-grow-1">Spacious fridge for all your needs.</p>
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="3">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" min="1" value="1" required />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-auto">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/TV.jpg') }}" class="card-img-top" alt="TV">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">TV</h5>
                        <p class="card-text flex-grow-1">Smart TV for all your needs.</p>
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="5">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" min="1" value="1" required />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-auto">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

  <!--  <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-2 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/TV.jpg') }}" class="card-img-top" alt="TV">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">TV</h5>
                        <p class="card-text flex-grow-1">Smart TV for all your needs.</p>
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="5">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" min="1" value="1" required />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-auto">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/headphone.jpg') }}" class="card-img-top" alt="TV">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Headphone</h5>
                        <p class="card-text flex-grow-1">Headphone for all your needs.</p>
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="5">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" min="1" value="1" required />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-auto">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('images/keyboard.jpg') }}" class="card-img-top" alt="TV">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Keyboard & Mouse </h5>
                        <p class="card-text flex-grow-1">Keyboard set for all your needs.</p>
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="5">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" min="1" value="1" required />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-auto">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <footer class="footer text-center mt-auto">
        <div class="container">
            <p>&copy; 2024 Laravel App. All Rights Reserved.</p>
            <p>
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

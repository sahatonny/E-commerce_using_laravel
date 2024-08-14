<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .container {
            margin-top: 30px;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border: 1px solid #c3e6cb;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .create-category {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .create-category a {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .create-category a:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .edit-link a {
            text-decoration: none;
            background-color: #ffc107;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .edit-link a:hover {
            background-color: #e0a800;
        }

        .delete-form input {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-form input:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Category</h1>
        @if(session()->has('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif


        @if(Auth::user()->isAdmin())
        <div class="create-category">
            <a href="{{ route('category.create') }}">Create a Category</a>
        </div>
        @endif
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->quantity }}</td>
                        <td>{{ $category->price }}</td>
                        <td>{{ $category->description }}</td>
                        <td class="edit-link">
                            <a href="{{ route('category.edit', ['category' => $category]) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('category.destroy', ['category' => $category]) }}" class="delete-form">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Kasir</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>DASHBOARD KASIR</h1>
    <!-- <div class="bg-red-500 text-white p-4">
        <h1>HAII KASIR</h1> 
    </div> -->
    <aside>
        <nav>
            <ul>
                <li>
                    <img src="" alt="">
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('kasir.products.index') }}">Products</a>
                </li>
                <li>
                    <a href="#">Members</a>
                </li>
                <li>
                    <a href="#">Transactions</a>
                </li>
                <li>
                    <form action="{{ ('logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </aside>
</body>
</html>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background-color: #000;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-brand {
        color: #fff;
        font-weight: bold;
        text-decoration: none;
        font-size: 1.2em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar-links ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .navbar-links li {
        margin-right: 20px;
    }

    .navbar-links a {
        color: #fff;
        text-decoration: none;
        font-size: 1em;
        transition: color 0.3s ease;
    }

    .navbar-links a:hover {
        color: #fff;
        background-color: #333;
        border-radius: 4px;
        padding: 8px 12px;
    }
</style>
<nav class="navbar">
    <a href="#" class="navbar-brand">{{ Auth::user()->name }}</a>
    <div class="navbar-links">
        <ul>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="background: none; border: none; cursor: pointer; color: #fff;">Cerrar
                        Sesión</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

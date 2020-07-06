<!-- Header -->
<div id="header" class="skel-panels-fixed">
    <div id="logo">
        <h1><a href="/">PostIt</a></h1>
    </div>
    <nav id="nav">
        <ul>
            <li class="active"><a href="/posts">Articles</a></li> |
            <li class="active"><a href="/about">About Us</a></li> |
            <li><a href="/contact">Contact Us</a></li> |

            @if (!Auth::check())
            <li><a href="/login">Login</a></li> |
            <li><a href="/register">Register</a></li> |
            @endif

            @if (Auth::check())
                <li><a href="/logout">Logout</a></li> |
                <li><a href="#">Welcome, {{ Auth::user()->name }}</a></li>
            @endif
        </ul>
    </nav>
</div>
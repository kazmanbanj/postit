<!-- Header -->
<div id="header" class="skel-panels-fixed">
    <div id="logo">
        <h1><a href="index.html">Phase Shift</a></h1>
    </div>
    <nav id="nav">
        <ul>
            <li class="active"><a href="index.html">Homepage</a></li>
            <li><a href="#">Left Sidebar</a></li>
            <li><a href="#">Right Sidebar</a></li>
            <li><a href="#">No Sidebar</a></li>

            @if (Auth::check())
                <li><a href="#">{{ Auth::user()->name }}</a></li>
            @endif
        </ul>
    </nav>
</div>
<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

</head>
<body class="h-100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Generational Transformers Society</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

                    <a class="nav-link" href="href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"" class="nav_link">  <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">
                Log Out</span> </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-secondary h-100 overflow-auto">
                <ul class="list-group">
                   <li class="list-group-item">
                      <a href="{{ route('accounts.dashboard') }}">


                         <i class="fas fa-tachometer-alt"></i> Dashboard
                      </a>
                   </li>
                   <li class="list-group-item">
                      <a href="{{ route('accounts.contribute') }}">
                         <i class="fas fa-hand-holding-usd"></i> My Contributions
                      </a>
                   </li>
                   <li class="list-group-item">
                      <a href="{{ route('notifications.index') }}">
                         <i class="fas fa-bell"></i> Notifications
                      </a>
                   </li>
                </ul>
             </div>



            <div class="col-10">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>





<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

</head>
<body class="h-100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Generational Transformers Society</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

                    <a class="nav-link" href="href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"" class="nav_link">  <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">
                Log Out</span> </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-secondary h-100 overflow-auto">
                <ul class="list-group">
                   <li class="list-group-item">
                      <a href="{{ route('user.dashboard') }}">


                         <i class="fas fa-tachometer-alt"></i> Dashboard
                      </a>
                   </li>
                   <li class="list-group-item">
                      <a href="{{ route('accounts.contribute') }}">
                         <i class="fas fa-hand-holding-usd"></i> My Contributions
                      </a>
                   </li>
                   <li class="list-group-item">
                      <a href="{{ route('notifications.index') }}">
                         <i class="fas fa-bell"></i> Notifications
                      </a>
                   </li>
                </ul>
             </div>



            <div class="col-10">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

</head>
<body class="h-100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Generational Transformers Society</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

                    <a class="nav-link" href="href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"" class="nav_link">  <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">
                Log Out</span> </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-secondary h-100 overflow-auto">
                <ul class="list-group">
                   <li class="list-group-item">
                      <a href="{{ route('admin.dashboard') }}">


                         <i class="fas fa-tachometer-alt"></i> Dashboard
                      </a>
                   </li>
                   <li class="list-group-item">
                    <a href="{{ route('admin.user') }}">


                       <i class="fas fa-tachometer-alt"></i> Actions
                    </a>
                 </li>
                   <li class="list-group-item">
                      <a href="{{ route('accounts.contribute') }}">
                         <i class="fas fa-hand-holding-usd"></i> My Contributions
                      </a>
                   </li>
                   <li class="list-group-item">
                      <a href="{{ route('notifications.index') }}">
                         <i class="fas fa-bell"></i> Notifications
                      </a>
                   </li>
                </ul>
             </div>



            <div class="col-10">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>

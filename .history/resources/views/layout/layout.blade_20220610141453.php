<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMART LIBRAIRY</title>
    <style>
        .main{
            min-height: 100vh;
            position: relative;
        }

        .header {
            position: fixed; 
            top:0; 
            width: 100%
        }

        .content {
            margin-top: 70px
        }
        .footer {
            position: absolute;
            width: 100%;
            bottom:0
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
     <div class="main">
        <header class="header">
            <nav class="navbar navbar-expand-lg  bg-dark  text-white">
                 <div class="container">
                      <div class="navbar-brand text-white">SmartLibrairy</div>
    
                      <button class="navbar-toggler" data-bs-toggle="collapse" href="#menu-container">
                         <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="menu-container">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                 <a href="/books/list" class="nav-link">Books</a>
                            </li>
                        </ul>
                      </div>
                 </div>
               
            </nav>
        </header>
        <section class="content" >
            @yield('content')
        </section>     
    
        <section>
            @if($errors->count()>0)
                @foreach($errors->all() as $error)
                    <h6 class="text-danger">{{ $error }}</h6>
                @endforeach
            @endif
        </section>
        <footer class="footer bg-dark p-3 text-center text-white">
             ©copyright FS-23 2022
        </footer>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
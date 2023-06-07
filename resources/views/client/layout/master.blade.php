<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
    <style>
        *{
            box-sizing: border-box;
        }

        .header,.content,.nav,.footer,.sidebar {
            font-size: 1.5rem;
            padding: 3rem;
        }

        .header{
            background: red;
        }

        .nav{
            background: green;
            
        }

        .sidebar{
            background: yellow;
        }
        .content{
            background: blue;
        }
        .footer{
            background: purple;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @include('client.pages.header')
            <div class="col-12 nav">
                Navbar
            </div> 
            <div class="col-4 sidebar">
                @section('sidebar')
                    Sidebar
                @show
            </div>
            <div class="col-8 content">
                Content
            </div>
            @include('client.pages.footer')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .alert {
            border: 1px solid black;
            padding:15px;
            margin: 5px;
            position: fixed;
            top: 10%;
            right:5%;
        }

        .alert.success {
            border: 1px solid green;
            background:green;
            color:white;
        }

        .alert.error {
            border: 1px solid red;
            background:red;
            color:white;
        }
    </style>
    <title>@yield("Home", "Home")</title>
</head>
<body>
     <header>
        @yield("header", "Header")
            
        </header>
        
        <aside>
            @yield("sidebar", "Sidebar")
            
        </aside>
    <main>    
        
        <section>
            @yield("content", "Content")
            
        </section>
    </main>
    <footer>
        @yield("footer", "Footer")
        
    </footer>
</body>
</html>
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Gold Price</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
</head>  
<body>  
    <div class="container mt-5">  
        <h1 class="text-center">Real-Time Gold Price</h1>  
        @if(isset($goldPrice))  
            <h2 class="text-center">Current Gold Price: ${{ number_format($goldPrice, 2) }} USD per ounce</h2>  
        @elseif(isset($error))  
            <h2 class="text-danger text-center">{{ $error }}</h2>  
        @endif  
    </div>  
</body>  
</html>  
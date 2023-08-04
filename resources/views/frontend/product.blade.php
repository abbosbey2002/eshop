<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content={{$product->description ?? 'ecommerce'}}>
    <meta name="keywords" content={{$product->category ?? 'electronica'}}>
    <!-- Cabin Fonts Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link   href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">




    <!-- CSS -->
    <link rel="stylesheet" href="../css/product.css">
    <title>{{ $product->name ?? 'no page' }}</title>
    {{-- <link rel="stylesheet" href="/css/styles.css"> --}}

</head>

<body >

    <div class="container">
        <a class="home-btn" href="/"><img src="../images/arrow-left.png" alt=""> Back</a>
        <div class="product-credentials">
            <div style="margin-top: 50px">
                <img class="show_img_single" src={{ asset('storage/' . $product->image ?? 'no image') }}
                    alt={{ $product->name ?? 'no name' }}>

            </div>
            <div class="product-values">
                <h3 class="product-name">{{ $product->name ?? 'no name' }}</h3>
                <h5 class="">{{ $product->category }}</h5>
                <p class="product-price">{{ $product->price ?? 'no price' }} so`m</p>
                <div class="product-description">
                    <h3>Description</h3>
                    <p>{{ $product->description ?? 'no descr' }}</p>
                </div>
                <a href="tel:{{$contact}}">
                    <button class="contact-btn"> Bog'lanish</button>
                </a>
            </div>
        </div>
    </div>



</body>

</html>

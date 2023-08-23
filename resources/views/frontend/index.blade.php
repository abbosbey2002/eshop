<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Poppins Fonts Family -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <link  href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <!-- Almarai Fonts Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/styles.css">
    {{-- <link rel="stylesheet" href="./css/product.css"> --}}




    <title>Products</title>
</head>

<body>
    <!-- Header section -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">Navbar</a>
          <form action="{{ route('search') }}" method="GET" class="d-flex" role="search">

            <input placeholder="Search" class="form-control me-2" name="search" required/>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <main>
        <!-- Hero section -->


        <!-- search and categories section -->
        <section>
            <div class="container">
                <!-- search -->
                <div class="search">

                    <div class="categories-wrapper">
                        <!-- categories -->
                        <ul class="categories">

                            @foreach ($categorys as $category)

                            <li style="margin-top: 2rem">

                                {{-- <li> <a href={{ route('filter.update', ['filter'=>$category->id]) }}> {{$category->name}} </a>   </li> --}}
                                <form action="filter" method="GET">
                                    <input type="hidden" name='category' value={{$category->name}}>
                                    <button type="submit"> {{$category->name}}  </button>
                                </form>
                            </li>

                            @endforeach
                        </ul>
                        {{-- <span class="categories-more">more</span> --}}
                    </div>
                </div>

                <!-- products -->
                <h3 class="category-name">  <a href="{{route('index')}}"> All </a></h3>
                <ul class="all-products">
                    <!-- real products -->
                    @foreach ($products as $product)

                    <li class="product">
                        <div class="image-wrapper"><img class="show_img" src="{{ asset('storage/'.$product->image) }}" alt="camera"></div>
                        <div class="product-body">
                            <h5>{{substr($product->name, 0, 15)}}...</h5>
                            <div class="product-price">{{$product->price}} so`m</div>

                            <a href={{ route('single.show', ['single'=>$product->id]) }} class="product-view-btn" >View more</a>
                        </div>
                    </li>

                    @endforeach
                    <!--/// real products -->

                </ul>





                @if ((count($products) > 25))
                <div class="laravel-paginate">

                   {{ $products->links();}}
                </div>
                    @endif


            </div>
        </section>
    </main>

    <footer>

        <p class="security"><span>Copyright &copy; Digital Master 2023</span></p>
    </footer>

    <script src="./jsf/script.js"></script>
</body>

</html>

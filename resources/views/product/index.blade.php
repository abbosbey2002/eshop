<x-layout.header>
    <x-slot:title>
        Products
    </x-slot:title>

    <div id="wrapper">

        <!-- Sidebar -->
        <x-layout.sidebar>

        </x-layout.sidebar>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-layout.navbar>

                </x-layout.navbar>
                <!-- End of Topbar -->
                {{-- content --}}
                <div class="container-fluid">

                    <h1>Product      <a class="btn btn-primary" href={{ route('product.create', ['id'=>1]) }}> Add </a>     </h1>

                     {{-- content --}}


{{-- content table --}}
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>price</th>
                    <th> imgage </th>


                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                <tr >
                    <th id="id">{{$product->id}}</th>
                    <td style="margin: auto;">{{$product->name}}</td>
                    <td style="margin: auto;">{{substr($product->description, 0, 50)}}</td>
                    <td style="margin: auto;">{{$product->price}}</td>
                    <td style="padding: 0; margin:0;"> <img class="image_admin" width="100" height="100" src={{asset('storage/'.$product->image)}} alt={{substr($product->name, 0, 20 ) }}> </td>
                    <td><a class="btn border btn-primary" href={{route('product.show', ['product'=>$product->id])}}>more</a> </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>


</div>
</div>

</div>



<!-- /.container-fluid -->



{{-- content table --}}






{{-- content --}}
                </div>
            </div>

        </div>

<style>
    .id{
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-size: 1.7rem;
    }


</style>


</x-layout.header>






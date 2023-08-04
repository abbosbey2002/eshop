
<x-layout.header>
    <x-slot:title>
        product single
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

                    <h1>product</h1>

                     {{-- content --}}

 <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Travel</h6>
        </div>
        <div class="card-body">
            <h3>{{$product->name}}</h3>
            <img  src={{asset('storage/'.$product->image)}} alt={{$product->description}}>
            <h5>{{$product->price}}</h5>
            <p>{{$product->description}}</p>
        </div>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 m-3">

            <form action={{  route('product.destroy', ['product'=>$product->id]) }} method='POST' >
                @csrf
                @method('DELETE')
                 <button class="mx-2 btn btn-danger font-weight-bold text-white" type="submit"> Delete </button>
            </form>
            <a class="text-white btn btn-secondary"  href={{ route('product.edit', ['product' => $product->id]) }}> update </a>

        </div>
        </div>

{{-- content --}}
                </div>
            </div>

        </div>




</x-layout.header>






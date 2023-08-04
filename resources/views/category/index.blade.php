<x-layout.header>
    <x-slot:title>
        Category
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

                    <h1>Category      <a href={{ route('category.create', ['id'=>1]) }}> Add </a>     </h1>

                     {{-- content --}}


{{-- content table --}}
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="">
                    <th>id</th>
                    <th>name</th>
                    <th style="">Action</th>


                </tr>
            </thead>

            <tbody>
                @foreach ($categorys as $category)
                <tr>
                    <th>{{$category->category_id}}</th>
                    <td>{{$category->name}}</td>
                    <td class="d-flex " style="">
                        <form class="mx-2" action={{  route('category.destroy', ['category'=>$category->id]) }} method='POST' >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger font-weight-bold text-white" type="submit"> Delete </button>
                        </form>
                        <a class="btn btn-primary" href={{ route('category.edit', ['category' => $category->id]) }}> update </a>
                     </td>
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




</x-layout.header>






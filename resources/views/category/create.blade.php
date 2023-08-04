<x-layout.header>
    <x-slot:title>
        create category
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

                    <form action={{ route('category.store') }} method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">name</label>
                          <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category_id</label>
                            <input name="category_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    {{-- content --}}
                </div>
            </div>

        </div>




</x-layout.header>

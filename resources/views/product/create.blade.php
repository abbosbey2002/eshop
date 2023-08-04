<x-layout.header>
    <x-slot:title>
        Add products
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

                    <form action='{{route('u')}}' method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">

                            <input placeholder="name" name="name" required type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>


                        <div class="input-group my-2">
                            <div class="custom-file">
                              <input required name="image" type="file" class="custom-file-input" id="inputGroupFile04">
                              <label class="custom-file-label" for="inputGroupFile04">Upload Product image</label>
                            </div>
                          </div>


                        <div class="form-floating">

                            <textarea placeholder="description" name="description" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>

                        <select name="category" class="custom-select my-4" id="inputGroupSelect01">
                            <option selected>category...</option>

                            @foreach($categorys as $category)
                            <option value="{{$category->name}}">{{$category->name}}</option>
                            @endforeach

                          </select>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">price</label>
                            <input name="price" type="number" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    {{-- content --}}
                </div>
            </div>

        </div>




</x-layout.header>

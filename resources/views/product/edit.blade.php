<x-layout.header>
    <x-slot:title>
        edit
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

                    <form action={{ route('product.update', ['product'=>$product->id]) }} enctype='multipart/form-data' method="POST">
                        @method("PUT")
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">name</label>
                          <input value={{$product->name}} name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>



                        <div class="input-group my-2">
                            <div class="custom-file">
                              <input name="image" type="file" class="custom-file-input" id="inputGroupFile04">
                              <label class="custom-file-label" for="inputGroupFile04">Upload Product image</label>
                            </div>
                          </div>


                          <div class="form-floating">
                              <label for="floatingTextarea2">descrition </label>
                            <textarea name="description" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"> {{$product->description}} </textarea>
                          </div>

                          <select name="category" class="custom-select my-4" id="inputGroupSelect01">



                            @foreach($categorys as $category)


                            @if ($category->name == $product->category)
                            <option selected value="{{$category->name}}">{{$category->name}}</option>
                            @else
                            <option value="{{$category->name}}">{{$category->name}}</option>
                            @endif
                            @endforeach

                          </select>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">price</label>
                            <input value={{$product->price}} name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    {{-- content --}}
                </div>
            </div>

        </div>




</x-layout.header>

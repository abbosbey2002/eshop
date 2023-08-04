<x-layout.header>
    <x-slot:title>
        edit portfolyo
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

                    <form action={{ route('portfolyo.update', ['portfolyo'=>$portfolyo->id]) }} enctype='multype' method="POST">
                        @method("PUT")
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">name</label>
                          <input value={{$portfolyo->name}} name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">image</label>
                            <input value={{$portfolyo->image}} name="image" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>


                          <div class="form-floating">
                              <label for="floatingTextarea2">descrition </label>
                            <textarea name="description" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"> {{$portfolyo->description}} </textarea>
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">deadline</label>
                            <input value={{$portfolyo->dedline}} name="deadline" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    {{-- content --}}
                </div>
            </div>

        </div>




</x-layout.header>

<x-layout.header>
    <x-slot:title>
        Portfolyo
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

                    <h1>Portfolyo      <a href={{ route('portfolyo.create', ['id'=>1]) }}> create </a>     </h1>

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
                    <th>deadline</th>
                    <th> imgage </th>


                </tr>
            </thead>

            <tbody>
                @foreach ($portfolyos as $portfolyo)
                <tr>
                    <th>{{$portfolyo->id}}</th>
                    <td>{{$portfolyo->name}}</td>
                    <td>{{substr($portfolyo->description, 0, 50)}}</td>
                    <td>{{$portfolyo->dedline}}</td>
                    <td> <img width="150" height="75" src={{$portfolyo->image}} alt={{$portfolyo->name}}> </td>
                    <td><a class="btn border btn-primary" href={{route('portfolyo.show', ['portfolyo'=>$portfolyo->id])}}>more</a> </td>
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






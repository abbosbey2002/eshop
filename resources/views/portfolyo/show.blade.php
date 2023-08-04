
<x-layout.header>
    <x-slot:title>
        Portfolyo single
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

                    <h1>Portfolyo</h1>

                     {{-- content --}}

 <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Travel</h6>
        </div>
        <div class="card-body">
            <h3>{{$portfolyo->name}}</h3>
            <img  src={{$portfolyo->image}} alt={{$portfolyo->description}}>
            <h5>{{$portfolyo->dedline}}</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quasi perspiciatis incidunt in corrupti adipisci asperiores, porro harum beatae impedit?</p>
        </div>
        <form action={{  route('portfolyo.destroy', ['portfolyo'=>$portfolyo->id]) }} method='POST' >
           @csrf
           @method('DELETE')
           <h6> <button class="btn font-weight-bold text-primary" type="submit"> Delete </button> </h6>
       </form>
     <a class="btn border" href={{ route('portfolyo.edit', ['portfolyo' => $portfolyo->id]) }}> update </a> 
 </div>

{{-- content --}}
                </div>
            </div>

        </div>




</x-layout.header>






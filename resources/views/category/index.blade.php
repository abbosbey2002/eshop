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

            <tbody class="sortable-list">
                @foreach ($categorys as $category)
                <tr draggable="true" class="list">
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




{{-- content --}}
</div>
</div>

</div>



<script>
const items = document.querySelectorAll('.list'); // items
const box = document.querySelector('.sortable-list'); // box

items.forEach((item) => {
item.addEventListener('dragstart', () => {
item.classList.add('dragging');
});

item.addEventListener('dragend', () => {
item.classList.remove('dragging');
saveOrder();
});
});

loadOrder();

function initSortable(e) {
const draggingItem = box.querySelector('.dragging');
const siblings = [...box.querySelectorAll('.list:not(.dragging)')];
let nextSibling = siblings.find((sibling) => {
return e.clientY <= sibling.offsetTop + sibling.offsetHeight / 2;
});

console.log(nextSibling);

box.insertBefore(draggingItem, nextSibling);
}

box.addEventListener('dragover', initSortable);

// Save the order of the items to Local Storage
function saveOrder() {
const itemOrder = [];
items.forEach((item) => {
itemOrder.push(item.textContent);
});

localStorage.setItem('itemOrder', JSON.stringify(itemOrder));
}

// Retrieve the saved order of the items from Local Storage
function loadOrder() {
const itemOrder = JSON.parse(localStorage.getItem('itemOrder'));
if (itemOrder) {
itemOrder.forEach((itemText) => {
const item = Array.from(items).find((el) => el.textContent === itemText);
if (item) {
box.appendChild(item);
}
});
}
}

// Call the loadOrder function on page load to retrieve the saved order
</script>

</x-layout.header>






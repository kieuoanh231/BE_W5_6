<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{!!asset('trainers')!!}">Trainers</a>
        <span>|</span>
        
        @if (Route::getFacadeRoot()->current()->uri()=='trainers')
        <a class="p-2 text-dark" href="{!!asset('search/trainers')!!}">Search</a>
        <span>|</span>
        @elseif(Route::getFacadeRoot()->current()->uri()=='companies')
        <a class="p-2 text-dark" href="{!!asset('search/companies')!!}">Search</a>
        <span>|</span>
        @endif

        <a class="p-2 text-dark" href="{!!asset('companies')!!}">Companies</a>
        <span>|</span>
        <a class="p-2 text-dark" href="{!!asset('categories')!!}">Show Categories</a>
        <span>|</span>
        <a class="p-2 text-dark" href="{!!asset('categories-companies')!!}">Categories Join Companies</a>
    </nav>

</div>
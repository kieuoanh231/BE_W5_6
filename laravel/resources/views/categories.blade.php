<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('meta');
</head>

<body data-new-gr-c-s-check-loaded="14.983.0" data-gr-ext-installed="">

    @include('header');

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">List categories</h1>
        <div class="container w-75">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="color" scope="col">ID</th>
                        <th class="color" scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category_name =>$category_id)
                        <tr>
                            <th scope="row">{!! $category_id !!}</th>
                            <td>{!! $category_name !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        {{-- <div class="link"> {{ $categories->links() }} --}}
        </div>
        @include('footer');


</body>

</html>

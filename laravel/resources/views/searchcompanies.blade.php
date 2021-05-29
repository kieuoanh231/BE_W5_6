<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('meta');
</head>

<body data-new-gr-c-s-check-loaded="14.983.0" data-gr-ext-installed="">

    @include('header');

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Search for Companies</h1>

        <div class="search-container">
            <form method="get" action="{!!asset('search/companies')!!}">
                <input type="text" placeholder="Search for companies.." name="search">
                <div class="formselect">
                    {!! Form::select('categories', $categories, null) !!}
                </div>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        @if (isset($name)||isset($cateId))
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="color" scope="col">ID</th>
                    <th class="color" scope="col">Category_ID</th>
                    <th class="color" scope="col">Name</th>
                    <th class="color" scope="col">Web</th>
                    <th class="color" scope="col">Address</th>
                    <th class="color" scope="col">Code</th>
                    <th class="color" scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <th scope="row">{!! $company->company_id !!}</th>
                        <td>{!! $company->category_id !!}</td>
                        <td>{!! $company->company_name !!}</td>
                        <td>{!! $company->company_web !!}</td>
                        <td>{!! $company->company_address !!}</td>
                        <td>{!! $company->company_code !!}</td>
                        <td>{!! $company->company_phone !!}</td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="link"> {{ $companies->withQueryString()->links() }}</div>
        @endif

        </div>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>


</body>

</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('meta');
</head>

<body data-new-gr-c-s-check-loaded="14.983.0" data-gr-ext-installed="">

    @include('header');

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">List companies</h1>

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
                    <th class="color" scope="col">Trainer_name</th>
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
                         <td>{!! $company->getCompaniesRelation['is_leader'] !!}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        
        <div class="link"> {{ $companies->links() }}
        </div>

        @include('footer');
</body>

</html>

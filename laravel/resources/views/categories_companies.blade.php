<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('meta');
</head>

<body data-new-gr-c-s-check-loaded="14.983.0" data-gr-ext-installed="">

    @include('header');

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">List category_companies</h1>
        <div class="container w-75">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="color" scope="col">ID</th>
                        <th class="color" scope="col">Name</th>
                        <th class="color" scope="col">Company_id</th>
                        <th class="color" scope="col">Company_name</th>
                    </tr>
                </thead>
                <tbody>


                      @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{!! $category->category_id !!}</th>
                            <td>{!! $category->category_name !!}</td>

                            <td style="padding: 0 0">
                                <table class="table table-striped">
                                    @foreach ($category->joinCompanies as $company)
                                        <tr>
                                            <td>{!! $company->company_id!!}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>

                            <td  style="padding: 0 0">
                                <table class="table table-striped">
                                    @foreach ($category->joinCompanies as $company)
                                        <tr>
                                            <td>{!! $company->company_name!!}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </td>
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

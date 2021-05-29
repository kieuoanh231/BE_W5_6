<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('meta');
</head>

<body data-new-gr-c-s-check-loaded="14.983.0" data-gr-ext-installed="">
     
    @include('header');
    
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">List trainers</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="color" scope="col">TrainerID</th>
                    <th class="color" scope="col">Name</th>
                    <th class="color" scope="col">CompanyID</th>
                    <th class="color" scope="col">Email</th>
                    <th class="color" scope="col">Phone</th>
                    <th class="color" scope="col">Company_name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $trainer)
                    <tr>
                        <th scope="row">{!! $trainer->trainer_id !!}</th>
                        <td>{!! $trainer->trainer_name !!}</td>
                        <td>{!! $trainer->company_id !!}</td>
                        <td>{!! $trainer->trainer_email !!}</td>
                        <td>{!! $trainer->trainer_phone !!}</td>
                        <td>{!!$trainer->joinCompanie['company_name']!!}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        
        <div class="link"> {{ $trainers->links() }}</div>
    </div>

    @include('footer');

</body>

</html>

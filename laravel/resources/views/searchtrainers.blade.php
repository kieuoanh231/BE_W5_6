<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('meta');
</head>

<body data-new-gr-c-s-check-loaded="14.983.0" data-gr-ext-installed="">

    @include('header');

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Search for Trainers</h1>

        <div class="search-container">
            <form method="get" action="{!!asset('search/trainers')!!}">
                <input type="text" placeholder="Search for trainers.." name="search">
                <button type="submit">Search</button>
            </form>
            {{-- {!! Form::select('categories[]', $categories, null) !!} --}}
        </div>
            @isset($name)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="color" scope="col">TrainerID</th>
                            <th class="color" scope="col">Name</th>
                            <th class="color" scope="col">CompanyID</th>
                            <th class="color" scope="col">Email</th>
                            <th class="color" scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainers as $item)
                            <tr>
                                <th scope="row">{!! $item->trainer_id !!}</th>
                                <td>{!! $item->trainer_name !!}</td>
                                <td>{!! $item->company_id !!}</td>
                                <td>{!! $item->trainer_email !!}</td>
                                <td>{!! $item->trainer_phone !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            <div class="link"> {{ $trainers->withQueryString()->links() }}</div>
            
        </div>



    @endisset

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

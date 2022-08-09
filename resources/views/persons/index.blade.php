<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top Secret CIA database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">

                <div class="col-md-12">
                    <h1>Top Secret CIA database</h1>
                    <form action="" method="get">
                    <div class="row">

                            <div class="form-group col-md-3">
                                <label for=""> Birth Year</label>
                                <input class="form-control"  placeholder="1993" type="text" name="birth_year" value="{!! request()->has('birth_year') ? request()->get('birth_year') : '' !!}" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Birth Month</label>
                                <input class="form-control" placeholder="08" type="text" name="birth_month" value="{!! request()->has('birth_month') ? request()->get('birth_month') : '' !!}" />
                            </div>
                        <button class="btn btn-warning col-md-2" type="submit" style="height:auto;margin: 25px 10px; width: auto;">
                            Filter
                        </button>


                    </div>
                    </form>
                </div>





    <table class="table table-striped">
        <thead>
        <tr >
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Phone</th>
            <th scope="col">Ip</th>
            <th scope="col">Country</th>
        </tr>
        </thead>
        <tbody>
        @if(count($persons))
            @foreach($persons as $key=>$person)
                <tr>
                    <th scope="row">{!! $person->id !!}</th>
                    <td>{!! $person->email_address !!}</td>
                    <td>{!! $person->name !!}</td>
                    <td>{!! $person->birthday !!}</td>
                    <td>{!! $person->phone !!}</td>
                    <td>{!! $person->ip !!}</td>
                    <td>{!! $person->country !!}</td>
                </tr>
            @endforeach

        @endif

        </tbody>
    </table>
    {{-- Pagination --}}
    <div class="d-flex ">
        {{ $persons->appends(request()->query())->links() }}
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Data Table -->
        <link href="{{ asset('vendor/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <div class="container" id="app">
            <div class="row mt-5">
                <div class="col-10 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-striped text-center" id="myTable">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joining time</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Data Table -->
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script>
            $(document).ready( function () {
                    $('#myTable').DataTable();
                } );
        </script>
    </body>
</html>

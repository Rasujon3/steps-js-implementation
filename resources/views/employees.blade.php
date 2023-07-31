<!DOCTYPE html>
<html>

<head>
    <title>Employees</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="mb-5">Employees</h2>
        <div class="table-responsive">
            {{-- <table class="table table-bordered data-table"> --}}
            <table class="table table-striped  dt-responsive data-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>age</th>
                        <th>mobile</th>
                        <th>nid</th>
                        <th>address</th>
                        <th>gender</th>
                        <th>ssc_gpa</th>
                        <th>ssc_year</th>
                        <th>hsc_gpa</th>
                        <th>hsc_year</th>
                        <th>bsc_cgpa</th>
                        <th>bsc_year</th>
                        <th>msc_cgpa</th>
                        <th>msc_year</th>
                        <th>previous_company_name</th>
                        <th>designation</th>
                        <th>experience</th>
                        <th>current_salary</th>
                        <th width="105px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('ShowEmployee') }}',
                    method: 'GET'
                },
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'age',
                        name: 'age'
                    },
                    {
                        data: 'mobile',
                        name: 'mobile'
                    },
                    {
                        data: 'nid',
                        name: 'nid'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'ssc_gpa',
                        name: 'ssc_gpa'
                    },
                    {
                        data: 'ssc_year',
                        name: 'ssc_year'
                    },
                    {
                        data: 'hsc_gpa',
                        name: 'hsc_gpa'
                    },
                    {
                        data: 'hsc_year',
                        name: 'hsc_year'
                    },
                    {
                        data: 'bsc_cgpa',
                        name: 'bsc_cgpa'
                    },
                    {
                        data: 'bsc_year',
                        name: 'bsc_year'
                    },
                    {
                        data: 'msc_cgpa',
                        name: 'msc_cgpa'
                    },
                    {
                        data: 'msc_year',
                        name: 'msc_year'
                    },
                    {
                        data: 'previous_company_name',
                        name: 'previous_company_name'
                    },
                    {
                        data: 'designation',
                        name: 'designation'
                    },
                    {
                        data: 'experience',
                        name: 'experience'
                    },
                    {
                        data: 'current_salary',
                        name: 'current_salary'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</body>

</html>

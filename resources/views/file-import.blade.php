<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import CSV File in Database & Show in Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Import CSV File & Show in Table
        </h2>

        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Upload CSV File</button>
        </form>

        <h2>Records</h2>         
        <table class="table table-bordered" style="width:110% !important; margin-left:-50px !important">
            <tbody>
            @if($records->isNotEmpty())
                @foreach ($records as $info)
                    <tr>
                        <td>{{ $info->productsId }}</td>
                        <td>{{ $info->productTime }}</td>
                        <td>{{ $info->serviceId_FK }}</td>
                        <td>{{ $info->ProductPlanDuration }}</td>
                        <td>{{ $info->productsSubject }}</td>
                        <td>{{ $info->productsGrade }}</td>
                        <td>{{ $info->productsPrice }}</td>
                        <td>{{ $info->discount_price }}</td>
                        <td>{{ $info->productBoard }}</td>
                    </tr>
                @endforeach
            @else
                <p>No Records found</p>
            @endif
            </tbody>
        </table>

    </div>
</body>

</html>
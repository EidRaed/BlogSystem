@extends('layout.master')
@section('title',' Show All Category')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
 crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


</head>
<body>

    <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
          @foreach ()
             <tr>
                <th scope="row">{{}}</th>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>
                <a class="btn btn-success" href="{{}}" role="button">edit</a>
                <a class="btn btn-danger" href="{{}}}" role="button">Delete</a>
                </td>

              </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <a href="/export-excel" class="btn btn-success mb-5">Excel</a>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center" width="100px">No</th>
                    <th class="text-center">Nama Udang</th>
                    <th class="text-center">Foto udang</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach ($udang as $item)
                      <tr>
                    <th scope="row">{{$no}}</th>
                    <td>{{ $item ->nama_udang}}</td>
                    <td>{{ $item ->foto_udang }}</td>
                </tr>
                <?php $no++ ;?>
                @endforeach
            </tbody>
        </table>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .odd {
            background: green;
        }
    </style>
</head>

<body>


    <h1>List USer Blade Template</h1>
    @php
        
        // $arrayProduct = [

        // ];
        
    @endphp
    @verbatim
    {{ $arrayProduct[0]['name'] }}
    @endverbatim
    
    <table border="1">
        <tr>
            <td>stt</td>
            <td>id</td>
            <td>name</td>
            <td>price</td>
        </tr>
            @forelse ($arrayProduct as $key => $value)
                <tr class="{{ $loop->odd ? 'odd' : '' }}">
                    <td>{{ $loop->iteration}}</td>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['name']}}</td>
                    <td>{{number_format($value['price'],2)}}</td>
                </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center">No data</td>
                    </tr>
            @endforelse
    </table>
</body>

</html>

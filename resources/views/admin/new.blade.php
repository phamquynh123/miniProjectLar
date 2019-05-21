<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="{!! route('change-language', ['en']) !!}">English</a>
    <a href="{!! route('change-language', ['vi']) !!}">Vietnam</a>
    
    <p> 
        {{ trans('message.login') }}
    </p>
    {{ Config::get('app.locale') }}
   {{--  <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Title</th>
                <th>Created_at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($News as $abc)
            <tr>
                <td>{{$abc->id}}</td>
                <td>{{ $abc->title_vi }}</td>
                <td>{{ $abc->content_vi }}</td>
                <td>{{ $abc->created_at }}</td>
            </tr>
            @endforeach

        </tbody>
    </table> --}}
</body>
</html>


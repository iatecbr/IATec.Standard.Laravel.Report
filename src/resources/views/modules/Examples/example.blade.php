@extends('templates.default',[
    'fileTitle' => __('examples.report.file-title'),
    'title' => __('examples.report.title'),
    'css' => 'examples/example.css'
])

@section('main')
    <table class="list">
        <thead>
        <tr>
            <th>{{__('examples.report.list.title.name')}}</th>
            <th>{{__('examples.report.list.title.age')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item['name']}}</td>
                <td>{{$item['age']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

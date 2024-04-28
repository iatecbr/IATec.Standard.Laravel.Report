@extends('templates.default',[
    'fileTitle' => __('examples.report.file-title'),
    'title' => __('examples.report.title'),
    'css' => 'examples/example.css'
])

@section('main')
    <table class="list">
        <thead>
        <tr>
            <th>{{__('examples.report.list.title.id')}}</th>
            <th>{{__('examples.report.list.title.name')}}</th>
            <th>{{__('examples.report.list.title.email')}}</th>
            <th>{{__('examples.report.list.title.address')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['address']['street']}} - {{$item['address']['suite']}} - {{$item['address']['city']}} - {{$item['address']['zipcode']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

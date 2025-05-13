@extends('layouts.default')

@section('title', 'モンティ・ホール問題')
@section('content')
    <p>的中回数は...『{{ $wonCount }} / {{ count($results) }}』({{ $wonCount / count($results) * 100 }}%)です</p>
    <table>
        <tr>
            <th>#</th>
            <th>結果</th>
        </tr>
        @foreach($results as $result)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $result ? '的中' : 'ハズレ' }}</td>
            </tr>
        @endforeach
    </table>
@endsection

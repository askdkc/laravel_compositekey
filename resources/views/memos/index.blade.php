@extends('layout')
@section('content')

 <div class="row justify-content-left">

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
    <a href="/create"><button type="button" class="btn btn-primary mt-3">新規データ作成</button></a><br><br>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>独自ID</td>
          <td>メモ</td>
        </tr>
    </thead>
    <tbody>
        @foreach($memos as $memo)
        <tr>
            <td>{{$memo->id}}</td>
            <td>{{$memo->subid}}</td>
            <td><a href="/memos/{{ $memo->id }}/{{ $memo->subid }}/edit/">{{$memo->memo}}</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection

@extends('layouts.helloapp')
<style>
  .pagination {
    font-size: 10pt;
  }

  .pagination li {
    display: inline-block;
  }

  tr th a:link {
    color: white;
  }

  tr th a:visited {
    color: white;
  }

  tr th a:hover {
    color: white;
  }

  tr th a:active {
    color: white;
  }
</style>

@section('title', 'Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<table>
  <tr>
    <th>
      <a href="/hello?sort=name">name</a>
      <a href="/hello?sort=mail">mail</a>
      <a href="/hello?sort=age">age</a>
    </th>
  </tr>
  <tr>
    <th>Name</th>
    <th>Mail</th>
    <th>Age</th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{ $item->name }}</td>
    <td>{{ $item->mail }}</td>
    <td>{{ $item->age }}</td>
  </tr>
  @endforeach
</table>
{{ $items->appends(['sort' => $sort])->links() }}
@section('footer')
@endsection
@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }

  tr:nth-child(odd) td {
    background-color: #FFFFFF;
  }

  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'index.blade.php')

@section('content')
  <p>{{ $msg }}</p>
  @if(count($errors) > 0)
  <p>入力に問題があります。再入力して下さい。</p>
  @endif
  <form action="/hello" method="post">
    <table>
      @csrf
      @if($errors->has('msg'))
      <tr>
        <th>ERROR</th>
        <td>{{ $errors->first('msg') }}</td>
      </tr>
      @endif
      <tr>
        <th>Message：</th>
        <td>
          <input type="text" name="msg" value="{{ old('msg') }}" />
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <input type="submit" value="send" />
        </td>
      </tr>
    </table>
  </form>
@endsection
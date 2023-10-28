@extends('layouts.app');

@section('content')
  @if ($users->isNotEmpty())
    @foreach ($users as $item)
      <p>{{ $item->name }}</p>
      <p>{{ $item->sex }}</p>
      <p>{{ $item->year }}</p>
      <p>{{ $item->month }}</p>
      <p>{{ $item->day }}</p>
      <p>{{ $item->support }}</p>
    @endforeach
  @endif

  TOPページ
  <a href="{{ url('users/create') }}">新規作成</a>
@endsection
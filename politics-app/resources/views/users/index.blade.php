@extends('layouts.app');

@section('content')
  TOPページ
  <a href="{{ url('users/create') }}">新規作成</a>
    新規登録
  </button>
@endsection
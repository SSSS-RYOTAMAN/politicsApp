@extends('layouts.app')

@section('content')

  新規登録画面
  <form action="/user" method="POST">
    @csrf
    <input name="name" type="text" placeholder="テスト太郎" value="{{ old('name') }}">
    @error('name')
      <p>{{ $message }}</p>
    @enderror
    <select name="sex">
      @foreach (PrefectureConst::SEX as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
      @endforeach
    </select>
    @error('sex')
      <p>{{ $message }}</p>
    @enderror
    <select name="year">
      @foreach (PrefectureConst::YEAR as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
      @endforeach
    </select>　年
    @error('year')
      <p>{{ $message }}</p>
    @enderror
    <select name="month">
      @foreach (PrefectureConst::MONTH as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
      @endforeach
    </select>　月
    @error('month')
      <p>{{ $message }}</p>
    @enderror
    <select name="day">
      @foreach (PrefectureConst::DAY as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
      @endforeach
    </select>　日
    @error('day')
      <p>{{ $message }}</p>
    @enderror
    <select name="support" id="support">
      @foreach (PrefectureConst::SUPPORT as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
      @endforeach
    </select>
    @error('support')
      <p>{{ $message }}</p>
    @enderror
    <input name="email" type="email" placeholder="test@test.com" value="{{ old('email') }}">
    @error('email')
      <p>{{ $message }}</p>
    @enderror
    <input name="password" type="password">
    @error('password')
      <p>{{ $message }}</p>
    @enderror
    <input name="password_confirmation" type="password">
    @error('password_confirmation')
      <p>{{ $message }}</p>
    @enderror
    <button type="submit">登録</button>
  </form>
@endsection
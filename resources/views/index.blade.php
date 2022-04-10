@extends('layout')

@section('content')

<main>
    <div class="main-wrapper">
      <h1 class="main-ttl">さんお疲れ様です！</h1>
      <div class="attendance grid">
        <button class="attendance-start">勤務開始</button>
        <button class="attendance-end">勤務終了</button>
        <button class="rest-start">休憩開始</button>
        <button class="rest-end">休憩終了</button>
      </div>
    </div>
  </main>

  @endsection
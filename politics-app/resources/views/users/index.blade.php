@extends('layouts.app')
@section('content')
  <!-- VISION -->
  <section id="sec01">
    <header>
      <h2>TOP</h2>
    </header>
    <div class="vision">
      <div>
        <canvas id="graphArea" height="450" width="600"></canvas>
      </div>
      @if ($users->isNotEmpty())
        @foreach ($users as $user)
          <p>{{ $user->name }}</p>
          <p>{{ $user->sex }}</p>
          <p>{{ $user->year }}</p>
          <p>{{ $user->month }}</p>
          <p>{{ $user->day }}</p>
          <p>{{ $user->support }}</p>
        @endforeach
      @endif
      <a href="{{ url('users/create') }}">新規作成</a>
    </div>
  </section>
  <!-- // VISION -->
  <!-- MESSAGE -->
  <section id="sec02">
    <div class="wrap">
      <p class="bg"><img src="images/sec02_01.jpg" alt=""></p>
      <div class="txt">
        <div class="vMid">
          <h2>MESSAGE</h2>
          <p>ちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
        </div>
      </div>
    </div>
    <div id="sec02_02" class="wrap">
      <p class="bg"><img src="images/sec02_02.jpg" alt=""></p>
      <div class="txt">
        <div class="vMid">
          <h2>MESSAGE</h2>
          <p>日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
        </div>
      </div>
    </div>
  </section>
  <!-- // MESSAGE -->
  <!-- SERVICE -->
  <section id="sec03">
    <div class="inner">
      <ul class="col3">
        <li>
          <h2>SERVICE</h2>
          <img src="images/circleImg01.png" width="288" height="288" alt="">
          <p>科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
        </li>
        <li>
          <h2>MESSAGE</h2>
          <img src="images/circleImg02.png" width="288" height="288" alt="">
          <p>日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば意義であるならば。</p>
        </li>
        <li>
          <h2>STORY</h2>
          <img src="images/circleImg03.png" width="288" height="288" alt="">
          <p>科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
        </li>
      </ul>
    </div>
  </section>
  <!-- // SERVICE -->
  <!-- STORY -->
  <section id="sec04">
    <div class="inner">
      <ul class="col2">
        <li>
          <h2>STORY</h2>
          <p>科学的研究というのが近代史学の学問的方法によるちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれている。研究という意義であるならば、研究という意義であるならばこれは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいうには及ばないはずである。</p>
        </li>
        <li>
          <h2>SUCCESS</h2>
          <p>ちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれているということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいうには及ばないはずである。</p>
        </li>
      </ul>
    </div>
  </section>
  <!-- // STORY -->
  <!-- PROFILE -->
  <section id="sec05">
    <header>
      <h2>PROFILE</h2>
    </header>
    <div class="inner">
      <ul class="col2">
        <li>
          <dl>
            <dt>社名</dt>
            <dd>Sample Company</dd>
            <dt>代表取締役</dt>
            <dd>見本 太郎</dd>
            <dt>住所</dt>
            <dd>見本県見本市仮区見本町1-3-5</dd>
            <dt>電話番号</dt>
            <dd>01234-567-8901</dd>
            <dt>設立</dt>
            <dd>20XX年5月5日</dd>
            <dt>資本金</dt>
            <dd>1,000,000円</dd>
            <dt>主な取引先</dt>
            <dd><p><a href="#" target="_blank">見本商事株式会社</a></p><p><a href="#" target="_blank">株式会社年中無休商事</a></p><p><a href="#" target="_blank">株式会社仮称</a></p></dd>
          </dl>
        </li>
        <li>
          <div id="map">
            <!-- GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.5937927089367!2d136.92980931491988!3d36.70829797996758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff781ec5af4ca3f%3A0x2ade3e8e4c2801b8!2z56aP5bKh6aeF!5e0!3m2!1sja!2sus!4v1478313402186" allowfullscreen></iframe>
            <!-- // GOOGLE MAP -->
          </div>
        </li>
      </ul>
    </div>
  </section>
@endsection

@section('script')
  <script type="text/javascript">
  const ctx = document.getElementById("graphArea").getContext("2d");
  const myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["自由民主党", "立憲民主党", "日本維新の会", "公明党", "日本共産党", "国民民主党", "れいわ新撰組", "社会民主党", "政治家女子48党", "参政党", "支持する政党がない"],
      datasets: [
        {
          label: "data 1",
          data: [1, 2, 3, 3, 4, 5, 6, 7, 8, 9, 10],
          backgroundColor: [
            "#e70112", // 自由民主党
            "#024197", // 立憲民主党
            "#37c200", // 日本維新の会
            "#f55881", // 公明党
            "#4d78d4", // 日本共産党
            "#fbbe00", // 国民民主党
            "#e4027e", // れいわ新撰組
            "#3d9be7", // 社会民主党
            "#ffef00", // 政治家女子48党
            "#ffa500", // 参政党
            "#b8b8b8", // 支持する政党がない
          ],
        },
      ],
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: "top",
        },
        title: {
          display: true,
          text: "独自の政党支持率",
        },
      },
    },
  });
  </script>
@endsection
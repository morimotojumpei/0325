@extends('layouts.app')
@section('content')
<title>Appointment</title>

<!-- CSSはcontact.cssと共通 -->
<div class="form_comment">
    <h1>予約フォーム</h1>
    <p>イベントにお申込み頂きますと、 担当幹事より、開催場所や時間などの詳細をお送りします。 また、フリーメールの場合(yahoo、google)、迷惑メールフォルダに入ることが、 非常に高いため、ご注意下さい。</p>
</div>
  <form action="/confirm_appointment" method="post" accept-charset="UTF-8">
    @csrf
    <table class="contact" cellspacing="0" cellpadding="0">
      <!-- テーブルのデフォルトの余白をなくす -->
      <tr>
        <th><span>必須</span><label for="username">お名前</label></th>
        <td><input type="text" name="username" id="username" placeholder="盛本 純平"></td>
      </tr>

      <tr>
        <th><span>必須</span><label for="furigana">ふりがな</label></th>
        <td><input type="text" name="furigana" id="furigana" placeholder="もりもと じゅんぺい"></td>
      </tr>

      <tr>
        <th><span>必須</span><label for="email">アドレス</label></th>
        <td><input type="email" mail="email" id="email" placeholder="mikodapps@gmail.com"></td>
      </tr>

      <tr>
        <th><span>必須</span><label for="confirm">確認用アドレス</label></th>
        <td><input type="text" name="confirm" id="confirm" placeholder="mikodapps@gmail.com"></td>
      </tr>

      <tr>
        <th><span>必須</span><label for="tel">電話番号(ハイフン無)</label></th>
        <td><input type="tel" name="tel" id="tel" placeholder="080xxxxxxxx"></td>
      </tr>

      <!-- ラジオボタンで男か女かどちらかを選ばせるために、name属性を揃えている。 -->
       <tr>
        <th><span>必須</span><label>性別</label></th>
        <td><label for="men"></label> <input type="radio" name="sex" value="man">男性 : <?php echo $request['man_price1']?>
          <label for="women"></label><input type="radio" name="sex" value="woman">女性 : <?php echo $request['woman_price1']?></td>
        </tr>

          {{-- <p>
            <input type="radio" name="mountain" value="富士山">富士山
           <input type="radio" name="mountain" value="エベレスト">エベレスト
           <input type="radio" name="mountain" value="ヒマラヤ">ヒマラヤ
        </p> --}}
        {{-- </div> --}}
          {{-- <th><p>{{$request['man_price1']}}</p></th>
          <th><p>{{$request['woman_price1']}}</p></th> --}}


      </tr>

      <tr>
        <th><span>必須</span><label for="age">年齢</label></th>
        <td><input type="text" name="age" id="age"> 歳</td>
      </tr>

      <tr>
        <th><span>必須</span><label for="number">参加人数</label></th>
        <td><input type="text" name="number" id="number"> 名</td>
      </tr>

      <tr>
        <th>・<label name="event" for="events">参加イベント</label></th>
        <td><p>{{$request['title']}}</p></td>
        <input type="hidden" name="title" value="{{$request['title']}}">
      </tr>

      <tr>
        <th><span>必須</span><label for="content">その他</label></th>
        <td><textarea name="content" id="content" cols="45" rows="5" size="40" placeholder="複数人で参加される場合は参加者の氏名をご記入下さい。"></textarea></td>
      </tr>

      <!-- ラジオボタンでどちらかを選ばせるために、name属性を揃えている。 -->
      <tr>
        <th><span class="event_info">任意</span><label>今後のイベント情報</label></th>
        <td><label for="get"></label> <input type="radio" name="get" id="get">受け取る
          <label for="not_get"></label><input type="radio" name="get" id="not_get">受け取らない</td>
      </tr>

    </table>
    <div class="submit_button">
      <input type="submit" class="submit" value="この内容で予約する">
    </div>
  </form>

    
  
@endsection
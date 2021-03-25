@extends('layouts.app')
@section('content')

{{-- クレジットカード用 --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>complete_appointment</title>
  

    <table class="contact" cellspacing="0" cellpadding="0">
      <!-- テーブルのデフォルトの余白をなくす -->
      <tr>
        <th><label for="username">お名前</label></th>
        <td><p>{{$request['username']}}</p></td>
      </tr>

      <tr>
        <th><label for="furigana">ふりがな</label></th>
        <td><p>{{$request['furigana']}}</p></td>
      </tr>

      {{-- <tr>
        <th><label for="email">アドレス</label></th>
        <td><p>{{$request['email']}}</p></td>
      </tr> --}}

      <tr>
        <th><label for="confirm">アドレス</label></th>
        <td><p>{{$request['confirm']}}</p></td>
      </tr>

      <tr>
        <th><label for="tel">電話番号(ハイフン無)</label></th>
        <td><p>{{$request['tel']}}</p></td>
      </tr>

      
       <tr>
        <th><label>性別</label></th>
        <td><label for="men"></label>javascript必要？</td>
      </tr>
      
      <tr>
        <th><label for="age">年齢</label></th>
        <td><p>{{$request['age']}}</p></td>
      </tr>

      <tr>
        <th><label for="number">参加人数</label></th>
        <td><p>{{$request['number']}}</p></td>
      </tr>

      <tr>
        <th>参加イベント</th>
        <td><p>{{$request['title']}}</p></td>
      </tr>

      <tr>
        <th><label for="content">その他</label></th>
        <td><p>{{$request['content']}}</p></td>
      </tr>
    </table>
    
    <form action="{{ asset('payment') }}" method="POST" class="text-center mt-5">
        @csrf
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="1000"
            data-name="Stripe Demo"
            data-label="決済をする"
            data-description="これはStripeのデモです。"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-currency="JPY">
        </script>
    </form>
    <<p><a class="btnGold" href="home">Homeに戻る</a></p>
@endsection
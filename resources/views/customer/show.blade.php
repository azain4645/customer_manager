@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">顧客情報</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">氏名</th>
                          <td>{{ $customer->name}}</td>
                        </tr>
                        <tr>
                          <th scope="row">メールアドレス</th>
                          <td>{{ $customer->email}}</td>
                        </tr>
                        <tr>
                          <th scope="row">電話番号</th>
                          <td>{{ $customer->tel}}</td>
                        </tr>
                        <tr>
                          <th scope="row">住所</th>
                          <td>{{ $customer->address}}</td>
                        </tr>
                        <tr>
                          <th scope="row">性別</th>
                          <td>{{ $customer->gender_text}}</td>
                        </tr>
                        <tr>
                          <th scope="row">登録日</th>
                          <td>{{ $customer->created_at}}</td>
                        </tr>
                      </tbody>
                    </table>
                    <p>{{ $customer->comment}}</p>

                    <form method="GET" action="{{route('customer.edit', ['id' => $customer->id] )}}">
                    @csrf
                    <button type="submit" class="btn btn-primary">編集する</button>
                    </form>
                    
                    <form action="{{route('customer.destroy', ['id' => $customer->id ])}}" method="post" id="delete_{{ $customer->id}}">
                    @csrf
                    <a href="#" class="btn btn-danger" data-id="{{ $customer->id}}" onclick="deletePost(this)">削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
<!--
/************************************
削除ボタンを押してすぐにレコードが削除
されるのも問題なので、一旦javascriptで
確認メッセージを流します。
*************************************/
//-->
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除していいですか?')) {
    document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>

@endsection

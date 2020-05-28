@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    showです
                    {{ $customer->name}}
                    {{ $customer->email}}
                    {{ $customer->tel}}
                    {{ $customer->address}}
                    {{ $gender}}
                    {{ $customer->comment}}
                    {{ $customer->created_at}}
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

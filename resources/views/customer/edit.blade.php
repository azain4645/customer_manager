@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">顧客情報の変更</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('customer.update',['id' => $customer->id ])}}">
                    @csrf

                    <div class="form-group">
                      <label for="">氏名</label>
                      <input type="text" class="form-control" name="name" value="{{ $customer->name}}">
                    </div>

                    <div class="form-group">
                      <label for="">メールアドレス</label>
                      <input type="email" class="form-control" name="email" value="{{ $customer->email }}">
                    </div>

                    <div class="form-group">
                      <label for="">電話番号</label>
                      <input type="text" class="form-control" name="tel" value="{{ $customer->tel }}">
                    </div>

                    <div class="form-group">
                      <label for="">住所</label>
                      <input type="text" class="form-control" name="address" value="{{ $customer->address }}">
                    </div>
                  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" value="1" @if($customer->gender === 1) checked @endif >
                      <label class="form-check-label">男性</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" value="2" @if($customer->gender === 0) checked @endif>
                      <label class="form-check-label">女性</label>
                    </div>

                    <div class="mt-3 form-group">
                      <label for="">コメント</label>
                      <textarea class="form-control" id="comment" rows="4">{{ $customer->comment}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">更新する</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

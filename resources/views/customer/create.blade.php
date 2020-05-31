@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">顧客情報の登録</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{route('customer.store')}}">
                    @csrf

                    <div class="form-group">
                      <label for="">氏名</label>
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                      <label for="">住所</label>
                      <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                    </div>
                    
                    <div class="form-group">
                      <label for="">メールアドレス</label>
                      <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                      <label for="">電話番号</label>
                      <input type="text" class="form-control" name="tel" value="{{ old('tel') }}">
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" value="1">
                      <label class="form-check-label">男性</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" value="0">
                      <label class="form-check-label">女性</label>
                    </div>

                    <div class="mt-3 form-group">
                      <label for="">コメント</label>
                      <textarea class="form-control" id="comment" rows="4">{{ old('comment') }}</textarea>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" name="caution">
                      <label class="form-check-label" for="defaultCheck1">
                        注意事項に同意する
                      </label>
                    </div>

                    <input class="mt-3 btn btn-info" type="submit" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

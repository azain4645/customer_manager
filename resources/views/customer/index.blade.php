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

                    <form method="GET" action="{{ route('customer.create') }}">
                    <button type="submit" class="btn btn-primary">新規登録</button>
                    </form>
                    
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">氏名</th>
                          <th scope="col">性別</th>
                          <th scope="col">メールアドレス</th>
                          <th scope="col">登録日時</th>
                          <th scope="col">詳細</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($customers as $customer)
                        <tr>
                          <td>{{ $customer->id}}</td>
                          <td>{{ $customer->name}}</td>
                          <td>{{ $customer->gender}}</td>
                          <td>{{ $customer->email}}</td>
                          <td>{{ $customer->created_at}}</td>
                          <td><a href="{{ route('customer.show', ['id' => $customer->id] ) }}">詳細を見る</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

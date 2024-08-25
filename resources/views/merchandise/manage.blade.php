@extends('layout.cafe_signin_master')

<style>
.container {
    padding-top: 150px; /* 讓內容區塊下移，避免被header擋住 */
}
</style>


@section('content')
<div class="container">
        <h1>{{ $title }}</h1>

        {{-- 錯誤訊息模板元件 --}}
        @include('components.error')

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>編號</th>
                        <th>產品種類</th>
                        <th>商品名稱</th>
                        <!-- <th>商品英文名稱</th> -->
                        <th>圖片</th>
                        <th>狀態</th>
                        <th>價格</th>
                        <th>庫存數量</th>
                        <th>編輯</th>
                        <th>刪除</th>
                    </tr>
                    @foreach($MerchandisePaginate as $Merchandise)
                        <tr>
                            <td> {{ $Merchandise->id }}</td>
                            <td> {{ $Merchandise->kind }}</td>
                            <td> {{ $Merchandise->name }}</td>
                            <!-- <td> {{ $Merchandise->name_en }}</td> -->
                            <td>
                            <img src="{{ asset($Merchandise->photo) }}" width='100' height='100'/>
                            </td>
                            <td>
                                @if($Merchandise->status == 'C')
                                    <span class="label label-default">
                                        編輯中
                                    </span>
                                @else
                                    <span class="label label-success">
                                        銷售中
                                    </span>
                                @endif
                            </td>
                            <td> {{ $Merchandise->price }}</td>
                            <td> {{ $Merchandise->remain_count }}</td>
                            <td>
                            <a href="/merchandise/{{ $Merchandise->id }}/edit">
                                    <i class="bi bi-pencil" style="font-size: 24px;"></i>
                            </a>
                            </td>
                            <td>
                            <a href="/merchandise/{{ $Merchandise->id }}/delete">
                                    <i class="bi bi-trash3" style="font-size: 24px;"></i>
                            </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

           
            </div>
        </div>
    </div>
@endsection
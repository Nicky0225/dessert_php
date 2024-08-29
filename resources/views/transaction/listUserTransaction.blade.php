<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.cafe_signin_master')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<style>
.container {
    padding-top: 150px; /* 讓內容區塊下移，避免被header擋住 */
}


svg {
    width: 24px;
    height: 24px;
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
                        <th>商品名稱</th>
                        <!-- <th>圖片</th> -->
                        <th>單價</th>
                        <th>數量</th>
                        <th>總金額</th>
                        <th>購買時間</th>
                    </tr>
                    @foreach($TransactionPaginate as $Transaction)
                        <tr>
                            <td>
                                <a href="/merchandise/{{ $Transaction->Merchandise->id }}">
                                    {{ $Transaction->Merchandise->name }}
                                </a>
                            </td>
                            <!-- <td>
                                <a href="/merchandise/{{ $Transaction->Merchandise->id }}">
                                    <img src="{{ $Transaction->Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                                </a>
                            </td> -->
                            <td>{{ $Transaction->price }}</td>
                            <td>{{ $Transaction->buy_count }}</td>
                            <td>{{ $Transaction->total_price }}</td>
                            <td>{{ $Transaction->created_at }}</td>
                        </tr>
                    @endforeach
                </table>


            

                <!-- {{-- 分頁頁數按鈕 --}} -->
                {{ $TransactionPaginate->links() }}

                
            </div>
        </div>
    </div>

    @if (session('message'))
    <script>
        window.onload = function() {
            var messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
            messageModal.show();
        };
    </script>
@endif




<!-- 模態框 -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="messageModalLabel">訊息</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ session('message') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確定</button>
            </div>
        </div>
    </div>
</div>

@endsection
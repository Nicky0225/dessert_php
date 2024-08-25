<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.cafe_signin_master')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 
    <div class="container">
        <h1>{{ $title }}</h1>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        
        
     
        
       
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            /* Firefox */
            input[type=number] {
                moz-appearance: textfield;
            }

            .w3-button {width:20px;}


            .col-md-12{
                padding-top: 100px; /* 讓內容區塊下移，避免被header擋住 */
            }

            th, td {
                width: 150px; /* 根據需要調整這個寬度 */
                text-align: center; /* 讓文字在欄位內部居中 */
                padding: 10px; /* 設置適當的內距，讓內容看起來更整齊 */
            }


        </style>

        {{-- 錯誤訊息模板元件 --}}
        @include('components.error')

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr><h3><strong>我的購物車</strong></h3></tr>
                    <tr>
                        <th>商品名稱</th>
                        <th>單價</th>
                        <th>數量</th>
                        <th>小計</th>
                        <th>刪除</th>
                    </tr>
                    @foreach($CartPaginate as $Cart)
                        <tr>
                            <td>
                                <a href="/merchandise/{{ $Cart->Merchandise->id }}">
                                    {{$Cart->Merchandise->name }}
                                </a>
                            </td>
                            <td>
                                {{ $Cart->price }}
                            </td>

    
                            <td>
                                <form action="{{ route('updateCartQuantity', $Cart->id) }}" method="POST" id="cartForm-{{ $Cart->id }}">
                                    @csrf
                                    <button style="border:0px; background-color:#FFAF60; color: white;" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-number">-</button>
                                    <input min="0" name="quantity" value="{{ $Cart->buy_count }}" type="number" style="width:50px;">
                                    <button style="border:0px;background-color:#FFAF60; color: white;" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn  btn-number">+</button>
                                    
                                </form>
                            </td>
                    <td id="total-price-{{ $Cart->id }}">{{ $Cart->total_price }}</td>

                        <script>
                        function updateQuantity({{ $Cart->id }}, operation) {
                            let quantityInput = document.getElementById('quantity-' +{{ $Cart->id }});
                            let currentQuantity = parseInt(quantityInput.value);

                            if (operation === 'increment') {
                                quantityInput.value = currentQuantity + 1;
                            } else if (operation === 'decrement' && currentQuantity > 0) {
                                quantityInput.value = currentQuantity - 1;
                            }

                            recalculatePrice({{ $Cart->id }}, {{ $Cart->price }});
                        }

                        function recalculatePrice({{ $Cart->id }}, unitPrice) {
                            let quantity = document.getElementById('quantity-' + {{ $Cart->id }}).value;
                            let newTotalPrice = unitPrice * quantity;

                            // 更新页面上的总价显示
                            document.getElementById('total-price-' +{{ $Cart->id }}).innerText = newTotalPrice.toFixed(2);
                        }
                        </script>

                            
                    </td>
                            <!-- <td>{{$Cart->total_price }}</td> -->
                            <!-- <td>{{ $Cart->created_at }}</td> -->

                    <td>
                        <a href="/cart/cartdelete/{{ $Cart->id }}">
                            <i class="bi bi-trash3" style="font-size: 24px;"></i>
                        </a>
                    </td>
                    </tr>
                    @endforeach
                    


                </table>
                
                @php
                    $totalAmount = 0; // 初始化總金額
                @endphp

                @foreach ($CartPaginate as $Cart)
                    @php
                        $itemTotalPrice = $Cart->price * $Cart->buy_count; // 計算每個商品的總價
                        $totalAmount += $itemTotalPrice; // 累積加總
                    @endphp


                @endforeach

                <!-- 顯示購物車的總金額 -->
                <div>
                    <h5><strong>總金額: {{ $totalAmount }}</strong></h5>
                </div>




                    


                <!-- 新增下單按鈕 -->
                <form action="{{ route('placeOrder') }}" method="POST" >
                    @csrf

                    <button type="submit" style="border:0px; background-color:#FF5733; color: white;" class="btn btn-order">下單</button>
                </form>

                @if(session('message'))
                    <script>
                        window.onload = function() {
                            alert('{{ session('message') }}');
                        };
                    </script>
                @endif


                
                {{-- 分頁頁數按鈕 --}}
                {{$CartPaginate->links() }}
            </div>
        </div>
    </div>
@endsection
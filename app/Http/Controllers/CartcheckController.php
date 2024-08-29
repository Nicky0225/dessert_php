<?php

namespace App\Http\Controllers;
use App\Shop\Entity\Merchandise;
use Illuminate\Http\Request;
use App\Shop\Entity\User;
use App\Shop\Entity\Transaction;
use Exception;

use App\Shop\Entity\Cart;

use Validator;
use DB;
class CartcheckController extends Controller {
    
    public function MerchandiseItemCartPage()
    {
        $user_id = session()->get('user_id');
    
        // 每頁資料量
        $row_per_page = 10;
        // 撈取商品分頁資料
        $CartPaginate = Cart::where('user_id', $user_id)
            ->OrderBy('created_at', 'desc')
            ->with('Merchandise')
            ->paginate($row_per_page);
    
        // 設定商品圖片網址
        foreach ($CartPaginate as &$Cart) {
            if (!is_null($Cart->Merchandise->photo)) {
                // 設定商品照片網址
                $Cart->Merchandise->photo = url($Cart->Merchandise->photo);
            }
        }
    
        $binding = [
            'title' => trans('shop.cart.list'),
            'CartPaginate'=> $CartPaginate,
        ];
    
        return view('cart.listUserCart', $binding);
    }

    public function updateCartQuantity(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->buy_count = $request->input('quantity');
        $cart->total_price = $cart->buy_count * $cart->price;
        $cart->save();
    
        return redirect()->back()->with('success', '購買數量及總價格已更新');
    }


    

    // 商品購買處理
   // 商品購買處理
public function placeOrder()
{
    // 取得登入會員資料
    $user_id = session()->get('user_id');
    $User = User::findOrFail($user_id);

    try {
        // 交易開始
        DB::beginTransaction();

        // 取得使用者購物車資料
        $cart_items = Cart::where('user_id', $user_id)->get();

        // 如果購物車為空，拋出異常
        if ($cart_items->isEmpty()) {
            throw new Exception('購物車內沒有商品');
        }

        // 處理購物車中的每個商品
        foreach ($cart_items as $cart_item) {
            // 取得商品資料
            $Merchandise = Merchandise::findOrFail($cart_item->merchandise_id);

            // 購買數量
            $buy_count = $cart_item->buy_count;
            // 購買後剩餘數量
            $remain_count_after_buy = $Merchandise->remain_count - $buy_count;

            if ($Merchandise->remain_count < $buy_count) {
                // 購買後剩餘數量小於 0，不足以賣給使用者
                throw new Exception($Merchandise->name . '庫存不足，無法購買');
                
            }




            // 紀錄購買後剩餘數量
            $Merchandise->remain_count = $remain_count_after_buy;
            $Merchandise->save();

            // 總金額：總購買數量 * 商品價格
            $total_price = $buy_count * $Merchandise->price;

            $transaction_data = [
                'user_id'        => $User->id,
                'merchandise_id' => $Merchandise->id,
                'price'          => $Merchandise->price,
                'buy_count'      => $buy_count,
                'total_price'    => $total_price,
            ];

            // 建立交易資料
            Transaction::create($transaction_data);
        }

        // 清空購物車
        Cart::where('user_id', $user_id)->delete();

        // 交易結束
        DB::commit();

        // 回傳購物成功訊息
        $message = [
            'msg' => [
                trans("恭喜~下單成功"),
            ],
        ];
        return redirect()
        ->to('/transaction/')
        ->with('message', trans('恭喜~下單成功'));

    } catch (Exception $exception) {
        // 恢復原先交易狀態
        DB::rollBack();

        // 回傳錯誤訊息
        $error_message = [
            'msg' => [
                $exception->getMessage(),
            ],
        ];
        return redirect()
            ->back()
            ->withErrors($error_message)
            ->withInput();
    }
}


}
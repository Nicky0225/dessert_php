<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\Merchandise;


use App\Shop\Entity\Cart;

use App\Shop\Entity\User;
use DB;
use Exception;
use Validator;

use Image;

class CartController extends Controller
{
    

  

    // 商品購買處理
    public function MerchandiseItemCartProcess($merchandise_id)
    {
        // 接收輸入資料
        $input = request()->all();
        // 驗證規則
        $rules = [
            // 商品購買數量
            'buy_count' => [
                'required',
                'integer',
                'min:1',
            ],
        ];

        // 驗證資料
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            // 資料驗證錯誤
            return redirect('/merchandise/' . $merchandise_id)
                ->withErrors($validator)
                ->withInput();
        }
        
        try {
            // 取得登入會員資料

            
            // $user_id = session()->get('user_id');
            // $User = User::findOrFail($user_id);

            if($user_id = !session()->get('user_id')){
                throw new Exception('請先登入會員，才能加入購物車');
            }
            
            $user_id = session()->get('user_id');
            $User = User::findOrFail($user_id);
            
            
            // 交易開始
            DB::beginTransaction();
            // 取得商品資料
            $Merchandise = Merchandise::findOrFail($merchandise_id);
            
            // 購買數量
            $buy_count = $input['buy_count'];
            // 確認庫存是否足夠
            $remain_count_after_buy = $Merchandise->remain_count;
            if ($Merchandise->remain_count < $buy_count) {
                // 剩餘數量小於可買數量，不足以賣給使用者
                throw new Exception('商品庫存不足，無法購買');
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
            
            //加入購物車
            $cart = Cart::create($transaction_data);
            DB::commit();
            // dd($cart);
            // 回傳加入購物車成功訊息
            $message = [
                'msg' => [
                    trans('加入購物車成功'),
                ],
            ];
            return redirect()
            ->to('/merchandise/' . $Merchandise->id)
            ->with('message', trans('加入購物車成功'));
        


            //


            
        } catch (Exception $exception) {

            // return 123;
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

    public function CartItemDelete($cart_id)
    {
        // 刪除購物車項目
        $cartItem = Cart::where('id', $cart_id)->delete();
    
        // 重定向並顯示成功訊息
        return redirect(route('cart'))->with('message', '購物車項目已刪除');
    }
    
    

}


    



    



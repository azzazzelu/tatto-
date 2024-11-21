<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Получаем ID продукта
        $productId = $request->input('product_id');

        // Проверяем, существует ли такой продукт
        if ($product = Products::find($productId)) {
            // Создаем новый элемент корзины или обновляем существующий
            $cartItem = CartItem::updateOrCreate(
                ['user_id' => Auth::id(), 'product_id' => $product->id],
                ['quantity' => DB::raw('quantity + 1')] // Увеличение количества на 1
            );

            return back()->with('message', 'Товар добавлен в корзину.');
        }

        return back()->withErrors(['error' => 'Продукт не найден']);
    }

    /**
     * Удаление товара из корзины
     *
     * @param int $itemId
     * @return \Illuminate\Http\Response
     */
    public function removeFromCart($itemId)
    {
        $userId = Auth::user()->id;
        if ($cartItem = CartItem::where('user_id', $userId)->find($itemId)) {
            if ($cartItem->quantity == 1) {
                $cartItem->delete();
            } else {
                $cartItem->decrement('quantity');
            }
            return redirect()->route('basket.index')->with('message', 'Количество товара уменьшено.');
        }
        return redirect()->back()->withErrors(['error' => 'Элемент корзины не найден.']);
    }

    /**
     * Просмотр содержимого корзины
     */
    public function index()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->get(); // Только товары текущего пользователя
        return view('basket.cart', compact('cartItems'));
    }

}

<?php

namespace App\Http\Controllers\items;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class item_controller extends Controller
{
    public function home()
    {
        $items = Item::with('location', 'category')->get();
        // return $items;
        return view('home')->with([
            'items' => $items,
        ]);
    }

    public function item_details(Request $request, $id)
    {
        $item_data = Item::with('location', 'category', 'user')->findOrFail($id);
        // return($item_data);
        return view('screens/item_details')->with('itemdetails',$item_data);

    }

    public function create(Request $req)
    {
        try {
            DB::beginTransaction();
            $image = $req->item_file;

            $new_item = new Item();
            if ($image) {
                $image_name = Time() . '.' . $image->getClientOriginalExtension();
                $req->item_file->move('items_photo', $image_name);
                $new_item->image = $image_name;
            } else {
                return response()->json(['error' => 'No image uploaded'], 400);
            }

            $new_item->location_id = $req->location;
            $new_item->price = $req->price;
            $new_item->description = $req->description;
            $new_item->category_id = $req->category;
            $new_item->name = $req->item_name;
            $new_item->user_id = session('user_id');

            $created_item = $new_item->save();
            DB::commit();
            if ($created_item) {
                return redirect('dashboard')->with('item_success', 'New item added to the list');
            } else {
                return redirect('dashboard/create_item')->with('item_failure', 'we are having a problem, try again letter');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(
                [
                    'error' => $e->getMessage(),
                ],
                500,
            );
        }
    }
}

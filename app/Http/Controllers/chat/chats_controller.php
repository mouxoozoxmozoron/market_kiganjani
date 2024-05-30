<?php

namespace App\Http\Controllers\chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chats_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        try {
            DB::beginTransaction();
            $message = $req->message;
            $item_id = $req->item_id;
            // return response()->json($item_id);


            $chat = new Chat();
            $chat->user_id = session('user_id');
            $chat->item_id = $req->item_id;
            $chat->message = $req->message;

            $chat_created = $chat->save();
            if ($chat_created) {
                DB::commit();
                return response()->json('chat created succesfully');
            }
            DB::rollBack();
            return response()->json('chat creation failed');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(
                [
                    'error' => $e->getMessage(),
                    'message' => 'failed to create chat',
                ],
                500,
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @OA\get(
     *     path="/api/posts/all",
     *     operationId="getPost",
     *     tags={"Index"},
     *     summary="Retrive Posts",
     *     description="Get",
     *     @OA\Response(
     *         response="200",
     *         description="Posts Retrieved",
     *         @OA\JsonContent()
     *     ),
     * )
     */
    public function index()
    {
        return response()->json(['success' => true, 'data' => Post::all()]);
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
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

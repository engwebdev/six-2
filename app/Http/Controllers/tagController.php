<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class tagController extends Controller {

    /**
     * @OA\Get(
     * path="/api/v1/shop/tags",
     * operationId="get categories",
     * tags={"Tag for shops"},
     * summary="get all tags. => for shopkeeper and system admin",
     * description="get all tags",
     *
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     *
     *
     *
     * ),
     *
     */
    /**
     *
     * Get
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $page = $request->input( 'page' );
        $limit = $request->input( 'limit' );
        if ($request->input( 'sort' ))
        {
            $sort = $request->input( 'sort' );
        }
        else
        {
            $sort = 'id';
        }
        if ($request->input( 'order' ))
        {
            $order = $request->input( 'order' );
        }
        else
        {
            $order = 'asc';
        }

        $tags = Tag::orderBy( $sort, $order )
//            ->lazy()->count();
//                ->where( 'shop_accept_status', '=', 1 )
            ->paginate( $limit, '*', 'page', $page );

        return response()->json(
            [
                'data' => $tags,
            ],
            200
        );
    }

    /**
     *
     * get /tags/create
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * @OA\Post(
     * path="/api/v1/shop/tags",
     * operationId="newTag",
     * tags={"Tag for shops"},
     * summary="create new tag. => only for system admin",
     * description="create new tag",
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     *
     */
    /**
     *
     * post
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request)
    {
//        dd(auth()->user()->getRoleNames());
        dd($this->authorizeForUser(auth()->user(), 'admin', 'test'));
    }

    /**
     * @OA\Get(
     * path="/api/v1/shop/tags/{id}",
     * operationId="get tags id",
     * tags={"Tag for shops"},
     * summary="get Tag by id in url. => for shopkeeper and system admin",
     * description="get Tag by id in patch 'url'",
     *
     *
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of Tag",
     *         required=true,
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         example="1",
     *     ),
     *
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     *
     *
     */
    /**
     *
     * get /tags/{tag}
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return new Response(
            [
                'errors' => [
                    'shop_tag' => "Tag Not Found!",
                ],
            ], 404 );
        $tag = Tag::findO( $id );
        return $tag;
        return response(
            [
                $tag,
            ], 200 );
    }

    /**
     *
     * get /tags/{tag}/edit
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * @OA\Put(
     * path="/api/v1/shop/tags/{id}",
     * operationId="updateTags",
     * tags={"Tag for shops"},
     * summary="update tag. => only for system admin",
     * description="update tag",
     *
     *
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of Category",
     *         required=true,
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         example="1",
     *     ),
     *
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     */
    /**
     *
     * PUT/PATCH /tags/{tag}
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }




    /**
     * @OA\Delete(
     * path="/api/v1/shop/tags/{id}",
     * operationId="deleteTag",
     * tags={"Tag for shops"},
     * summary="delete tag. => only for system admin",
     * description="delete tag",
     *
     *
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id of Tag",
     *         required=true,
     *         @OA\Schema(
     *           type="string",
     *         ),
     *         example="1",
     *     ),
     *
     *
     *
     *      @OA\Response(response=511, description="Network Authentication Required"),
     *
     *
     *     security={
     *         {"bearer": {}}
     *     },
     *
     * ),
     */
    /**
     *
     * DELETE /tags/{tag}
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     *
     * PUT/PATCH /tags/{tag}
     * not need this method
     * update status by id
     *
     *
     * @param $id
     */
    public function status($id)
    {

    }
}

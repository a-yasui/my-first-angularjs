<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    /**
     * @return \App\Blog[]
     */
    public function getIndex()
    {
        /** @var Blog[] $Blogs */
        $Blogs = Blog::orderBy( 'created_at', 'desc' );

        return \Response::json($Blogs->get()->toArray());
    }

    /**
     * @param Request $request
     * @return array
     */
    public function postCreate(Request $request)
    {
        $Blog = new Blog( [
            'title'  => $request->input( 'title' ),
            'slag'   => $request->input( 'slag', '' ),
            'header' => $request->input( 'header', '' ),
            'description' => $request->input( 'description', '' )
        ] );

        $Blog->save();

        return [
            'success' => true,
            'item'    => $Blog,
        ];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function deleteItem(Request $request)
    {
        Blog::destroy( $request->route( 'id' ) );

        return [
            'success' => true,
        ];
    }
}

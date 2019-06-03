<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;	
use DataTables;

class CommentsController extends Controller
{
    public function CommentDatatable()
    {
        $users = Comments::query();

        return DataTables::of($users)
            // ->addColumn('action', function ($users) {
            //     return view('actions.action_user', [
            //         'user' => $users,
            //         'url_show' => route('user.show', $users->id),
            //         'url_edit' => route('user.edit', $users->id),
            //         'url_destroy' => route('user.destroy', $users->id)
            //     ]);
            // })
            // ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
    }
}

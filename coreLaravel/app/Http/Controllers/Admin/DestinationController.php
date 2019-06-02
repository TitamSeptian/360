<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Destination;
use DataTables;

class DestinationController extends Controller
{

    public function indexDesAcc()
    {
        $destinations = Destination::with(['location', 'category'])->where('status', 'disetujui')->get();
        return view('sites.admin.destination.accepted.index', compact('destinations'));
    }

    public function indexDesPend()
    {
        return view('sites.admin.destination.pending.index');
    }

    public function detailPending($id)
    {
        $destination = Destination::with(['category', 'location'])->findOrFail($id);

        return view('sites.admin.destination.pending.detail', compact('destination'));
    }

    public function update(Request $request, $destination)
    {
        // pick the destination
        $dest = Destination::findOrFail($destination);

        // pick the request
        $status = $request->status;

        // update
        $dest->update([
            'status' => $status
        ]);

        if ($dest->status === "disetujui") {
            return redirect('/admin/destinations/accepted');
        } else {
            return redirect('/admin/destinations/pending');
        }
    }

    // datatables for show pending destinations
    public function acceptDatatables()
    {
        $destinations = Destination::query()->with(['location', 'category'])->where('status', 'disetujui')->get();
        return DataTables::of($destinations)->addColumn('name_user', function ($destinations) {
            return $destinations->user->name;
        })
            ->addColumn('category', function ($destinations) {
                return $destinations->category->name;
            })
            ->addColumn('location', function ($destinations) {
                return $destinations->location->name;
            })
            ->addColumn('description', function ($destinations) {
                return str_limit($destinations->description, 100, '...');
            })
            ->addColumn('images', function ($destinations) {
                if ($destinations->images == null) {
                    return 'Tidak Ada Foto';
                }
                return '<img width="180px" height="180px" src="' . asset('coreLaravel/public/storage/' . $destinations->images) . '" alt="">';
            })
            ->addColumn('action', function ($destinations) {
                return view('layouts.partials.actions.action_destination', [
                    'destination' => $destinations,
                    'url_show' => route('destination.pending.detail', $destinations->id),
                    'url_update' => route('destination.pending.update', $destinations->id)
                ]);
            })
            ->rawColumns(['action', 'description', 'images'])
            ->addIndexColumn()
            ->make(true);
    }

    // datatables for show pending destinations
    public function pendingDatatables()
    {
        $destinations = Destination::query()->with(['location', 'category'])->where('status', 'belum disetujui')->get();
        return DataTables::of($destinations)->addColumn('name_user', function ($destinations) {
            return $destinations->user->name;
        })
            ->addColumn('category', function ($destinations) {
                return $destinations->category->name;
            })
            ->addColumn('location', function ($destinations) {
                return $destinations->location->name;
            })
            ->addColumn('description', function ($destinations) {
                return str_limit($destinations->description, 100, '...');
            })
            ->addColumn('images', function ($destinations) {
                if ($destinations->images == null) {
                    return 'Tidak Ada Foto';
                }
                return '<img width="180px" height="180px" src="' . asset('coreLaravel/public/storage/' . $destinations->images) . '" alt="">';
            })
            ->addColumn('action', function ($destinations) {
                return view('layouts.partials.actions.action_destination', [
                    'destination' => $destinations,
                    'url_show' => route('destination.pending.detail', $destinations->id),
                    'url_update' => route('destination.pending.update', $destinations->id)
                ]);
            })
            ->rawColumns(['action', 'description', 'images'])
            ->addIndexColumn()
            ->make(true);
    }
}

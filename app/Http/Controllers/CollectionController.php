<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::all();
        return view('admin.collections.index', compact('collections'));
    }

    public function test()
    {
        return view('admin.collections.test');
    }

    public function create()
    {
        return view('admin.collections.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);
            Collection::create($data);
            return redirect()->route('admin.collections.index')->with(KEY_SUCCESS, 'Collection created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.collections.index')->with(KEY_FAIL, 'Failed to create collection.');
        }
    }

    public function show($id)
    {
        $collection = Collection::findOrFail($id);
        return view('admin.collections.show', compact('collection'));
    }

    public function edit($id)
    {
        $collection = Collection::findOrFail($id);
        return view('admin.collections.edit', compact('collection'));
    }

    public function update(Request $request, $id)
    {
        $collection = Collection::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $collection->update($data);
        return redirect()->route('admin.collections.index');
    }

    public function destroy($id)
    {
        $collection = Collection::findOrFail($id);
        $collection->delete();
        return redirect()->route('admin.collections.index');
    }
}

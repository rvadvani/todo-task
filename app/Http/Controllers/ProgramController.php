<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller {
    //

    public function index() {
        $programs = Program::get();
        return view("dashboard", compact('programs'));
    }

    public function store(Request $request) {

        // dd($request);
        $post = $request->validate([
            'name' => 'required|string|unique:programs|max:255',
        ]);

        $post['status'] = '0';
        Program::create($post);

        return redirect()
            ->back()
            ->with('success', 'Data has been added successfully!');
    }

    public function update($id) {
        Program::where('id', $id)
            ->update(['status' => 1]);
        return redirect()
            ->back()
            ->with('success', 'Marked as completed successfully!');
    }


    public function delete($id) {
        Program::where('id', $id)->delete();
        return redirect()
            ->back()
            ->with('success', 'Data has been deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class AdminController extends Controller
{
    public function loginPage()
    {
        if (session()->has('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin123') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard')->with('success', 'Karibu kwenye ukurasa wa usimamizi.');
        }

        return back()->withErrors(['username' => 'Jina la mtumiaji au neno la siri si sahihi.'])->withInput();
    }

    public function dashboard(Request $request)
    {
        if (!session()->has('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Tafadhali ingia kwanza.');
        }

        $query = Member::latest();

        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('jina', 'like', "%{$search}%")
                  ->orWhere('simu', 'like', "%{$search}%")
                  ->orWhere('mtaa', 'like', "%{$search}%")
                  ->orWhere('kazi', 'like', "%{$search}%");
            });
        }

        $members = $query->paginate(10);
        return view('admin.dashboard', compact('members'));
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login')->with('success', 'Umetoka kwenye mfumo.');
    }

    public function update(Request $request, $id)
    {
        if (!session()->has('admin_logged_in')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $member = Member::findOrFail($id);
        
        $validated = $request->validate([
            'jina' => 'required|string|max:255',
            'jinsi' => 'required|in:Me,Ke',
            'simu' => 'required|string|max:20',
            'barua_pepe' => 'nullable|email|max:255',
            'mtaa' => 'required|string|max:255',
            'jina_eneo' => 'required|string|max:255',
            'kazi' => 'required|string|max:255',
            'mahali_kazi' => 'nullable|string|max:255',
        ]);

        $member->update($validated);

        return response()->json(['success' => true, 'message' => 'Rekodi imesasishwa kikamilifu.']);
    }

    public function destroy($id)
    {
        if (!session()->has('admin_logged_in')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        Member::destroy($id);
        return response()->json(['success' => true, 'message' => 'Rekodi imefutwa.']);
    }
}

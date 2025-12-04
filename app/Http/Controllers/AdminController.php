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
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('middle_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
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
        session()->flush();
        return redirect()->route('home')->with('success', 'Umetoka kwenye mfumo.');
    }

    public function update(Request $request, $id)
    {
        if (!session()->has('admin_logged_in')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $member = Member::findOrFail($id);
        
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'jinsi' => 'required|in:Me,Ke',
            'tarehe_kuzaliwa' => 'required|date',
            'mahali_kuzaliwa' => 'required|string|max:255',
            'hali_ndoa' => 'required|in:Umeoa,Hujaoa,Umeolewa,Hujaolewa,Mgane,Mjane,Talikiwa,Tengana',
            'jina_mwenzi' => 'nullable|string|max:255',
            'aina_ndoa' => 'nullable|in:Kikristo,Siyo Kikristo',
            'tarehe_ndoa' => 'nullable|date',
            
            // Section B
            'simu' => 'required|string|max:20',
            'simu_mwenzi' => 'nullable|string|max:20',
            'sanduku_barua' => 'nullable|string|max:255',
            'barua_pepe' => 'nullable|email|max:255',
            'mtaa' => 'required|string|max:255',
            'namba_nyumba' => 'nullable|string|max:50',
            'jina_eneo' => 'required|string|max:255',
            'block_no' => 'nullable|string|max:50',
            'jirani_jina' => 'nullable|string|max:255',
            'jirani_simu' => 'nullable|string|max:20',
            'mzee_kanisa' => 'nullable|string|max:255',
            'simu_mzee' => 'nullable|string|max:20',
            
            // Section C
            'kazi' => 'required|string|max:255',
            'mahali_kazi' => 'nullable|string|max:255',
            'elimu' => 'nullable|string|max:255',
            'ujuzi' => 'nullable|string|max:255',
            
            // Section D
            'batizwa' => 'required|in:Ndiyo,Hapana',
            'kipaimara' => 'nullable|in:Ndiyo,Hapana',
            'tarehe_kipaimara' => 'nullable|date',
            'meza_bwana' => 'required|in:Ndiyo,Hapana',
            
            // Section E
            'jumuiya' => 'nullable|in:Ndiyo,Hapana',
            'jina_jumuiya' => 'nullable|string|max:255',
            'sababu' => 'nullable|string|max:255',
            'huduma' => 'nullable|array',
            'kwaya' => 'nullable|array',
            'umoja' => 'nullable|array',
            
            // Section F
            'ahadi_jengo' => 'nullable|numeric|min:0',
            'ahadi_uwakili' => 'nullable|numeric|min:0',
            'ahadi_nyingine' => 'nullable|numeric|min:0',
            'other_pledges' => 'nullable|array',
            'namba_ahadi' => 'nullable|in:Ndiyo,Hapana',
            'namba_ahadi_specific' => 'nullable|string|max:100',
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

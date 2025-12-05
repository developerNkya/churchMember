<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //welcome page
    public function index()
    {
        return view('welcome');
    }

        public function create()
    {
        return view('members.register');
    }

    /**
     * Store a new member
     */
    public function store(Request $request)
    {
        // Check for duplicates before validation to save resources
        $exists = Member::where('first_name', $request->first_name)
            ->where('last_name', $request->last_name)
            ->where('simu', $request->simu)
            ->exists();

        if ($exists) {
            return back()->withErrors(['error' => 'Mwanachama huyu tayari amesajiliwa.'])->withInput();
        }

        // Validate the request
        $validated = $request->validate([
            // Section A - Updated name fields
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
            
            // Dependents (now sent as JSON)
            'watoto' => 'nullable|json',
            
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
            'huduma.*' => 'string',
            'kwaya' => 'nullable|array',
            'kwaya.*' => 'string',
            'umoja' => 'nullable|array',
            'umoja.*' => 'string',
            
            // Section F - Updated with other_pledges
            'ahadi_jengo' => 'nullable|numeric|min:0',
            'ahadi_uwakili' => 'nullable|numeric|min:0',
            'ahadi_nyingine' => 'nullable|numeric|min:0',
            'other_pledges' => 'nullable|json',
            'namba_ahadi' => 'nullable|in:Ndiyo,Hapana',
            'namba_ahadi_specific' => 'nullable|string|max:100',
            
            // Photo
            'photo' => 'nullable|image|max:2048',
        ]);

        // Process dependents - watoto is now sent as JSON string from the form
        $watotoJson = $validated['watoto'] ?? null;
        
        // Process other_pledges - sent as JSON string from the form
        $otherPledgesJson = $validated['other_pledges'] ?? null;

        // Process photo upload - save to public directory
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            // Create directory if it doesn't exist
            $publicPath = public_path('members/photos');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            
            // Move file to public directory
            $file->move($publicPath, $filename);
            $photoPath = 'members/photos/' . $filename;
        }

        // Prepare data for database
        $memberData = [
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'] ?? null,
            'last_name' => $validated['last_name'],
            'jinsi' => $validated['jinsi'],
            'tarehe_kuzaliwa' => $validated['tarehe_kuzaliwa'],
            'mahali_kuzaliwa' => $validated['mahali_kuzaliwa'],
            'hali_ndoa' => $validated['hali_ndoa'],
            'jina_mwenzi' => $validated['jina_mwenzi'] ?? null,
            'aina_ndoa' => $validated['aina_ndoa'] ?? null,
            'tarehe_ndoa' => $validated['tarehe_ndoa'] ?? null,
            'watoto' => $watotoJson,
            'simu' => $validated['simu'],
            'simu_mwenzi' => $validated['simu_mwenzi'] ?? null,
            'sanduku_barua' => $validated['sanduku_barua'] ?? null,
            'barua_pepe' => $validated['barua_pepe'] ?? null,
            'mtaa' => $validated['mtaa'],
            'namba_nyumba' => $validated['namba_nyumba'] ?? null,
            'jina_eneo' => $validated['jina_eneo'],
            'block_no' => $validated['block_no'] ?? null,
            'jirani_jina' => $validated['jirani_jina'] ?? null,
            'jirani_simu' => $validated['jirani_simu'] ?? null,
            'mzee_kanisa' => $validated['mzee_kanisa'] ?? null,
            'simu_mzee' => $validated['simu_mzee'] ?? null,
            'kazi' => $validated['kazi'],
            'mahali_kazi' => $validated['mahali_kazi'] ?? null,
            'elimu' => $validated['elimu'] ?? null,
            'ujuzi' => $validated['ujuzi'] ?? null,
            'batizwa' => $validated['batizwa'],
            'kipaimara' => $validated['kipaimara'] ?? null,
            'tarehe_kipaimara' => $validated['tarehe_kipaimara'] ?? null,
            'meza_bwana' => $validated['meza_bwana'],
            'jumuiya' => $validated['jumuiya'] ?? null,
            'jina_jumuiya' => $validated['jina_jumuiya'] ?? null,
            'sababu' => $validated['sababu'] ?? null,
            'huduma' => !empty($validated['huduma']) ? json_encode($validated['huduma']) : null,
            'kwaya' => !empty($validated['kwaya']) ? json_encode($validated['kwaya']) : null,
            'umoja' => !empty($validated['umoja']) ? json_encode($validated['umoja']) : null,
            'ahadi_jengo' => $validated['ahadi_jengo'] ?? 0,
            'ahadi_uwakili' => $validated['ahadi_uwakili'] ?? 0,
            'ahadi_nyingine' => $validated['ahadi_nyingine'] ?? 0,
            'other_pledges' => $otherPledgesJson,
            'namba_ahadi' => $validated['namba_ahadi'] ?? null,
            'namba_ahadi_specific' => $validated['namba_ahadi_specific'] ?? null,
            'photo' => $photoPath,
        ];


        // Create member
        Member::create($memberData);

        return redirect()->route('member.success')
            ->with('success', 'Usajili wako umekamilika kikamilifu! Asante kwa kujiunga nasi.');
    }

    /**
     * Show success page
     */
    public function success()
    {
        if (!session()->has('success')) {
            return redirect()->route('home');
        }
        return view('members.success');
    }
}

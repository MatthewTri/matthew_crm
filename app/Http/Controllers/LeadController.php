<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateLeadRequest;
use App\Models\Product;
use App\Models\Project;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendingLeads = Lead::whereHas('project', fn($q) => $q->where('status', 'pending'))->get();
        $approvedLeads = Lead::whereHas('project', fn($q) => $q->where('status', 'approved'))->get();
        $rejectedLeads = Lead::whereHas('project', fn($q) => $q->where('status', 'rejected'))->get();

        return view('leads.index', compact('pendingLeads', 'approvedLeads', 'rejectedLeads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leads.create', [
            'products' => Product::all(), // untuk dropdown
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeadRequest $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
            'company' => 'nullable|max:255',
            'notes' => 'nullable|max:255',
        ]);
        

        // Buat lead
        $lead = Lead::create($validatedData);

        // Otomatis buat project terkait lead
        Project::create([
                'lead_id'     => $lead->id,
                // 'user_id'     => $lead->user_id, // sales yang input
                'approved_by' => null,           // belum disetujui
                'status'      => 'pending',
                'notes'       => null,
        ]);

        return redirect('/leads')->with('success', 'Lead created successfully!');
       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        $projectNotes = $lead->project ? $lead->project->notes : 'Tidak ada catatan dari manager';

        return view('leads.show', compact('lead', 'projectNotes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Subscription;
use App\Models\Product;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::with(['lead', 'approvedBy'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create', [
            'leads' => Lead::all(), // untuk dropdown
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', [
            'leads' => Lead::all(),
            'project' => $project // untuk dropdown
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $validated = $request->validate([
            'notes' => 'nullable|string',
            'status' => 'required|in:pending,approved,rejected',
        ]);

        // $project->load('lead');

        // Update catatan & status project
        $project->update([
            'notes' => $validated['notes'],
            'status' => $validated['status'],
            'approved_by' => Auth::user()->id, // ID user yang menyetujui
        ]);

        // Jika status berubah menjadi approved → buat Customer & Subscription
        if ($validated['status'] === 'approved' && !$project->lead->customer_created) {
            // Buat customer
            $customer = Customer::create([
                'name' => $project->lead->name,
                'contact' => $project->lead->contact,
                'company' => $project->lead->company,
                'lead_id' => $project->lead->id, // ID lead yang terkait
            ]);

            // Buat subscription
            Subscription::create([
                'customer_id' => $customer->id,
                'product_id' => $project->lead->product_id,
                'start_date' => now(),
                'end_date' => now()->addMonth(), // 1 bulan setelah hari ini
            ]);

            // Optional: tandai bahwa lead sudah jadi customer
            $project->lead->update([
                'customer_created' => true,
                'customer_id' => $customer->id, // ID customer yang baru dibuat
            ]);
        }

        
    
            return redirect()->route('projects.index')->with('success', 'Lead berhasil di proses !');
        
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}

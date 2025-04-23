<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        // otomatis hapus semua subscription terkait karena relasi
        $customer->delete();

        return redirect()->route('subscriptions.index')->with('success', 'Customer dan semua subscription-nya berhasil dihapus.');
    }
}

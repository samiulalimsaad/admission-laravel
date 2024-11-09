<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function generateInvoice($applicationId)
    {
        $profile = Profile::where('applicationId', $applicationId)->first();

        // If transaction ID is related to the profile, get it
        $transactionId = $profile->transaction_id; // adjust as needed

        // Return the PDF view with the necessary data
        $pdf = PDF::loadView('invoice', compact('profile', 'transactionId'));

        return $pdf->download('invoice_'.$profile->applicationId.'.pdf');
    }

}

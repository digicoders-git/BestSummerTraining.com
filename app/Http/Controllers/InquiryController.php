<?php

namespace App\Http\Controllers;

use App\Mail\LeadInquiryMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    /**
     * Handle incoming callback & course inquiry submissions.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'mobile' => ['required', 'string', 'regex:/^[6-9]\d{9}$/'],
            'page_url' => ['nullable', 'string', 'max:500'],
        ]);

        $leadData = [
            'name' => trim($validated['name']),
            'mobile' => trim($validated['mobile']),
            'page_url' => $validated['page_url'] ?? $request->header('referer', url()->previous()),
        ];

        // Send email via SMTP to target recipient configured in .env / config
        $recipient = config('mail.to.address') ?: env('MAIL_TO_ADDRESS');

        try {
            Mail::to($recipient)->send(new LeadInquiryMail($leadData));
        } catch (\Throwable $e) {
            Log::error('Inquiry Mail Sending Failed: '.$e->getMessage(), [
                'exception' => $e,
                'leadData' => $leadData,
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to send inquiry email. Please try again.',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your inquiry has been submitted successfully.',
        ]);
    }
}

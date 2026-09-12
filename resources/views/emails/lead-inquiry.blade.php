<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lead Inquiry - BestSummerTraining</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f1f5f9; margin: 0; padding: 30px 15px; color: #1e293b; -webkit-font-smoothing: antialiased;">
    <!-- Main Outer Wrapper -->
    <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 620px; margin: 0 auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.1), 0 8px 10px -6px rgba(15, 23, 42, 0.05); border: 1px solid #e2e8f0;">
        
        <!-- Header Section -->
        <tr>
            <td style="background: linear-gradient(135deg, #0b192c 0%, #1e3a8a 50%, #006dab 100%); padding: 32px 28px; text-align: center;">
                <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center">
                            <span style="background-color: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.25); color: #ffffff; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; padding: 5px 14px; border-radius: 50px; display: inline-block; margin-bottom: 12px;">
                                🔥 New Inquiry Received
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <h1 style="color: #ffffff; margin: 0; font-size: 22px; font-weight: 800; letter-spacing: -0.5px; line-height: 1.3;">
                                Best Summer Training
                            </h1>
                            <p style="color: #93c5fd; font-size: 13px; margin: 6px 0 0 0; font-weight: 500;">
                                Summer Training & Internship Lead Alert
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Alert Notification Bar -->
        <tr>
            <td style="padding: 24px 28px 12px 28px;">
                <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px; padding: 14px 18px;">
                    <tr>
                        <td style="font-size: 14px; color: #166534; font-weight: 600; line-height: 1.4;">
                            ⚡ <strong>Action Required:</strong> A new candidate has requested a callback for course details. Please respond promptly!
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Candidate Details Table -->
        <tr>
            <td style="padding: 16px 28px 24px 28px;">
                <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background-color: #ffffff;">
                    
                    <!-- Candidate Name -->
                    <tr>
                        <td width="38%" style="padding: 14px 18px; background-color: #f8fafc; font-weight: 700; font-size: 13px; color: #475569; border-bottom: 1px solid #e2e8f0; text-transform: uppercase; letter-spacing: 0.5px;">
                            Candidate Name
                        </td>
                        <td style="padding: 14px 18px; border-bottom: 1px solid #e2e8f0; font-size: 15px; color: #0f172a; font-weight: 700;">
                            {{ $leadData['name'] ?? 'N/A' }}
                        </td>
                    </tr>

                    <!-- Phone Number -->
                    <tr>
                        <td style="padding: 14px 18px; background-color: #f8fafc; font-weight: 700; font-size: 13px; color: #475569; border-bottom: 1px solid #e2e8f0; text-transform: uppercase; letter-spacing: 0.5px;">
                            Mobile Number
                        </td>
                        <td style="padding: 14px 18px; border-bottom: 1px solid #e2e8f0; font-size: 16px; font-weight: 800;">
                            <a href="tel:{{ $leadData['mobile'] ?? '' }}" style="color: #006dab; text-decoration: none; background-color: #eff6ff; padding: 4px 10px; border-radius: 6px; border: 1px solid #bfdbfe; display: inline-block;">
                                📞 {{ $leadData['mobile'] ?? 'N/A' }}
                            </a>
                        </td>
                    </tr>

                    <!-- Submitted Page URL -->
                    <tr>
                        <td style="padding: 14px 18px; background-color: #f8fafc; font-weight: 700; font-size: 13px; color: #475569; border-bottom: 1px solid #e2e8f0; text-transform: uppercase; letter-spacing: 0.5px;">
                            Page Source
                        </td>
                        <td style="padding: 14px 18px; border-bottom: 1px solid #e2e8f0; font-size: 13px; color: #334155; word-break: break-all; line-height: 1.4;">
                            @if(!empty($leadData['page_url']) && $leadData['page_url'] !== 'N/A')
                                <a href="{{ $leadData['page_url'] }}" target="_blank" style="color: #2563eb; text-decoration: underline; font-weight: 600;">
                                    🌐 {{ $leadData['page_url'] }}
                                </a>
                            @else
                                <span style="color: #64748b;">Direct Submission</span>
                            @endif
                        </td>
                    </tr>

                    <!-- Time -->
                    <tr>
                        <td style="padding: 14px 18px; background-color: #f8fafc; font-weight: 700; font-size: 13px; color: #475569; text-transform: uppercase; letter-spacing: 0.5px;">
                            Date & Time
                        </td>
                        <td style="padding: 14px 18px; font-size: 13px; color: #475569; font-weight: 600;">
                            🕒 {{ date('d M Y, h:i A') }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Call to Action Buttons (Bulletproof Email Layout) -->
        <tr>
            <td style="padding: 0 28px 32px 28px;" align="center">
                <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <!-- Call Button -->
                        <td align="center" style="padding-right: 12px; padding-bottom: 10px;">
                            <a href="tel:{{ $leadData['mobile'] ?? '' }}" target="_blank" style="background-color: #006dab; color: #ffffff; font-size: 14px; font-weight: 700; text-decoration: none; padding: 14px 26px; border-radius: 50px; display: inline-block; box-shadow: 0 4px 12px rgba(0, 109, 171, 0.25); white-space: nowrap;">
                                📞 Call Now
                            </a>
                        </td>
                        <!-- WhatsApp Button -->
                        <td align="center" style="padding-left: 12px; padding-bottom: 10px;">
                            <a href="https://wa.me/91{{ $leadData['mobile'] ?? '' }}" target="_blank" style="background-color: #16a34a; color: #ffffff; font-size: 14px; font-weight: 700; text-decoration: none; padding: 14px 26px; border-radius: 50px; display: inline-block; box-shadow: 0 4px 12px rgba(22, 163, 74, 0.25); white-space: nowrap;">
                                💬 WhatsApp Candidate
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background-color: #f8fafc; padding: 18px 28px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0;">
                <p style="margin: 0; font-weight: 500;">
                    Automated lead notification sent by <strong style="color: #334155;">bestsummertraining.com</strong>
                </p>
                <p style="margin: 4px 0 0 0; font-size: 11px; color: #94a3b8;">
                    Powered by DigiCoders Technologies
                </p>
            </td>
        </tr>
    </table>
</body>
</html>

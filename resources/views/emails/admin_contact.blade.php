<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; margin: 0; padding: 0; }
        .email-container { max-width: 650px; margin: 30px auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border-top: 5px solid #10b981; overflow: hidden; }
        .header { background-color: #ffffff; padding: 25px 30px; border-bottom: 1px solid #eeeeee; }
        .header h2 { margin: 0; color: #1f2937; font-size: 22px; }
        .badge { display: inline-block; background-color: #d1fae5; color: #065f46; padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: bold; margin-top: 5px; }
        .body-content { padding: 30px; }
        .info-table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .info-table th { text-align: left; padding: 12px 15px; background-color: #f8fafc; color: #64748b; width: 30%; border-bottom: 1px solid #e2e8f0; font-size: 14px; }
        .info-table td { padding: 12px 15px; border-bottom: 1px solid #e2e8f0; color: #334155; font-size: 15px; font-weight: 500; }
        .message-box { background-color: #f8fafc; border: 1px solid #e2e8f0; padding: 20px; border-radius: 6px; margin-top: 25px; color: #334155; line-height: 1.6; white-space: pre-wrap; }
        .footer { background-color: #f8fafc; padding: 20px; text-align: center; color: #94a3b8; font-size: 13px; }
        .btn { display: inline-block; background-color: #10b981; color: #ffffff; text-decoration: none; padding: 10px 20px; border-radius: 5px; margin-top: 25px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h2>New Inquiry Received</h2>
            <span class="badge">Lead Notification</span>
        </div>
        
        <div class="body-content">
            <p style="color: #64748b; font-size: 15px; margin-top:0;">You have received a new message from the website contact form. Here are the details:</p>
            
            <table class="info-table">
                <tr>
                    <th>Full Name</th>
                    <td>{{ $contactData->name }}</td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td><a href="mailto:{{ $contactData->email }}" style="color: #3b82f6;">{{ $contactData->email }}</a></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><a href="tel:{{ $contactData->phone }}" style="color: #3b82f6;">{{ $contactData->phone }}</a></td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{{ $contactData->subject ?? 'No Subject' }}</td>
                </tr>
                <tr>
                    <th>Date & Time</th>
                    <td>{{ $contactData->created_at->format('d M, Y - h:i A') }}</td>
                </tr>
            </table>

            <h3 style="color: #1f2937; margin-bottom: 5px; margin-top: 25px; font-size: 16px;">Message Details:</h3>
            <div class="message-box">
                {{ $contactData->message }}
            </div>

            <div style="text-align: center;">
                <a href="{{ url('/admin/contacts/' . $contactData->id) }}" class="btn">View in Dashboard</a>
            </div>
        </div>
        
        <div class="footer">
            This is an automated message from your website system.
        </div>
    </div>
</body>
</html>
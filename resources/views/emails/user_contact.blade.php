<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thank You for Contacting Us</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; margin: 0; padding: 0; }
        .email-container { max-width: 600px; margin: 40px auto; background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eaeaec; }
        .header { background: linear-gradient(135deg, #FE3668, #CF0037); padding: 30px 20px; text-align: center; color: #ffffff; }
        .header h1 { margin: 0; font-size: 24px; letter-spacing: 1px; }
        .body-content { padding: 30px; color: #333333; line-height: 1.6; }
        .body-content h2 { color: #CF0037; font-size: 20px; margin-top: 0; }
        .details-box { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #572BC6; margin: 20px 0; border-radius: 4px; }
        .footer { background-color: #f4f7f6; padding: 20px; text-align: center; color: #888888; font-size: 13px; border-top: 1px solid #eaeaec; }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Thank You!</h1>
        </div>
        
        <div class="body-content">
            <h2>Hello {{ $contactData->name }},</h2>
            <p>Thank you for reaching out to us. We have received your message and our team will get back to you as soon as possible.</p>
            
            <p>Here is a summary of your inquiry:</p>
            <div class="details-box">
                <strong>Subject:</strong> {{ $contactData->subject ?? 'N/A' }}<br><br>
                <strong>Your Message:</strong><br>
                {{ $contactData->message }}
            </div>
            
            <p>If you have any urgent queries, feel free to reply directly to this email or call us.</p>
            <p>Best Regards,<br><strong>Our Support Team</strong></p>
        </div>
        
        <div class="footer">
            &copy; {{ date('Y') }} Tumbler studios. All rights reserved.
        </div>
    </div>
</body>
</html>
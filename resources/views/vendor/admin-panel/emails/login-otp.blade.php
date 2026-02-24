<!DOCTYPE html>
<html>
<head>
    <style>
        .email-wrapper { font-family: 'Poppins', sans-serif; background-color: #f4f7f6; padding: 40px 0; width: 100%; }
        .email-content { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .header { background: linear-gradient(135deg, #10b981 0%, #059669 100%); padding: 30px; text-align: center; color: #ffffff; }
        .body { padding: 40px; text-align: center; color: #334155; }
        .otp-code { font-size: 36px; font-weight: bold; letter-spacing: 8px; color: #10b981; background: #f0fdf4; border: 2px dashed #10b981; padding: 20px; border-radius: 12px; display: inline-block; margin: 25px 0; }
        .footer { padding: 20px; background: #f8fafc; text-align: center; font-size: 13px; color: #94a3b8; }
        .alert-text { font-size: 12px; color: #ef4444; margin-top: 20px; font-style: italic; }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-content">
            <div class="header">
                <h2 style="margin:0;">Secure Login Verification</h2>
            </div>
            <div class="body">
                <p style="font-size: 18px; font-weight: 500;">Hello, {{ $user->name }}!</p>
                <p>You are trying to access your dashboard. Please use the following One-Time Password (OTP) to complete your login process.</p>
                
                <div class="otp-code">{{ $otp }}</div>
                
                <p style="margin-bottom: 5px;">This code is valid for <strong>5 minutes</strong> only.</p>
                <p class="alert-text">If you did not attempt to login, please ignore this email or secure your account.</p>
            </div>
            <div class="footer">
                <p>&copy; {{ date('Y') }}  Tumbler Studios. All rights reserved. |
Developed by <a href="https://insucreation.in/" target='_blank'>Insu Creation Private Limited</a></p>
            </div>
        </div>
    </div>
</body>
</html>
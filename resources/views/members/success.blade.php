<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usajili Umekamilika - K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #eff6ff 0%, #e0e7ff 100%);
            padding: 20px;
        }
        
        .success-container {
            max-width: 600px;
            width: 100%;
            background: white;
            border-radius: 16px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .success-icon {
            width: 80px;
            height: 80px;
            color: #10b981;
            margin-bottom: 20px;
        }
        
        h1 {
            color: #1e3a8a;
            margin-bottom: 15px;
            font-size: 2rem;
        }
        
        .church-name {
            color: #2c3e50;
            font-weight: bold;
            font-size: 1.2rem;
            margin: 20px 0;
            line-height: 1.5;
        }
        
        .success-message {
            color: #4b5563;
            margin-bottom: 30px;
            font-size: 1.1rem;
            line-height: 1.6;
            background-color: #f0f9ff;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #3b82f6;
        }
        
        .details {
            text-align: left;
            margin: 25px 0;
            padding: 20px;
            background-color: #f8fafc;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }
        
        .details h3 {
            color: #334155;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        
        .details ul {
            list-style-type: none;
            padding-left: 0;
        }
        
        .details li {
            padding: 8px 0;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
        }
        
        .details li:last-child {
            border-bottom: none;
        }
        
        .details .label {
            font-weight: 600;
            color: #475569;
        }
        
        .details .value {
            color: #1e293b;
        }
        
        .btn-container {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: none;
        }
        
        .btn-primary {
            background-color: #3b82f6;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #2563eb;
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background-color: #e5e7eb;
            color: #374151;
            border: 1px solid #d1d5db;
        }
        
        .btn-secondary:hover {
            background-color: #d1d5db;
            transform: translateY(-2px);
        }
        
        .reference-number {
            background-color: #dbeafe;
            color: #1e40af;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 1.1rem;
            margin: 20px 0;
            display: inline-block;
        }
        
        @media (max-width: 768px) {
            .success-container {
                padding: 25px;
            }
            
            .btn-container {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <svg xmlns="http://www.w3.org/2000/svg" class="success-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
        </svg>
        
        <h1>Usajili Umekamilika!</h1>
        
        <div class="church-name">
            K.K.K.T DAYOSISI YA MASHARIKI NA PWANI<br>
            <small>Jimbo la Kusini - Usharika wa Mji Mwema</small>
        </div>
        
        <div class="success-message">
            Asante kwa kujisajili kama msharika wetu. Taarifa zako zimepokelewa kikamilifu na zimehifadhiwa katika mfumo wetu.
        </div>
        
        @if(session('member_id'))
        <div class="reference-number">
            Namba ya Kumbukumbu: #{{ str_pad(session('member_id'), 6, '0', STR_PAD_LEFT) }}
        </div>
        @endif
        
        <div class="details">
            <h3>Kile unachotakiwa kufanya baada ya usajili:</h3>
            <ul>
                <li>
                    <span class="label">Ukaguzi wa Taarifa:</span>
                    <span class="value">Itahakikiwa na msimamizi</span>
                </li>
                <!-- <li>
                    <span class="label">Picha ya Msharika:</span>
                    <span class="value">Utaletwa na picha ya passport</span>
                </li>
                <li>
                    <span class="label">Maelekezo Zaidi:</span>
                    <span class="value">Utapokea ujumbe kupitia simu</span>
                </li>
                <li>
                    <span class="label">Siku ya Kukaribishwa:</span>
                    <span class="value">Itatangazwa baadaye</span>
                </li> -->
            </ul>
        </div>
        
        <div class="btn-container">
            <a href="{{ route('home') }}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Rudi Kwenye Ukurasa Mkuu
            </a>
            
            <a href="{{ route('member.register') }}" class="btn btn-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Sajili Msharika Mwingine
            </a>
        </div>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e2e8f0;">
            <p style="color: #64748b; font-size: 0.9rem;">
                Kwa msaudi zaidi, wasiliana nasi kupitia:<br>
                Simu: +255 XXX XXX XXX | Barua pepe: info@dayosisi.go.tz
            </p>
        </div>
    </div>
</body>
</html>
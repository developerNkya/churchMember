<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</title>
    <style>
        /* Main Dashboard Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #eff6ff 0%, #e0e7ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            color: #111827;
        }
        
        .container {
            width: 100%;
            max-width: 56rem;
            margin: 0 auto;
        }
        
        .content-wrapper {
            width: 100%;
        }
        
        .header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .title {
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-wrap: balance;
            line-height: 1.2;
            color: #1e3a8a;
        }
        
        .subtitle {
            font-size: 1.25rem;
            color: #4b5563;
        }
        
        .cards-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        @media (min-width: 768px) {
            .cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .title {
                font-size: 3rem;
            }
        }
        
        .card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }
        
        .card-link:hover .card {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .card {
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            height: 100%;
            cursor: pointer;
        }
        
        .blue-card:hover {
            border-color: #3b82f6;
        }
        
        .indigo-card:hover {
            border-color: #6366f1;
        }
        
        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 1rem;
        }
        
        .icon-container {
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
        }
        
        .blue-icon {
            background-color: #dbeafe;
        }
        
        .card-link:hover .blue-icon {
            background-color: #3b82f6;
        }
        
        .indigo-icon {
            background-color: #e0e7ff;
        }
        
        .card-link:hover .indigo-icon {
            background-color: #6366f1;
        }
        
        .icon {
            width: 2rem;
            height: 2rem;
            transition: color 0.3s ease;
        }
        
        .users-icon {
            color: #2563eb;
        }
        
        .card-link:hover .users-icon {
            color: white;
        }
        
        .shield-icon {
            color: #4f46e5;
        }
        
        .card-link:hover .shield-icon {
            color: white;
        }
        
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
        }
        
        .card-description {
            color: #4b5563;
            margin: 0;
            line-height: 1.5;
        }
        
        /* Form Section (Initially Hidden) */
        .form-section {
            display: none;
            background: white;
            border-radius: 1rem;
            padding: 0;
            margin-top: 0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.3s ease;
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-section.active {
            display: block;
        }
        
        .back-button {
            background: #3b82f6;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin: 1.5rem;
            border-radius: 0.5rem;
            transition: background-color 0.2s;
        }
        
        .back-button:hover {
            background-color: #2563eb;
        }
        
        /* Registration Form Styles */
        .form-container {
            padding: 30px;
        }
        
        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #2c3e50;
        }
        
        .church-info {
            flex: 1;
        }
        
        .photo-section {
            width: 150px;
            text-align: center;
        }
        
        .photo-placeholder {
            width: 120px;
            height: 150px;
            border: 1px dashed #bdc3c7;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            background-color: #ecf0f1;
            font-size: 12px;
            color: #666;
        }
        
        .form-section-title {
            color: #3498db;
            font-size: 20px;
            margin: 25px 0 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid #bdc3c7;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .form-input, .form-select, .form-textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }
        
        .inline-group {
            display: flex;
            gap: 15px;
        }
        
        .inline-group .form-group {
            flex: 1;
        }
        
        .checkbox-group, .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 5px;
        }
        
        .checkbox-item, .radio-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .form-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        
        .form-table th, .form-table td {
            border: 1px solid #bdc3c7;
            padding: 10px;
            text-align: left;
        }
        
        .form-table th {
            background-color: #ecf0f1;
            font-weight: 600;
        }
        
        .submit-btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 30px auto 0;
            transition: background-color 0.3s;
            width: 200px;
        }
        
        .submit-btn:hover {
            background-color: #2980b9;
        }
        
        .login-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        @media (max-width: 768px) {
            .form-header {
                flex-direction: column;
            }
            
            .photo-section {
                margin-top: 20px;
                width: 100%;
            }
            
            .inline-group {
                flex-direction: column;
                gap: 0;
            }
            
            .form-container {
                padding: 15px;
            }
        }
        
        /* Success Message */
        .success-message {
            text-align: center;
            padding: 3rem;
            display: none;
        }
        
        .success-message.active {
            display: block;
        }
        
        .success-icon {
            width: 64px;
            height: 64px;
            color: #10b981;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Main Dashboard -->
        <div id="main-content" class="content-wrapper">
            <div class="header">
                <h1 class="title">K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</h1>
                <p class="subtitle">Jimbo la Kusini - Usharika wa Mji Mwema</p>
            </div>

            <div class="cards-grid">
                <a href="#" onclick="showMemberForm()" class="card-link">
                    <div class="card blue-card">
                        <div class="card-content">
                            <div class="icon-container blue-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon users-icon">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <h2 class="card-title">Msharika</h2>
                            <p class="card-description">Jaza fomu ya usajili wa usharika</p>
                        </div>
                    </div>
                </a>

                <a href="#" onclick="showAdminLogin()" class="card-link">
                    <div class="card indigo-card">
                        <div class="card-content">
                            <div class="icon-container indigo-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon shield-icon">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/>
                                </svg>
                            </div>
                            <h2 class="card-title">Msimamizi</h2>
                            <p class="card-description">Ingia kwenye ukurasa wa usimamizi</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>


     {{-- include member form --}}
       @include('member_form')
        <!-- Admin Login Form -->
        <div id="admin-login" class="form-section">
            <button class="back-button" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                Rudi Nyuma
            </button>
            
            <div class="login-form">
                <h2 class="form-title">Uingiaji wa Msimamizi</h2>
                
                <form onsubmit="submitAdminLogin(event)">
                    <div class="form-group">
                        <label class="form-label" for="adminEmail">Barua Pepe</label>
                        <input type="email" class="form-input" id="adminEmail" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="adminPassword">Nenosiri</label>
                        <input type="password" class="form-input" id="adminPassword" required>
                    </div>
                    
                    <button type="submit" class="submit-btn">Ingia</button>
                </form>
            </div>
        </div>

        <!-- Success Message -->
        <div id="success-message" class="success-message">
            <svg xmlns="http://www.w3.org/2000/svg" class="success-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            <h2 style="color: #10b981; margin-bottom: 1rem;">Usajili Umekamilika!</h2>
            <p style="margin-bottom: 2rem; color: #4b5563;">Asante kwa kujisajili kama msharika wa K.K.K.T Dayosisi ya Mashariki na Pwani.</p>
            <button class="back-button" onclick="goBack()" style="margin: 0 auto;">
                Rudi Kwenye Ukurasa Mkuu
            </button>
        </div>
    </div>

    <script>
        // Navigation Functions
        function showMemberForm() {
            document.getElementById('main-content').style.display = 'none';
            document.getElementById('member-form').classList.add('active');
            document.getElementById('admin-login').classList.remove('active');
            document.getElementById('success-message').classList.remove('active');
        }

        function showAdminLogin() {
            document.getElementById('main-content').style.display = 'none';
            document.getElementById('admin-login').classList.add('active');
            document.getElementById('member-form').classList.remove('active');
            document.getElementById('success-message').classList.remove('active');
        }

        function goBack() {
            document.getElementById('main-content').style.display = 'block';
            document.getElementById('member-form').classList.remove('active');
            document.getElementById('admin-login').classList.remove('active');
            document.getElementById('success-message').classList.remove('active');
        }

        function showSuccessMessage() {
            document.getElementById('main-content').style.display = 'none';
            document.getElementById('member-form').classList.remove('active');
            document.getElementById('admin-login').classList.remove('active');
            document.getElementById('success-message').classList.add('active');
        }



        // Optional: Add keyboard support for Escape key to go back
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                goBack();
            }
        });

        // Auto-fill today's date for birth date if empty
        document.getElementById('tarehe_kuzaliwa').max = new Date().toISOString().split('T')[0];
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
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

        /* Header Styles */
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
        }

        .subtitle {
            font-size: 1.25rem;
            color: #4b5563;
        }

        /* Cards Grid */
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

        /* Card Link */
        .card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .card-link:hover .card {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Card Styles */
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

        /* Icon Container */
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

        /* Icon Styles */
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

        /* Text Styles */
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
            padding: 2rem;
            margin-top: 2rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-section.active {
            display: block;
        }

        .back-button {
            background: none;
            border: none;
            color: #3b82f6;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            padding: 0.5rem;
        }

        .back-button:hover {
            color: #2563eb;
        }

        .form-title {
            font-size: 1.875rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #111827;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .submit-button {
            width: 100%;
            padding: 0.75rem;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 1rem;
        }

        .submit-button:hover {
            background-color: #2563eb;
        }

        .login-form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
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

        <!-- Member Registration Form -->
        <div id="member-form" class="form-section">
            <button class="back-button" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                Rudi Nyuma
            </button>
            
            <h2 class="form-title">Usajili wa Msharika</h2>
            
            <form id="registrationForm" onsubmit="submitRegistration(event)">
                <div class="form-group">
                    <label class="form-label" for="fullName">Jina Kamili</label>
                    <input type="text" id="fullName" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="email">Barua Pepe</label>
                    <input type="email" id="email" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="phone">Namba ya Simu</label>
                    <input type="tel" id="phone" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="address">Anwani</label>
                    <input type="text" id="address" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="occupation">Kazi/Kazi Zingine</label>
                    <input type="text" id="occupation" class="form-input" required>
                </div>
                
                <button type="submit" class="submit-button">Wasilisha Usajili</button>
            </form>
        </div>

        <!-- Admin Login Form -->
        <div id="admin-login" class="form-section">
            <button class="back-button" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                Rudi Nyuma
            </button>
            
            <h2 class="form-title">Uingiaji wa Msimamizi</h2>
            
            <form class="login-form" onsubmit="submitAdminLogin(event)">
                <div class="form-group">
                    <label class="form-label" for="adminEmail">Barua Pepe</label>
                    <input type="email" id="adminEmail" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="adminPassword">Nenosiri</label>
                    <input type="password" id="adminPassword" class="form-input" required>
                </div>
                
                <button type="submit" class="submit-button">Ingia</button>
            </form>
        </div>
    </div>

    <script>
        function showMemberForm() {
            document.getElementById('main-content').style.display = 'none';
            document.getElementById('member-form').classList.add('active');
            document.getElementById('admin-login').classList.remove('active');
        }

        function showAdminLogin() {
            document.getElementById('main-content').style.display = 'none';
            document.getElementById('admin-login').classList.add('active');
            document.getElementById('member-form').classList.remove('active');
        }

        function goBack() {
            document.getElementById('main-content').style.display = 'block';
            document.getElementById('member-form').classList.remove('active');
            document.getElementById('admin-login').classList.remove('active');
        }

        function submitRegistration(event) {
            event.preventDefault();
            
            // Get form data
            const formData = {
                fullName: document.getElementById('fullName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                address: document.getElementById('address').value,
                occupation: document.getElementById('occupation').value
            };
            
            // Here you would typically send data to server
            // For demo, just show an alert
            alert(`Usajili umekamilika!\n\nJina: ${formData.fullName}\nBarua Pepe: ${formData.email}\nSimu: ${formData.phone}\nAnwani: ${formData.address}\nKazi: ${formData.occupation}`);
            
            // Reset form and go back
            document.getElementById('registrationForm').reset();
            goBack();
        }

        function submitAdminLogin(event) {
            event.preventDefault();
            
            const email = document.getElementById('adminEmail').value;
            const password = document.getElementById('adminPassword').value;
            
            // Here you would typically send login credentials to server
            // For demo, just show an alert
            alert(`Umeingia kama Msimamizi!\n\nBarua Pepe: ${email}`);
            
            // Reset form and go back
            document.getElementById('adminEmail').value = '';
            document.getElementById('adminPassword').value = '';
            goBack();
        }

        // Optional: Add keyboard support for Escape key to go back
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                goBack();
            }
        });
    </script>
</body>
</html>
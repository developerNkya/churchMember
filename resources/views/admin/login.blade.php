<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uingiaji wa Msimamizi - K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</title>
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
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            padding: 20px;
        }
        
        .login-container {
            max-width: 450px;
            width: 100%;
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #3b82f6 0%, #1e3a8a 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 32px;
        }
        
        h1 {
            color: #1e3a8a;
            margin-bottom: 10px;
            font-size: 1.8rem;
        }
        
        .subtitle {
            color: #64748b;
            font-size: 1rem;
        }
        
        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        
        .alert-danger {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #374151;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .form-control.error {
            border-color: #ef4444;
        }
        
        .error-message {
            color: #ef4444;
            font-size: 14px;
            margin-top: 5px;
        }
        
        .btn-login {
            width: 100%;
            padding: 14px;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .btn-login:hover {
            background-color: #2563eb;
        }
        
        .btn-login:disabled {
            background-color: #93c5fd;
            cursor: not-allowed;
        }
        
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #6b7280;
            text-decoration: none;
            margin-top: 25px;
            transition: color 0.3s;
        }
        
        .back-link:hover {
            color: #374151;
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        @media (max-width: 768px) {
            .login-container {
                padding: 30px 25px;
            }
            
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="header">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/>
                </svg>
            </div>
            <h1>Uingiaji wa Msimamizi</h1>
            <p class="subtitle">K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</p>
        </div>
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        @if($errors->any())
            <div class="alert alert-danger">
                <ul style="margin-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="POST" action="{{ route('admin.authenticate') }}" id="loginForm">
            @csrf
            
            <div class="form-group">
                <label for="email">Barua Pepe</label>
                <input type="email" id="email" name="email" class="form-control @error('email') error @enderror" 
                       value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password">Nenosiri</label>
                <input type="password" id="password" name="password" class="form-control @error('password') error @enderror" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn-login" id="loginBtn">
                <span id="loginText">Ingia</span>
                <span id="loadingSpinner" class="loading" style="display: none;"></span>
            </button>
        </form>
        
        <a href="{{ route('home') }}" class="back-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
            Rudi Kwenye Ukurasa Mkuu
        </a>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const loginBtn = document.getElementById('loginBtn');
            const loginText = document.getElementById('loginText');
            const loadingSpinner = document.getElementById('loadingSpinner');
            
            // Show loading state
            loginBtn.disabled = true;
            loginText.textContent = 'Inaingiza...';
            loadingSpinner.style.display = 'inline-block';
            
            // Validate form
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            
            if (!email || !password) {
                e.preventDefault();
                alert('Tafadhali jaza barua pepe na nenosiri.');
                
                // Reset button state
                loginBtn.disabled = false;
                loginText.textContent = 'Ingia';
                loadingSpinner.style.display = 'none';
            }
        });
    </script>
</body>
</html>
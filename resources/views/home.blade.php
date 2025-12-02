<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</title>
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
            padding: 1rem;
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
            color: #1e3a8a;
            margin-bottom: 1rem;
            text-wrap: balance;
            line-height: 1.2;
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
        
        .alert {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }
        
        .alert-danger {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <!-- Display Success Message if redirected from registration -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="header">
                <h1 class="title">K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</h1>
                <p class="subtitle">Jimbo la Kusini - Usharika wa Mji Mwema</p>
            </div>

            <div class="cards-grid">
                <a href="{{ route('member.register') }}" class="card-link">
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

                <a href="{{ route('admin.login') }}" class="card-link">
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
    </div>
</body>
</html>
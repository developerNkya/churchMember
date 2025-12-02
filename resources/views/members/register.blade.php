<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usajili wa Msharika - K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --border-color: #bdc3c7;
            --success-color: #27ae60;
            --error-color: #e74c3c;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
            padding: 20px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        
        .back-button {
            background: #3b82f6;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            border-radius: 0.5rem;
            transition: background-color 0.2s;
            text-decoration: none;
        }
        
        .back-button:hover {
            background-color: #2563eb;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--primary-color);
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
            border: 1px dashed var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            background-color: var(--light-color);
        }
        
        h1 {
            color: var(--primary-color);
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        h2 {
            color: var(--secondary-color);
            font-size: 20px;
            margin: 25px 0 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .form-section {
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .required::after {
            content: " *";
            color: var(--error-color);
        }
        
        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-size: 16px;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }
        
        input.error, select.error, textarea.error {
            border-color: var(--error-color);
        }
        
        .error-message {
            color: var(--error-color);
            font-size: 14px;
            margin-top: 5px;
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
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        
        th, td {
            border: 1px solid var(--border-color);
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: var(--light-color);
        }
        
        table input {
            border: none;
            padding: 5px;
        }
        
        table input:focus {
            outline: 2px solid var(--secondary-color);
        }
        
        .submit-btn {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 30px auto 0;
            transition: background-color 0.3s;
            min-width: 200px;
        }
        
        .submit-btn:hover {
            background-color: #2980b9;
        }
        
        .submit-btn:disabled {
            background-color: #95a5a6;
            cursor: not-allowed;
        }
        
        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: #d5edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .alert-danger ul {
            margin-left: 20px;
        }
        
        @media (max-width: 768px) {
            .header {
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
            
            .container {
                padding: 15px;
            }
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}" class="back-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
            Rudi Nyuma
        </a>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Tafadhali sahihisha makosa yafuatayo:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="registrationForm" action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Header Section -->
            <div class="header">
                <div class="church-info">
                    <h1>K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</h1>
                    <div class="form-group">
                        <label for="jimbo" class="required">JIMBO LA KUSINI</label>
                        <input type="text" id="jimbo" name="jimbo" value="KUSINI" readonly>
                    </div>
                    <div class="form-group">
                        <label for="usharika" class="required">USHARIKA WA MJI MWEMA</label>
                        <input type="text" id="usharika" name="usharika" value="MJI MWEMA" readonly>
                    </div>
                </div>
                <div class="photo-section">
                    <div class="photo-placeholder">
                        PICHA YA MSHARIKA
                    </div>
                    <input type="file" id="photo" name="photo" accept="image/*" style="margin-top: 10px; padding: 5px;">
                    <small style="display: block; margin-top: 5px; color: #666;">(Picha inakubalika - JPG, PNG, max 2MB)</small>
                </div>
            </div>

            <!-- Section A: Personal Information -->
            <div class="form-section">
                <h2>A. TARIFA BINAFSI</h2>
                
                <div class="inline-group">
                    <div class="form-group">
                        <label for="jina" class="required">1. Jina la Msharika</label>
                        <input type="text" id="jina" name="jina" value="{{ old('jina') }}" required>
                        @error('jina')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jinsi" class="required">2. Jinsi (Me/Ke)</label>
                        <select id="jinsi" name="jinsi" required>
                            <option value="">Chagua</option>
                            <option value="Me" {{ old('jinsi') == 'Me' ? 'selected' : '' }}>Me</option>
                            <option value="Ke" {{ old('jinsi') == 'Ke' ? 'selected' : '' }}>Ke</option>
                        </select>
                        @error('jinsi')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="inline-group">
                    <div class="form-group">
                        <label for="tarehe_kuzaliwa" class="required">3. Tarehe ya Kuzaliwa (DD/MM/YYYY)</label>
                        <input type="date" id="tarehe_kuzaliwa" name="tarehe_kuzaliwa" value="{{ old('tarehe_kuzaliwa') }}" required>
                        @error('tarehe_kuzaliwa')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mahali_kuzaliwa" class="required">4. Mahali Ulipozaliwa</label>
                        <input type="text" id="mahali_kuzaliwa" name="mahali_kuzaliwa" value="{{ old('mahali_kuzaliwa') }}" required>
                        @error('mahali_kuzaliwa')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="required">5. Hali ya Ndoa</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="umeoa" name="hali_ndoa" value="Umeoa" {{ old('hali_ndoa') == 'Umeoa' ? 'checked' : '' }}>
                            <label for="umeoa">Umeoa</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="hujaoa" name="hali_ndoa" value="Hujaoa" {{ old('hali_ndoa') == 'Hujaoa' ? 'checked' : '' }}>
                            <label for="hujaoa">Hujaoa</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="umeolewa" name="hali_ndoa" value="Umeolewa" {{ old('hali_ndoa') == 'Umeolewa' ? 'checked' : '' }}>
                            <label for="umeolewa">Umeolewa</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="hujaolewa" name="hali_ndoa" value="Hujaolewa" {{ old('hali_ndoa') == 'Hujaolewa' ? 'checked' : '' }}>
                            <label for="hujaolewa">Hujaolewa</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="mgane" name="hali_ndoa" value="Mgane" {{ old('hali_ndoa') == 'Mgane' ? 'checked' : '' }}>
                            <label for="mgane">Mgane</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="mjane" name="hali_ndoa" value="Mjane" {{ old('hali_ndoa') == 'Mjane' ? 'checked' : '' }}>
                            <label for="mjane">Mjane</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="talikiwa" name="hali_ndoa" value="Talikiwa" {{ old('hali_ndoa') == 'Talikiwa' ? 'checked' : '' }}>
                            <label for="talikiwa">Talikiwa</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="tengana" name="hali_ndoa" value="Tengana" {{ old('hali_ndoa') == 'Tengana' ? 'checked' : '' }}>
                            <label for="tengana">Tengana</label>
                        </div>
                    </div>
                    @error('hali_ndoa')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="jina_mwenzi">6. Kama umeoa/kuolewa, taja jina la Mwenzi wako</label>
                    <input type="text" id="jina_mwenzi" name="jina_mwenzi" value="{{ old('jina_mwenzi') }}">
                    @error('jina_mwenzi')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>7. Ndoa yako imefungwa?</label>
                    <div class="inline-group">
                        <div class="radio-group">
                            <div class="radio-item">
                                <input type="radio" id="ndoa_kikristo" name="aina_ndoa" value="Kikristo" {{ old('aina_ndoa') == 'Kikristo' ? 'checked' : '' }}>
                                <label for="ndoa_kikristo">Kikristo</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="ndoa_siyo_kikristo" name="aina_ndoa" value="Siyo Kikristo" {{ old('aina_ndoa') == 'Siyo Kikristo' ? 'checked' : '' }}>
                                <label for="ndoa_siyo_kikristo">Siyo Kikristo</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarehe_ndoa">Tarehe (DD/MM/YYYY)</label>
                            <input type="date" id="tarehe_ndoa" name="tarehe_ndoa" value="{{ old('tarehe_ndoa') }}">
                            @error('tarehe_ndoa')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @error('aina_ndoa')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Watoto/Waumini wanao kutegemea</label>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jina lake Kamili</th>
                                <th>Tarehe ya Kuzaliwa</th>
                                <th>Uhusiano</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" name="jina_mtoto_1" value="{{ old('jina_mtoto_1') }}"></td>
                                <td><input type="date" name="tarehe_mtoto_1" value="{{ old('tarehe_mtoto_1') }}"></td>
                                <td><input type="text" name="uhusiano_mtoto_1" value="{{ old('uhusiano_mtoto_1') }}"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="text" name="jina_mtoto_2" value="{{ old('jina_mtoto_2') }}"></td>
                                <td><input type="date" name="tarehe_mtoto_2" value="{{ old('tarehe_mtoto_2') }}"></td>
                                <td><input type="text" name="uhusiano_mtoto_2" value="{{ old('uhusiano_mtoto_2') }}"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input type="text" name="jina_mtoto_3" value="{{ old('jina_mtoto_3') }}"></td>
                                <td><input type="date" name="tarehe_mtoto_3" value="{{ old('tarehe_mtoto_3') }}"></td>
                                <td><input type="text" name="uhusiano_mtoto_3" value="{{ old('uhusiano_mtoto_3') }}"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><input type="text" name="jina_mtoto_4" value="{{ old('jina_mtoto_4') }}"></td>
                                <td><input type="date" name="tarehe_mtoto_4" value="{{ old('tarehe_mtoto_4') }}"></td>
                                <td><input type="text" name="uhusiano_mtoto_4" value="{{ old('uhusiano_mtoto_4') }}"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Section B: Contact and Residence -->
            <div class="form-section">
                <h2>B. MAWASILIANO NA MAKAZI</h2>
                
                <div class="inline-group">
                    <div class="form-group">
                        <label for="simu" class="required">1. Namba ya Simu</label>
                        <input type="tel" id="simu" name="simu" value="{{ old('simu') }}" required>
                        @error('simu')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="simu_mwenzi">2. Namba ya Simu (Mwenzi)</label>
                        <input type="tel" id="simu_mwenzi" name="simu_mwenzi" value="{{ old('simu_mwenzi') }}">
                        @error('simu_mwenzi')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="inline-group">
                    <div class="form-group">
                        <label for="sanduku_barua">3. Sanduku la Barua</label>
                        <input type="text" id="sanduku_barua" name="sanduku_barua" value="{{ old('sanduku_barua') }}">
                        @error('sanduku_barua')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="barua_pepe">4. Barua Pepe (email) yako</label>
                        <input type="email" id="barua_pepe" name="barua_pepe" value="{{ old('barua_pepe') }}">
                        @error('barua_pepe')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="inline-group">
                    <div class="form-group">
                        <label for="mtaa" class="required">5. Mtaa/Jumuiya</label>
                        <input type="text" id="mtaa" name="mtaa" value="{{ old('mtaa') }}" required>
                        @error('mtaa')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="namba_nyumba">6. Namba ya Nyumba</label>
                        <input type="text" id="namba_nyumba" name="namba_nyumba" value="{{ old('namba_nyumba') }}">
                        @error('namba_nyumba')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="inline-group">
                    <div class="form-group">
                        <label for="jina_eneo" class="required">7. Jina la Eneo unaloishi</label>
                        <input type="text" id="jina_eneo" name="jina_eneo" value="{{ old('jina_eneo') }}" required>
                        @error('jina_eneo')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="block_no">8. Block No.</label>
                        <input type="text" id="block_no" name="block_no" value="{{ old('block_no') }}">
                        @error('block_no')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="inline-group">
                    <div class="form-group">
                        <label for="jirani_jina">9. Jirani (Jina Kamili)</label>
                        <input type="text" id="jirani_jina" name="jirani_jina" value="{{ old('jirani_jina') }}">
                        @error('jirani_jina')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jirani_simu">10. Jirani (Simu)</label>
                        <input type="tel" id="jirani_simu" name="jirani_simu" value="{{ old('jirani_simu') }}">
                        @error('jirani_simu')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="inline-group">
                    <div class="form-group">
                        <label for="mzee_kanisa">11. Mzee wa Kanisa (Jina)</label>
                        <input type="text" id="mzee_kanisa" name="mzee_kanisa" value="{{ old('mzee_kanisa') }}">
                        @error('mzee_kanisa')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="simu_mzee">12. Simu ya Mzee wa Kanisa</label>
                        <input type="tel" id="simu_mzee" name="simu_mzee" value="{{ old('simu_mzee') }}">
                        @error('simu_mzee')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section C: Education and Work -->
            <div class="form-section">
                <h2>C. ELIMU NA KAZI YAKO</h2>
                
                <div class="form-group">
                    <label for="kazi" class="required">1. Kazi/Shughuli yako (Occupation)</label>
                    <input type="text" id="kazi" name="kazi" value="{{ old('kazi') }}" required>
                    @error('kazi')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="mahali_kazi">2. Mahali pa Kazi</label>
                    <input type="text" id="mahali_kazi" name="mahali_kazi" value="{{ old('mahali_kazi') }}">
                    @error('mahali_kazi')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="elimu">3. Elimu</label>
                    <input type="text" id="elimu" name="elimu" value="{{ old('elimu') }}">
                    @error('elimu')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="ujuzi">4. Ujuzi (Profession)</label>
                    <input type="text" id="ujuzi" name="ujuzi" value="{{ old('ujuzi') }}">
                    @error('ujuzi')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Section D: Spiritual Services -->
            <div class="form-section">
                <h2>D. HUDUMA ZA KIROHO</h2>
                
                <div class="form-group">
                    <label class="required">1. Umebatizwa?</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="batizwa_ndiyo" name="batizwa" value="Ndiyo" {{ old('batizwa') == 'Ndiyo' ? 'checked' : '' }}>
                            <label for="batizwa_ndiyo">Ndiyo</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="batizwa_hapana" name="batizwa" value="Hapana" {{ old('batizwa') == 'Hapana' ? 'checked' : '' }}>
                            <label for="batizwa_hapana">Hapana</label>
                        </div>
                    </div>
                    @error('batizwa')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>2. Ulishapata Kipaimara?</label>
                    <div class="inline-group">
                        <div class="radio-group">
                            <div class="radio-item">
                                <input type="radio" id="kipaimara_ndiyo" name="kipaimara" value="Ndiyo" {{ old('kipaimara') == 'Ndiyo' ? 'checked' : '' }}>
                                <label for="kipaimara_ndiyo">Ndiyo</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="kipaimara_hapana" name="kipaimara" value="Hapana" {{ old('kipaimara') == 'Hapana' ? 'checked' : '' }}>
                                <label for="kipaimara_hapana">Hapana</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tarehe_kipaimara">Tarehe (DD/MM/YYYY)</label>
                            <input type="date" id="tarehe_kipaimara" name="tarehe_kipaimara" value="{{ old('tarehe_kipaimara') }}">
                            @error('tarehe_kipaimara')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @error('kipaimara')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="required">3. Unashiriki Sakramenti ya Meza ya Bwana?</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="meza_ndiyo" name="meza_bwana" value="Ndiyo" {{ old('meza_bwana') == 'Ndiyo' ? 'checked' : '' }}>
                            <label for="meza_ndiyo">Ndiyo</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="meza_hapana" name="meza_bwana" value="Hapana" {{ old('meza_bwana') == 'Hapana' ? 'checked' : '' }}>
                            <label for="meza_hapana">Hapana</label>
                        </div>
                    </div>
                    @error('meza_bwana')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Section E: Church Service Participation -->
            <div class="form-section">
                <h2>E. USHIRIKI WA HUDUMA ZA KANISA NA VIKUNDI</h2>
                
                <div class="form-group">
                    <label>Unashiriki ibada za nyumba kwa nyumba (Jumuiya)?</label>
                    <div class="inline-group">
                        <div class="radio-group">
                            <div class="radio-item">
                                <input type="radio" id="jumuiya_ndiyo" name="jumuiya" value="Ndiyo" {{ old('jumuiya') == 'Ndiyo' ? 'checked' : '' }}>
                                <label for="jumuiya_ndiyo">Ndiyo</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="jumuiya_hapana" name="jumuiya" value="Hapana" {{ old('jumuiya') == 'Hapana' ? 'checked' : '' }}>
                                <label for="jumuiya_hapana">Hapana</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jina_jumuiya">Jina la Jumuiya</label>
                            <input type="text" id="jina_jumuiya" name="jina_jumuiya" value="{{ old('jina_jumuiya') }}">
                            @error('jina_jumuiya')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sababu">Sababu ya Kutoshiriki</label>
                        <input type="text" id="sababu" name="sababu" value="{{ old('sababu') }}">
                        @error('sababu')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Je, Umejiunga au ungependa Kujiunga na huduma gani hapa Usharikani?</label>
                    
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="huduma_1" name="huduma[]" value="Fellowship/Bible Study" {{ in_array('Fellowship/Bible Study', old('huduma', [])) ? 'checked' : '' }}>
                            <label for="huduma_1">Fellowship / Bible Study</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="huduma_2" name="huduma[]" value="Kufundisha Shule ya Jumapili" {{ in_array('Kufundisha Shule ya Jumapili', old('huduma', [])) ? 'checked' : '' }}>
                            <label for="huduma_2">Kufundisha Shule ya Jumapili (Sunday School)</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="huduma_3" name="huduma[]" value="Kutembelea Wagonjwa" {{ in_array('Kutembelea Wagonjwa', old('huduma', [])) ? 'checked' : '' }}>
                            <label for="huduma_3">Kutembelea Wagonjwa</label>
                        </div>
                    </div>
                    
                    <div class="form-group" style="margin-top: 15px;">
                        <label>Kwaya</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="kwaya_kuu" name="kwaya[]" value="Kuu" {{ in_array('Kuu', old('kwaya', [])) ? 'checked' : '' }}>
                                <label for="kwaya_kuu">Kuu</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="kwaya_vijana" name="kwaya[]" value="Vijana" {{ in_array('Vijana', old('kwaya', [])) ? 'checked' : '' }}>
                                <label for="kwaya_vijana">Vijana</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="kwaya_matarumbeta" name="kwaya[]" value="Matarumbeta" {{ in_array('Matarumbeta', old('kwaya', [])) ? 'checked' : '' }}>
                                <label for="kwaya_matarumbeta">Matarumbeta</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="kwaya_kusifu" name="kwaya[]" value="Kusifu na Kuabudu" {{ in_array('Kusifu na Kuabudu', old('kwaya', [])) ? 'checked' : '' }}>
                                <label for="kwaya_kusifu">Kusifu na Kuabudu</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Umoja</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="umoja_vijana" name="umoja[]" value="Vijana" {{ in_array('Vijana', old('umoja', [])) ? 'checked' : '' }}>
                                <label for="umoja_vijana">Vijana</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="umoja_mama" name="umoja[]" value="Wa mama" {{ in_array('Wa mama', old('umoja', [])) ? 'checked' : '' }}>
                                <label for="umoja_mama">Wa mama</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="umoja_baba" name="umoja[]" value="Wa Baba" {{ in_array('Wa Baba', old('umoja', [])) ? 'checked' : '' }}>
                                <label for="umoja_baba">Wa Baba</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="huduma_4" name="huduma[]" value="Uinjilisti" {{ in_array('Uinjilisti', old('huduma', [])) ? 'checked' : '' }}>
                            <label for="huduma_4">Uinjilisti</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="huduma_5" name="huduma[]" value="Uamsho" {{ in_array('Uamsho', old('huduma', [])) ? 'checked' : '' }}>
                            <label for="huduma_5">Uamsho</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="huduma_6" name="huduma[]" value="Akina Mama" {{ in_array('Akina Mama', old('huduma', [])) ? 'checked' : '' }}>
                            <label for="huduma_6">Akina Mama</label>
                        </div>
                    </div>
                    @error('huduma')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    @error('kwaya')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    @error('umoja')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Section F: Pledge for 2026 -->
            <div class="form-section">
                <h2>F. AHADI YAKO KWA BWANA MWAKA 2026</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Jina la Ahadi</th>
                            <th>Kiasi kwa mwaka (Tshs.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jengo</td>
                            <td><input type="number" name="ahadi_jengo" min="0" value="{{ old('ahadi_jengo') }}"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Uwakili</td>
                            <td><input type="number" name="ahadi_uwakili" min="0" value="{{ old('ahadi_uwakili') }}"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ahadinyingine kama ipo</td>
                            <td><input type="number" name="ahadi_nyingine" min="0" value="{{ old('ahadi_nyingine') }}"></td>
                        </tr>
                    </tbody>
                </table>
                @error('ahadi_jengo')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                @error('ahadi_uwakili')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                @error('ahadi_nyingine')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                
                <div class="form-group">
                    <label>4. Je una Namba ya Ahadi?</label>
                    <div class="inline-group">
                        <div class="radio-group">
                            <div class="radio-item">
                                <input type="radio" id="namba_ahadi_ndiyo" name="namba_ahadi" value="Ndiyo" {{ old('namba_ahadi') == 'Ndiyo' ? 'checked' : '' }}>
                                <label for="namba_ahadi_ndiyo">Ndiyo</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="namba_ahadi_hapana" name="namba_ahadi" value="Hapana" {{ old('namba_ahadi') == 'Hapana' ? 'checked' : '' }}>
                                <label for="namba_ahadi_hapana">Hapana</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namba_ahadi_specific">Namba ya ahadi kama unayo</label>
                            <input type="text" id="namba_ahadi_specific" name="namba_ahadi_specific" value="{{ old('namba_ahadi_specific') }}">
                            @error('namba_ahadi_specific')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @error('namba_ahadi')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="submit-btn" id="submitBtn">
                <span id="submitText">Wasilisha Fomu</span>
                <span id="loadingSpinner" class="loading" style="display: none;"></span>
            </button>
        </form>
    </div>

    <script>
        // Form validation
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const loadingSpinner = document.getElementById('loadingSpinner');
            
            // Show loading state
            submitBtn.disabled = true;
            submitText.textContent = 'Inawasilisha...';
            loadingSpinner.style.display = 'inline-block';
            
            // Validate required fields
            const requiredFields = this.querySelectorAll('[required]');
            let valid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                    valid = false;
                } else {
                    field.classList.remove('error');
                }
            });
            
            // Validate radio groups
            const requiredRadios = this.querySelectorAll('.radio-group');
            requiredRadios.forEach(group => {
                const name = group.querySelector('input[type="radio"]').name;
                const checked = this.querySelector(`input[name="${name}"]:checked`);
                if (!checked && group.closest('.form-group').querySelector('label').classList.contains('required')) {
                    group.classList.add('error');
                    valid = false;
                } else {
                    group.classList.remove('error');
                }
            });
            
            if (!valid) {
                e.preventDefault();
                alert('Tafadhali jaza sehemu zote zinazohitajika zilizo na alama ya *');
                
                // Reset button state
                submitBtn.disabled = false;
                submitText.textContent = 'Wasilisha Fomu';
                loadingSpinner.style.display = 'none';
            }
        });

        // Auto-format phone numbers
        document.querySelectorAll('input[type="tel"]').forEach(input => {
            input.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 0) {
                    value = value.match(/.{1,4}/g).join(' ');
                }
                e.target.value = value;
            });
        });

        // Date restrictions
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('tarehe_kuzaliwa').max = today;
        document.getElementById('tarehe_ndoa').max = today;
        document.getElementById('tarehe_kipaimara').max = today;
        
        for (let i = 1; i <= 4; i++) {
            const dateField = document.querySelector(`input[name="tarehe_mtoto_${i}"]`);
            if (dateField) {
                dateField.max = today;
            }
        }

        // Auto-show/hide spouse name based on marital status
        const maritalStatusRadios = document.querySelectorAll('input[name="hali_ndoa"]');
        const spouseNameField = document.getElementById('jina_mwenzi');
        
        function toggleSpouseName() {
            const selectedValue = document.querySelector('input[name="hali_ndoa"]:checked')?.value;
            if (selectedValue === 'Umeoa' || selectedValue === 'Umeolewa') {
                spouseNameField.required = true;
                spouseNameField.closest('.form-group').querySelector('label').classList.add('required');
            } else {
                spouseNameField.required = false;
                spouseNameField.closest('.form-group').querySelector('label').classList.remove('required');
            }
        }
        
        maritalStatusRadios.forEach(radio => {
            radio.addEventListener('change', toggleSpouseName);
        });
        
        // Initialize on page load
        toggleSpouseName();

        // Handle file upload size validation
        document.getElementById('photo').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const maxSize = 2 * 1024 * 1024; // 2MB
                if (file.size > maxSize) {
                    alert('Faili ni kubwa sana. Tafadhali chagua faili ndogo kuliko 2MB.');
                    e.target.value = '';
                }
                
                // Validate file type
                const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];
                if (!validTypes.includes(file.type)) {
                    alert('Aina ya faili haikubaliki. Tafadhali chagua picha ya aina JPG au PNG.');
                    e.target.value = '';
                }
            }
        });

        // Restore form state from old input
        document.addEventListener('DOMContentLoaded', function() {
            const oldInputs = @json(old());

            // Handle checkboxes for arrays
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                const name = checkbox.name;
                if (name.includes('[]')) {
                    const key = name.split('[')[0];
                    if (oldInputs && oldInputs[key] && Array.isArray(oldInputs[key]) && oldInputs[key].includes(checkbox.value)) {
                        checkbox.checked = true;
                    }
                }
            });
        });
    </script>
</body>
</html>
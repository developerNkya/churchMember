<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukurasa wa Usimamizi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
        }

        body {
            background-color: #f9fafb;
            min-height: 100vh;
        }

        /* Header Styles */
        .header {
            background: white;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-title h1 {
            font-size: 24px;
            font-weight: 700;
            color: #111827;
        }

        .header-title p {
            font-size: 14px;
            color: #6b7280;
            margin-top: 4px;
        }

        .logout-btn {
            background: transparent;
            border: 1px solid #d1d5db;
            color: #374151;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
            text-decoration: none;
        }

        .logout-btn:hover {
            background: #f9fafb;
            border-color: #9ca3af;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 20px;
        }

        /* Search and Actions */
        .search-section {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 24px;
        }

        .search-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        @media (min-width: 768px) {
            .search-container {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }
        }

        .search-box {
            position: relative;
            flex: 1;
        }

        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            width: 20px;
            height: 20px;
        }

        .search-input {
            width: 100%;
            padding: 10px 12px 10px 40px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.2s;
        }

        .search-input:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .btn-primary {
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
            white-space: nowrap;
        }

        .btn-primary:hover {
            background: #4338ca;
        }

        .btn-secondary {
            background: transparent;
            border: 1px solid #d1d5db;
            color: #374151;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .btn-secondary:hover {
            background: #f9fafb;
        }

        /* Table Styles */
        .table-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table thead {
            background: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
        }

        .data-table th {
            padding: 12px 24px;
            text-align: left;
            font-size: 12px;
            font-weight: 500;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            white-space: nowrap;
        }

        .data-table tbody tr {
            border-bottom: 1px solid #e5e7eb;
            transition: background 0.2s;
        }

        .data-table tbody tr:hover {
            background: #f9fafb;
        }

        .data-table td {
            padding: 16px 24px;
            font-size: 14px;
            color: #374151;
            white-space: nowrap;
        }

        .data-table td:first-child {
            color: #6b7280;
        }

        .actions-cell {
            text-align: right;
        }

        .actions-container {
            display: flex;
            gap: 8px;
            justify-content: flex-end;
        }

        .action-btn {
            background: transparent;
            border: 1px solid #e5e7eb;
            color: #6b7280;
            width: 32px;
            height: 32px;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .action-btn:hover {
            background: #f9fafb;
            border-color: #d1d5db;
        }

        .action-btn.delete:hover {
            color: #dc2626;
            background: #fef2f2;
            border-color: #fecaca;
        }

        .empty-state {
            padding: 48px 24px;
            text-align: center;
            color: #6b7280;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            padding: 20px;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            width: 100%;
            max-width: 768px;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            padding: 24px 24px 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        .modal-title {
            font-size: 20px;
            font-weight: 600;
            color: #111827;
        }

        .modal-body {
            padding: 24px;
        }

        .photo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 24px;
        }

        .member-photo {
            width: 128px;
            height: 160px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #e5e7eb;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 16px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
            margin-bottom: 24px;
        }

        @media (min-width: 640px) {
            .info-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .info-item {
            font-size: 14px;
        }

        .info-item strong {
            color: #374151;
            display: block;
            margin-bottom: 4px;
        }

        .info-item span {
            color: #6b7280;
        }

        /* Edit Form */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .form-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #374151;
        }

        .form-input, .form-select {
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.2s;
        }

        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .modal-footer {
            padding: 16px 24px 24px;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: flex-end;
            gap: 12px;
        }

        /* Toast Notifications */
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 12px 20px;
            border-radius: 8px;
            color: white;
            font-size: 14px;
            font-weight: 500;
            display: none;
            align-items: center;
            gap: 8px;
            animation: slideIn 0.3s ease;
            z-index: 1001;
        }

        .toast-success {
            background: #10b981;
        }

        .toast-error {
            background: #ef4444;
        }

        .toast-icon {
            width: 20px;
            height: 20px;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Pagination Styles */
        .pagination {
            display: flex;
            justify-content: center;
            padding: 20px;
            gap: 8px;
        }

        .pagination-link {
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            color: #374151;
            text-decoration: none;
            transition: all 0.2s;
        }

        .pagination-link:hover {
            background: #f9fafb;
        }

        .pagination-link.active {
            background: #4f46e5;
            color: white;
            border-color: #4f46e5;
        }

        .pagination-link.disabled {
            color: #9ca3af;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="header-title">
                <h1>Ukurasa wa Usimamizi</h1>
                <p>Simamia rekodi za washarika</p>
            </div>
            <a href="{{ route('admin.logout') }}" class="logout-btn">
                <svg class="logout-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                Toka
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Search and Actions -->
        <div class="search-section">
            <form action="{{ route('admin.dashboard') }}" method="GET" class="search-container">
                <div class="search-box">
                    <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input 
                        type="text" 
                        name="search"
                        value="{{ request('search') }}"
                        class="search-input"
                        placeholder="Tafuta kwa jina, simu, mtaa..."
                    >
                </div>
                <div style="display: flex; gap: 8px;">
                    <button type="submit" class="btn-primary">Tafuta</button>
                    @if(request('search'))
                        <a href="{{ route('admin.dashboard') }}" class="btn-secondary">Ondoa</a>
                    @endif
                </div>
            </form>
        </div>

        <!-- Table -->
        <div class="table-container">
            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Jina</th>
                            <th>Jinsi</th>
                            <th>Simu</th>
                            <th>Mtaa</th>
                            <th>Kazi</th>
                            <th>Tarehe</th>
                            <th class="actions-cell">Vitendo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($members as $index => $member)
                        <tr>
                            <td>{{ $members->firstItem() + $index }}</td>
                            <td>{{ $member->jina }}</td>
                            <td>{{ $member->jinsi }}</td>
                            <td>{{ $member->simu }}</td>
                            <td>{{ $member->mtaa }}</td>
                            <td>{{ $member->kazi }}</td>
                            <td>{{ $member->created_at->format('d/m/Y') }}</td>
                            <td class="actions-cell">
                                <div class="actions-container">
                                    <button class="action-btn" onclick="handleView(@js($member))" title="Angalia">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </button>
                                    <button class="action-btn" onclick="handleEdit(@js($member))" title="Hariri">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </button>
                                    <button class="action-btn" onclick="downloadPDF(@js($member))" title="Pakua PDF">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg>
                                    </button>
                                    <button class="action-btn delete" onclick="handleDelete({{ $member->id }})" title="Futa">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"></path>
                                            <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="empty-state">Hakuna rekodi zilizopatikana</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            @if($members->hasPages())
            <div class="p-4">
                {{ $members->links() }}
            </div>
            @endif
        </div>
    </main>

    <!-- View Modal -->
    <div id="viewModal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Taarifa za Msharika</h2>
            </div>
            <div class="modal-body">
                <div id="viewPhoto" class="photo-container" style="display: none;">
                    <img id="memberPhoto" class="member-photo" alt="Member photo">
                </div>
                
                <div id="viewContent">
                    <!-- Content will be populated by JavaScript -->
                </div>
            </div>
            <div class="modal-footer">
                <button id="closeViewModal" class="btn-secondary">Funga</button>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Hariri Taarifa za Msharika</h2>
            </div>
            <div class="modal-body">
                <form id="editForm" class="form-grid">
                    @csrf
                    @method('PUT')
                    
                    <!-- Section A -->
                    <div class="form-group">
                        <label for="edit_jina" class="form-label">Jina la Msharika</label>
                        <input type="text" id="edit_jina" name="jina" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_jinsi" class="form-label">Jinsi</label>
                        <select id="edit_jinsi" name="jinsi" class="form-select" required>
                            <option value="">Chagua</option>
                            <option value="Me">Me</option>
                            <option value="Ke">Ke</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_tarehe_kuzaliwa" class="form-label">Tarehe ya Kuzaliwa</label>
                        <input type="date" id="edit_tarehe_kuzaliwa" name="tarehe_kuzaliwa" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_mahali_kuzaliwa" class="form-label">Mahali pa Kuzaliwa</label>
                        <input type="text" id="edit_mahali_kuzaliwa" name="mahali_kuzaliwa" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_hali_ndoa" class="form-label">Hali ya Ndoa</label>
                        <select id="edit_hali_ndoa" name="hali_ndoa" class="form-select" required>
                            <option value="">Chagua</option>
                            <option value="Umeoa">Umeoa</option>
                            <option value="Hujaoa">Hujaoa</option>
                            <option value="Umeolewa">Umeolewa</option>
                            <option value="Hujaolewa">Hujaolewa</option>
                            <option value="Mgane">Mgane</option>
                            <option value="Mjane">Mjane</option>
                            <option value="Talikiwa">Talikiwa</option>
                            <option value="Tengana">Tengana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_jina_mwenzi" class="form-label">Jina la Mwenzi</label>
                        <input type="text" id="edit_jina_mwenzi" name="jina_mwenzi" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_aina_ndoa" class="form-label">Aina ya Ndoa</label>
                        <select id="edit_aina_ndoa" name="aina_ndoa" class="form-select">
                            <option value="">Chagua</option>
                            <option value="Kikristo">Kikristo</option>
                            <option value="Siyo Kikristo">Siyo Kikristo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_tarehe_ndoa" class="form-label">Tarehe ya Ndoa</label>
                        <input type="date" id="edit_tarehe_ndoa" name="tarehe_ndoa" class="form-input">
                    </div>

                    <!-- Section B -->
                    <div class="form-group">
                        <label for="edit_simu" class="form-label">Namba ya Simu</label>
                        <input type="tel" id="edit_simu" name="simu" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_simu_mwenzi" class="form-label">Simu ya Mwenzi</label>
                        <input type="tel" id="edit_simu_mwenzi" name="simu_mwenzi" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_barua_pepe" class="form-label">Email</label>
                        <input type="email" id="edit_barua_pepe" name="barua_pepe" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_sanduku_barua" class="form-label">Sanduku la Barua</label>
                        <input type="text" id="edit_sanduku_barua" name="sanduku_barua" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_mtaa" class="form-label">Mtaa/Jumuiya</label>
                        <input type="text" id="edit_mtaa" name="mtaa" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_namba_nyumba" class="form-label">Namba ya Nyumba</label>
                        <input type="text" id="edit_namba_nyumba" name="namba_nyumba" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_jina_eneo" class="form-label">Eneo</label>
                        <input type="text" id="edit_jina_eneo" name="jina_eneo" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_block_no" class="form-label">Block No</label>
                        <input type="text" id="edit_block_no" name="block_no" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_jirani_jina" class="form-label">Jina la Jirani</label>
                        <input type="text" id="edit_jirani_jina" name="jirani_jina" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_jirani_simu" class="form-label">Simu ya Jirani</label>
                        <input type="tel" id="edit_jirani_simu" name="jirani_simu" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_mzee_kanisa" class="form-label">Mzee wa Kanisa</label>
                        <input type="text" id="edit_mzee_kanisa" name="mzee_kanisa" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_simu_mzee" class="form-label">Simu ya Mzee wa Kanisa</label>
                        <input type="tel" id="edit_simu_mzee" name="simu_mzee" class="form-input">
                    </div>

                    <!-- Section C -->
                    <div class="form-group">
                        <label for="edit_kazi" class="form-label">Kazi</label>
                        <input type="text" id="edit_kazi" name="kazi" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_mahali_kazi" class="form-label">Mahali pa Kazi</label>
                        <input type="text" id="edit_mahali_kazi" name="mahali_kazi" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_elimu" class="form-label">Elimu</label>
                        <input type="text" id="edit_elimu" name="elimu" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_ujuzi" class="form-label">Ujuzi</label>
                        <input type="text" id="edit_ujuzi" name="ujuzi" class="form-input">
                    </div>

                    <!-- Section D -->
                    <div class="form-group">
                        <label for="edit_batizwa" class="form-label">Umebatizwa?</label>
                        <select id="edit_batizwa" name="batizwa" class="form-select" required>
                            <option value="Ndiyo">Ndiyo</option>
                            <option value="Hapana">Hapana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_kipaimara" class="form-label">Umepata Kipaimara?</label>
                        <select id="edit_kipaimara" name="kipaimara" class="form-select">
                            <option value="">Chagua</option>
                            <option value="Ndiyo">Ndiyo</option>
                            <option value="Hapana">Hapana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_tarehe_kipaimara" class="form-label">Tarehe ya Kipaimara</label>
                        <input type="date" id="edit_tarehe_kipaimara" name="tarehe_kipaimara" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_meza_bwana" class="form-label">Unashiriki Meza ya Bwana?</label>
                        <select id="edit_meza_bwana" name="meza_bwana" class="form-select" required>
                            <option value="Ndiyo">Ndiyo</option>
                            <option value="Hapana">Hapana</option>
                        </select>
                    </div>

                    <!-- Section E -->
                    <div class="form-group">
                        <label for="edit_jumuiya" class="form-label">Unashiriki Jumuiya?</label>
                        <select id="edit_jumuiya" name="jumuiya" class="form-select">
                            <option value="">Chagua</option>
                            <option value="Ndiyo">Ndiyo</option>
                            <option value="Hapana">Hapana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_jina_jumuiya" class="form-label">Jina la Jumuiya</label>
                        <input type="text" id="edit_jina_jumuiya" name="jina_jumuiya" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_sababu" class="form-label">Sababu (kama huna jumuiya)</label>
                        <input type="text" id="edit_sababu" name="sababu" class="form-input">
                    </div>

                    <!-- Section F -->
                    <div class="form-group">
                        <label for="edit_ahadi_jengo" class="form-label">Ahadi ya Jengo</label>
                        <input type="number" id="edit_ahadi_jengo" name="ahadi_jengo" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_ahadi_uwakili" class="form-label">Ahadi ya Uwakili</label>
                        <input type="number" id="edit_ahadi_uwakili" name="ahadi_uwakili" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_ahadi_nyingine" class="form-label">Ahadi Nyingine</label>
                        <input type="number" id="edit_ahadi_nyingine" name="ahadi_nyingine" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_namba_ahadi" class="form-label">Una Namba ya Ahadi?</label>
                        <select id="edit_namba_ahadi" name="namba_ahadi" class="form-select">
                            <option value="">Chagua</option>
                            <option value="Ndiyo">Ndiyo</option>
                            <option value="Hapana">Hapana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_namba_ahadi_specific" class="form-label">Namba ya Ahadi</label>
                        <input type="text" id="edit_namba_ahadi_specific" name="namba_ahadi_specific" class="form-input">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="cancelEdit" class="btn-secondary">Ghairi</button>
                <button type="button" id="saveEdit" class="btn-primary">Hifadhi Mabadiliko</button>
            </div>
        </div>
    </div>

    <!-- Delete Form (Hidden) -->
    <form id="deleteForm" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <!-- Toast Notifications -->
    <div id="successToast" class="toast toast-success" style="display: {{ session('success') ? 'flex' : 'none' }}">
        <svg class="toast-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 13l4 4L19 7"></path>
        </svg>
        {{ session('success') }}
    </div>
    <div id="errorToast" class="toast toast-error" style="display: {{ session('error') ? 'flex' : 'none' }}">
        <svg class="toast-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        {{ session('error') }}
    </div>

    <!-- PDF Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>

    <script>
        // Modal and Action Handlers
function handleView(record) {
    // Helper function to extract date only (YYYY-MM-DD) from date string
    const extractDateOnly = (dateString) => {
        if (!dateString) return '';
        
        try {
            // Handle ISO date format (2016-04-17T00:00:00.000000Z)
            if (typeof dateString === 'string') {
                // Try to extract YYYY-MM-DD from ISO format
                const isoMatch = dateString.match(/^(\d{4}-\d{2}-\d{2})T/);
                if (isoMatch) {
                    return isoMatch[1]; // Returns "2016-04-17"
                }
                
                // Try to extract YYYY-MM-DD from any format
                const dateMatch = dateString.match(/(\d{4}-\d{2}-\d{2})/);
                if (dateMatch) {
                    return dateMatch[1]; // Returns "2016-04-17"
                }
                
                // Try to parse and format using Date object
                const date = new Date(dateString);
                if (!isNaN(date.getTime())) {
                    // Format as YYYY-MM-DD
                    const year = date.getFullYear();
                    const month = String(date.getMonth() + 1).padStart(2, '0');
                    const day = String(date.getDate()).padStart(2, '0');
                    return `${year}-${month}-${day}`;
                }
            }
        } catch (e) {
            console.error("Error parsing date:", e);
        }
        
        // Return original if parsing fails
        return dateString.toString();
    };
    
    // Helper to extract year only from date
    const extractYearOnly = (dateString) => {
        if (!dateString) return '';
        
        try {
            const date = new Date(dateString);
            if (!isNaN(date.getTime())) {
                return date.getFullYear().toString();
            }
        } catch (e) {
            // Fallback: try to extract year from string
            const yearMatch = dateString.match(/\b(\d{4})\b/);
            return yearMatch ? yearMatch[1] : dateString;
        }
        
        return dateString;
    };
    
    // Update photo if exists
    const photoContainer = document.getElementById('viewPhoto');
    const memberPhoto = document.getElementById('memberPhoto');
    if (record.photo) {
        memberPhoto.src = '/storage/' + record.photo;
        photoContainer.style.display = 'flex';
    } else {
        photoContainer.style.display = 'none';
    }
    
    // Helper to parse JSON safely
    const parseJson = (str) => {
        try { return JSON.parse(str) || []; } catch(e) { return []; }
    };

    const watoto = parseJson(record.watoto);
    const huduma = parseJson(record.huduma);
    const kwaya = parseJson(record.kwaya);
    const umoja = parseJson(record.umoja);

    // Update content
    document.getElementById('viewContent').innerHTML = `
        <div>
            <h3 class="section-title">A. Tarifa Binafsi</h3>
            <div class="info-grid">
                <div class="info-item"><strong>Jina:</strong> <span>${record.jina || 'N/A'}</span></div>
                <div class="info-item"><strong>Jinsi:</strong> <span>${record.jinsi || 'N/A'}</span></div>
                <div class="info-item"><strong>Tarehe ya Kuzaliwa:</strong> <span>${extractDateOnly(record.tarehe_kuzaliwa) || 'N/A'}</span></div>
                <div class="info-item"><strong>Mahali:</strong> <span>${record.mahali_kuzaliwa || 'N/A'}</span></div>
                <div class="info-item"><strong>Hali ya Ndoa:</strong> <span>${record.hali_ndoa || 'N/A'}</span></div>
                <div class="info-item"><strong>Mwenzi:</strong> <span>${record.jina_mwenzi || 'N/A'}</span></div>
                <div class="info-item"><strong>Aina ya Ndoa:</strong> <span>${record.aina_ndoa || 'N/A'}</span></div>
                <div class="info-item"><strong>Tarehe ya Ndoa:</strong> <span>${extractDateOnly(record.tarehe_ndoa) || 'N/A'}</span></div>
            </div>
            ${watoto.length > 0 ? `
                <div style="margin-top: 15px;">
                    <strong style="display: block; margin-bottom: 8px;">Watoto/Waumini wanao kutegemea:</strong>
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; font-size: 14px; color: #4b5563;">
                            <thead>
                                <tr style="background-color: #3b82f6; color: white;">
                                    <th style="padding: 8px 12px; text-align: left; border: 1px solid #e5e7eb;">#</th>
                                    <th style="padding: 8px 12px; text-align: left; border: 1px solid #e5e7eb;">Jina Kamili</th>
                                    <th style="padding: 8px 12px; text-align: left; border: 1px solid #e5e7eb;">Tarehe ya Kuzaliwa</th>
                                    <th style="padding: 8px 12px; text-align: left; border: 1px solid #e5e7eb;">Uhusiano</th>
                                </tr>
                            </thead>
                            <tbody>
                                ${watoto.map((m, index) => `
                                    <tr style="${index % 2 === 0 ? 'background-color: #f9fafb;' : 'background-color: white;'}">
                                        <td style="padding: 8px 12px; border: 1px solid #e5e7eb;">${index + 1}</td>
                                        <td style="padding: 8px 12px; border: 1px solid #e5e7eb;">${m.jina || 'N/A'}</td>
                                        <td style="padding: 8px 12px; border: 1px solid #e5e7eb;">${extractDateOnly(m.tarehe_kuzaliwa) || 'N/A'}</td>
                                        <td style="padding: 8px 12px; border: 1px solid #e5e7eb;">${m.uhusiano || 'N/A'}</td>
                                    </tr>
                                `).join('')}
                            </tbody>
                        </table>
                    </div>
                </div>
            ` : ''}
        </div>
        
        <div>
            <h3 class="section-title">B. Mawasiliano</h3>
            <div class="info-grid">
                <div class="info-item"><strong>Simu:</strong> <span>${record.simu || 'N/A'}</span></div>
                <div class="info-item"><strong>Simu ya Mwenzi:</strong> <span>${record.simu_mwenzi || 'N/A'}</span></div>
                <div class="info-item"><strong>Email:</strong> <span>${record.barua_pepe || 'N/A'}</span></div>
                <div class="info-item"><strong>Sanduku la Barua:</strong> <span>${record.sanduku_barua || 'N/A'}</span></div>
                <div class="info-item"><strong>Mtaa:</strong> <span>${record.mtaa || 'N/A'}</span></div>
                <div class="info-item"><strong>Eneo:</strong> <span>${record.jina_eneo || 'N/A'}</span></div>
                <div class="info-item"><strong>Namba ya Nyumba:</strong> <span>${record.namba_nyumba || 'N/A'}</span></div>
                <div class="info-item"><strong>Block No:</strong> <span>${record.block_no || 'N/A'}</span></div>
                <div class="info-item"><strong>Jirani:</strong> <span>${record.jirani_jina || 'N/A'} (${record.jirani_simu || 'N/A'})</span></div>
                <div class="info-item"><strong>Mzee wa Kanisa:</strong> <span>${record.mzee_kanisa || 'N/A'} (${record.simu_mzee || 'N/A'})</span></div>
            </div>
        </div>
        
        <div>
            <h3 class="section-title">C. Elimu na Kazi</h3>
            <div class="info-grid">
                <div class="info-item"><strong>Kazi:</strong> <span>${record.kazi || 'N/A'}</span></div>
                <div class="info-item"><strong>Mahali pa Kazi:</strong> <span>${record.mahali_kazi || 'N/A'}</span></div>
                <div class="info-item"><strong>Elimu:</strong> <span>${record.elimu || 'N/A'}</span></div>
                <div class="info-item"><strong>Ujuzi:</strong> <span>${record.ujuzi || 'N/A'}</span></div>
            </div>
        </div>
        
        <div>
            <h3 class="section-title">D. Huduma za Kiroho</h3>
            <div class="info-grid">
                <div class="info-item"><strong>Batizo:</strong> <span>${record.batizwa || 'N/A'}</span></div>
                <div class="info-item"><strong>Kipaimara:</strong> <span>${record.kipaimara || 'N/A'} ${record.tarehe_kipaimara ? `(${extractYearOnly(record.tarehe_kipaimara)})` : ''}</span></div>
                <div class="info-item"><strong>Meza ya Bwana:</strong> <span>${record.meza_bwana || 'N/A'}</span></div>
            </div>
        </div>

        <div>
            <h3 class="section-title">E. Ushiriki</h3>
            <div class="info-grid">
                <div class="info-item"><strong>Jumuiya:</strong> <span>${record.jumuiya || 'N/A'} (${record.jina_jumuiya || 'N/A'})</span></div>
                <div class="info-item"><strong>Sababu:</strong> <span>${record.sababu || 'N/A'}</span></div>
            </div>
            <div style="margin-top: 10px; font-size: 14px; color: #6b7280;">
                <strong>Huduma:</strong> ${huduma.join(', ') || 'N/A'}<br>
                <strong>Kwaya:</strong> ${kwaya.join(', ') || 'N/A'}<br>
                <strong>Umoja:</strong> ${umoja.join(', ') || 'N/A'}
            </div>
        </div>

        <div>
            <h3 class="section-title">F. Ahadi</h3>
            <div class="info-grid">
                <div class="info-item"><strong>Jengo:</strong> <span>${record.ahadi_jengo || '0'}</span></div>
                <div class="info-item"><strong>Uwakili:</strong> <span>${record.ahadi_uwakili || '0'}</span></div>
                <div class="info-item"><strong>Nyingine:</strong> <span>${record.ahadi_nyingine || '0'}</span></div>
                <div class="info-item"><strong>Namba ya Ahadi:</strong> <span>${record.namba_ahadi || 'N/A'} (${record.namba_ahadi_specific || 'N/A'})</span></div>
            </div>
        </div>
    `;
    
    document.getElementById('viewModal').style.display = 'flex';
}

        function handleEdit(record) {
            // Fill form
            const fields = [
                'jina', 'jinsi', 'tarehe_kuzaliwa', 'mahali_kuzaliwa', 'hali_ndoa', 'jina_mwenzi', 'aina_ndoa', 'tarehe_ndoa',
                'simu', 'simu_mwenzi', 'barua_pepe', 'sanduku_barua', 'mtaa', 'namba_nyumba', 'jina_eneo', 'block_no', 'jirani_jina', 'jirani_simu', 'mzee_kanisa', 'simu_mzee',
                'kazi', 'mahali_kazi', 'elimu', 'ujuzi',
                'batizwa', 'kipaimara', 'tarehe_kipaimara', 'meza_bwana',
                'jumuiya', 'jina_jumuiya', 'sababu',
                'ahadi_jengo', 'ahadi_uwakili', 'ahadi_nyingine', 'namba_ahadi', 'namba_ahadi_specific'
            ];

            fields.forEach(field => {
                const el = document.getElementById('edit_' + field);
                if (el) el.value = record[field] || '';
            });
            
            // Store the record ID for submission
            const form = document.getElementById('editForm');
            form.action = `/admin/member/${record.id}`;
            
            document.getElementById('editModal').style.display = 'flex';
        }

        function submitEdit() {
            const form = document.getElementById('editForm');
            const formData = new FormData(form);
            
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-HTTP-Method-Override': 'PUT'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showToast(data.message, 'success');
                    document.getElementById('editModal').style.display = 'none';
                    setTimeout(() => location.reload(), 1000);
                } else {
                    showToast('Hitilafu imetokea.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('Hitilafu ya mtandao.', 'error');
            });
        }

        function handleDelete(id) {
            if (!confirm('Je, una uhakika unataka kufuta rekodi hii?')) return;
            
            fetch(`/admin/member/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-HTTP-Method-Override': 'DELETE'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showToast(data.message, 'success');
                    setTimeout(() => location.reload(), 1000);
                } else {
                    showToast('Hitilafu imetokea.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('Hitilafu ya mtandao.', 'error');
            });
        }


async function downloadPDF(record) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    
    // Define colors
    const primaryColor = [41, 128, 185]; // Blue
    const secondaryColor = [52, 152, 219]; // Light Blue
    const accentColor = [231, 76, 60]; // Red
    const lightGray = [241, 242, 246];
    
    // Helper to parse JSON
    const parseJson = (str) => {
        try { return JSON.parse(str) || []; } catch(e) { return []; }
    };
    
    // Helper to format date to just year
    const getYearFromDate = (dateString) => {
        if (!dateString) return '';
        try {
            return new Date(dateString).getFullYear();
        } catch (e) {
            // Fallback: extract first 4 digits
            const yearMatch = dateString.toString().match(/^\d{4}/);
            return yearMatch ? yearMatch[0] : '';
        }
    };
    
    // Helper function to extract date only (YYYY-MM-DD) from date string
    const extractDateOnly = (dateString) => {
        if (!dateString) return '';
        
        try {
            // Handle ISO date format (2016-04-17T00:00:00.000000Z)
            if (typeof dateString === 'string') {
                // Try to extract YYYY-MM-DD from ISO format
                const isoMatch = dateString.match(/^(\d{4}-\d{2}-\d{2})T/);
                if (isoMatch) {
                    return isoMatch[1]; // Returns "2016-04-17"
                }
                
                // Try to extract YYYY-MM-DD from any format
                const dateMatch = dateString.match(/(\d{4}-\d{2}-\d{2})/);
                if (dateMatch) {
                    return dateMatch[1]; // Returns "2016-04-17"
                }
                
                // Try to parse and format using Date object
                const date = new Date(dateString);
                if (!isNaN(date.getTime())) {
                    // Format as YYYY-MM-DD
                    const year = date.getFullYear();
                    const month = String(date.getMonth() + 1).padStart(2, '0');
                    const day = String(date.getDate()).padStart(2, '0');
                    return `${year}-${month}-${day}`;
                }
            }
        } catch (e) {
            console.error("Error parsing date:", e);
        }
        
        // Return original if parsing fails
        return dateString.toString();
    };
    
    // Function to check and add new page if needed
    const checkPageBreak = (requiredSpace) => {
        if (yPos + requiredSpace > 280) { // Leave 10mm margin at bottom
            doc.addPage();
            yPos = 20;
            return true;
        }
        return false;
    };
    
    // Function to add section with background
    const addSection = (title) => {
        checkPageBreak(15); // Check if we need new page for section
        
        doc.setFillColor(...primaryColor);
        doc.roundedRect(10, yPos - 5, 190, 7, 2, 2, 'F');
        doc.setTextColor(255, 255, 255);
        doc.setFont('helvetica', 'bold');
        doc.setFontSize(12);
        doc.text(title, 15, yPos);
        doc.setTextColor(0, 0, 0);
        yPos += 10;
    };
    
    // Function to add labeled text with automatic line breaks for long text
    const addLabeledText = (label, value, indent = 0) => {
        if (!value && value !== 0) return; // Skip if no value (but allow 0)
        
        checkPageBreak(6); // Check if we need new page for this line
        
        const xPos = 15 + indent;
        doc.setFontSize(10);
        doc.setFont('helvetica', 'bold');
        doc.text(`${label}:`, xPos, yPos);
        doc.setFont('helvetica', 'normal');
        
        // Format date fields to show only date part (YYYY-MM-DD)
        let displayValue = value.toString();
        
        // Check if this is a date field
        const dateFields = [
            'tarehe_kuzaliwa',
            'tarehe_ndoa',
            'tarehe_kipaimara',
            'tarehe'
        ];
        
        // Extract field name from label (approximate)
        const fieldName = label.toLowerCase().replace(/[^a-z]/g, '_');
        
        // If it's a date field, extract only the date part (YYYY-MM-DD)
        if (dateFields.some(dateField => fieldName.includes(dateField) || label.toLowerCase().includes('tarehe'))) {
            displayValue = extractDateOnly(value);
        }
        
        // Wrap long text - use smaller width for long labels
        const maxWidth = 165 - xPos; // Reduced from 180 to prevent overflow
        const lines = doc.splitTextToSize(displayValue, maxWidth);
        
        if (lines.length > 1) {
            // First line on same line as label
            doc.text(lines[0], xPos + 40, yPos);
            yPos += 6;
            
            // Subsequent lines indented
            for (let i = 1; i < lines.length; i++) {
                checkPageBreak(6);
                doc.text(lines[i], xPos + 10, yPos);
                yPos += 6;
            }
        } else {
            // Single line - add spacing between label and value
            doc.text(displayValue, xPos + 40, yPos);
            yPos += 6;
        }
    };
    
    // Header with colored background
    doc.setFillColor(...primaryColor);
    doc.rect(0, 0, 210, 40, 'F');
    
    // Header text
    doc.setFontSize(16);
    doc.setFont('helvetica', 'bold');
    doc.setTextColor(255, 255, 255);
    doc.text('K.K.K.T DAYOSISI YA MASHARIKI NA PWANI', 105, 15, { align: 'center' });
    doc.setFontSize(12);
    doc.text('JIMBO LA KUSINI - USHARIKA WA MJI MWEMA', 105, 23, { align: 'center' });
    
    let yPos = 50;
    
    // Photo with border - MOVED LOWER
    if (record.photo) {
        try {
            const imgData = await getBase64Image('/storage/' + record.photo);
            // Add border around photo
            doc.setDrawColor(200, 200, 200);
            doc.setLineWidth(0.5);
            doc.roundedRect(150, 52, 45, 55, 3, 3);
            doc.addImage(imgData, 'JPEG', 152, 54, 41, 51);
        } catch (e) {
            console.error("Could not load image", e);
        }
    }
    
    // ========== SECTION A: TARIFA BINAFSI ==========
    addSection('A. TARIFA BINAFSI');
    
    // Use addLabeledText for fields that might have long values
    addLabeledText('Jina la Msharika', record.jina);
    addLabeledText('Jinsi', record.jinsi);
    addLabeledText('Tarehe ya Kuzaliwa', record.tarehe_kuzaliwa);
    addLabeledText('Mahali Kuzaliwa', record.mahali_kuzaliwa);
    addLabeledText('Hali ya Ndoa', record.hali_ndoa);
    
    if (record.jina_mwenzi) {
        addLabeledText('Jina la Mwenzi', record.jina_mwenzi);
    }
    if (record.aina_ndoa) {
        addLabeledText('Aina ya Ndoa', record.aina_ndoa);
    }
    if (record.tarehe_ndoa) {
        addLabeledText('Tarehe ya Ndoa', record.tarehe_ndoa);
    }
    
    // Children Section - Clean and Simple
    const watoto = parseJson(record.watoto);
    if (watoto.length > 0) {
        checkPageBreak(15);
        
        // Section header
        yPos += 5;
        doc.setFont('helvetica', 'bold');
        doc.setFontSize(12);
        doc.setTextColor(...primaryColor);
        doc.text('WATOTO/WADEPENDANTS:', 15, yPos);
        yPos += 8;
        
        // Create a mini-table
        const colHeaders = ['SN', 'JINA', 'TAREHE', 'UHUSIANO'];
        const colX = [20, 45, 120, 160]; // X positions for columns
        
        // Table header with background
        doc.setFillColor(...primaryColor);
        doc.rect(15, yPos - 5, 180, 7, 'F');
        doc.setTextColor(255, 255, 255);
        doc.setFont('helvetica', 'bold');
        
        colHeaders.forEach((header, i) => {
            doc.text(header, colX[i], yPos);
        });
        
        yPos += 8;
        doc.setTextColor(0, 0, 0);
        doc.setFont('helvetica', 'normal');
        doc.setFontSize(10);
        
        // Table rows
        watoto.forEach((mtoto, index) => {
            checkPageBreak(7);
            
            // Alternate row color
            if (index % 2 === 0) {
                doc.setFillColor(...lightGray);
                doc.rect(15, yPos - 4, 180, 6, 'F');
            }
            
            // Format date if available
            let displayDate = mtoto.tarehe_kuzaliwa || '';
            if (displayDate) {
                displayDate = extractDateOnly(displayDate);
            }
            
            // Write row data
            doc.text(`${index + 1}.`, colX[0], yPos);
            doc.text(mtoto.jina || '-', colX[1], yPos);
            doc.text(displayDate, colX[2], yPos);
            doc.text(mtoto.uhusiano || '-', colX[3], yPos);
            
            yPos += 7;
        });
        
        yPos += 5;
    }
    
    yPos += 10;
    
    // ========== SECTION B: MAWASILIANO NA MAKAZI ==========
    addSection('B. MAWASILIANO NA MAKAZI');
    
    // Use addLabeledText for better spacing on long values
    addLabeledText('Simu', record.simu);
    if (record.simu_mwenzi) {
        addLabeledText('Simu ya Mwenzi', record.simu_mwenzi);
    }
    addLabeledText('Email', record.barua_pepe);
    if (record.sanduku_barua) {
        addLabeledText('Sanduku la Barua', record.sanduku_barua);
    }
    
    yPos += 3;
    
    // Address information with subheading
    checkPageBreak(10);
    doc.setFont('helvetica', 'bold');
    doc.setTextColor(...primaryColor);
    doc.text('MAKAZI:', 15, yPos);
    yPos += 6;
    doc.setTextColor(0, 0, 0);
    doc.setFont('helvetica', 'normal');
    
    // Use addLabeledText for address fields that might be long
    addLabeledText('Mtaa/Jumuiya', record.mtaa);
    addLabeledText('Eneo', record.jina_eneo);
    addLabeledText('Namba ya Nyumba', record.namba_nyumba);
    if (record.block_no) {
        addLabeledText('Block No', record.block_no);
    }
    
    // Contact references with proper spacing
    if (record.jirani_jina) {
        const jiraniInfo = `${record.jirani_jina} (${record.jirani_simu || ''})`;
        addLabeledText('Jirani', jiraniInfo);
    }
    if (record.mzee_kanisa) {
        const mzeeInfo = `${record.mzee_kanisa} (${record.simu_mzee || ''})`;
        addLabeledText('Mzee wa Kanisa', mzeeInfo);
    }
    
    // Add horizontal line separator
    checkPageBreak(5);
    doc.setDrawColor(200, 200, 200);
    doc.setLineWidth(0.3);
    doc.line(15, yPos, 195, yPos);
    yPos += 10;
    
    // ========== SECTION C: ELIMU NA KAZI YAKO ==========
    addSection('C. ELIMU NA KAZI YAKO');
    
    addLabeledText('Kazi', record.kazi);
    addLabeledText('Mahali pa Kazi', record.mahali_kazi);
    addLabeledText('Elimu', record.elimu);
    addLabeledText('Ujuzi', record.ujuzi);
    
    yPos += 10;
    
    // ========== SECTION D: HUDUMA ZA KIROHO ==========
    addSection('D. HUDUMA ZA KIROHO');
    
    addLabeledText('Umebatizwa', record.batizwa);
    
    // Kipaimara with Mwaka on the same line
    checkPageBreak(12); // Check space for both Kipaimara and Meza ya Bwana
    
    // Start Kipaimara on current line
    doc.setFont('helvetica', 'bold');
    doc.text('Kipaimara:', 15, yPos);
    doc.setFont('helvetica', 'normal');
    
    // Handle kipaimara value (might be long)
    const kipaimaraValue = record.kipaimara || 'N/A';
    const kipaimaraLines = doc.splitTextToSize(kipaimaraValue, 70);
    
    if (kipaimaraLines.length > 1) {
        // If kipaimara value is long (multiple lines), put Mwaka on next line
        doc.text(kipaimaraLines[0], 45, yPos);
        yPos += 6;
        
        // Add remaining kipaimara lines
        for (let i = 1; i < kipaimaraLines.length; i++) {
            checkPageBreak(6);
            doc.text(kipaimaraLines[i], 25, yPos);
            yPos += 6;
        }
        
        // Now add Mwaka on its own line
        if (record.tarehe_kipaimara) {
            const year = getYearFromDate(record.tarehe_kipaimara);
            if (year) {
                checkPageBreak(6);
                doc.setFont('helvetica', 'bold');
                doc.text('Mwaka:', 15, yPos);
                doc.setFont('helvetica', 'normal');
                doc.text(year.toString(), 45, yPos);
                yPos += 6;
            }
        }
    } else {
        // Kipaimara is short (single line) - put value and Mwaka on same line
        doc.text(kipaimaraValue, 45, yPos);
        
        // Add Mwaka on the right side of the same line
        if (record.tarehe_kipaimara) {
            const year = getYearFromDate(record.tarehe_kipaimara);
            if (year) {
                doc.setFont('helvetica', 'bold');
                doc.text('Mwaka:', 110, yPos);
                doc.setFont('helvetica', 'normal');
                doc.text(year.toString(), 140, yPos);
            }
        }
        yPos += 6;
    }
    
    // Meza ya Bwana on NEXT line
    checkPageBreak(6); // Ensure space for Meza ya Bwana
    doc.setFont('helvetica', 'bold');
    doc.text('Meza ya Bwana:', 15, yPos);
    doc.setFont('helvetica', 'normal');
    doc.text(record.meza_bwana || 'N/A', 55, yPos);
    yPos += 6;
    
    yPos += 3; // Extra spacing after section
    
    // ========== SECTION E: USHIRIKI ==========
    addSection('E. USHIRIKI');
    
    const jumuiyaInfo = `${record.jumuiya || 'N/A'} (${record.jina_jumuiya || 'N/A'})`;
    addLabeledText('Jumuiya', jumuiyaInfo);
    
    if (record.sababu) {
        addLabeledText('Sababu', record.sababu);
    }
    
    // Display arrays with proper formatting and page breaks
    const displayArraySection = (title, array) => {
        if (array.length > 0) {
            checkPageBreak(8);
            yPos += 3;
            doc.setFont('helvetica', 'bold');
            doc.setTextColor(...primaryColor);
            doc.text(`${title}:`, 15, yPos);
            yPos += 6;
            doc.setTextColor(0, 0, 0);
            doc.setFont('helvetica', 'normal');
            
            // Display as comma-separated with wrapping
            const text = array.join(', ');
            const lines = doc.splitTextToSize(text, 170);
            
            lines.forEach(line => {
                checkPageBreak(6);
                doc.text(line, 20, yPos);
                yPos += 6;
            });
        }
    };
    
    displayArraySection('Huduma', parseJson(record.huduma));
    displayArraySection('Kwaya', parseJson(record.kwaya));
    displayArraySection('Umoja', parseJson(record.umoja));
    
    yPos += 10;
    
    // ========== SECTION F: AHADI ==========
    addSection('F. AHADI');
    
    // Function to add amounts with proper formatting
    const addAmount = (label, value) => {
        checkPageBreak(6);
        doc.setFont('helvetica', 'bold');
        doc.text(`${label}:`, 15, yPos);
        doc.setFont('helvetica', 'normal');
        doc.text(`${value || '0'}`, 60, yPos);
        yPos += 6;
    };
    
    addAmount('Ahadi ya Jengo', record.ahadi_jengo);
    addAmount('Ahadi ya Uwakili', record.ahadi_uwakili);
    addAmount('Ahadi Nyingine', record.ahadi_nyingine);
    
    if (record.namba_ahadi) {
        const ahadiInfo = `${record.namba_ahadi} (${record.namba_ahadi_specific || ''})`;
        addLabeledText('Namba ya Ahadi', ahadiInfo);
    }
    
    // Add footer to all pages (WATERMARK REMOVED)
    const totalPages = doc.internal.getNumberOfPages();
    for (let i = 1; i <= totalPages; i++) {
        doc.setPage(i);
        
        // Footer line
        doc.setDrawColor(200, 200, 200);
        doc.setLineWidth(0.5);
        doc.line(15, 280, 195, 280);
        
        // Page number
        doc.setFontSize(8);
        doc.setTextColor(150, 150, 150);
        doc.text(`Ukurasa ${i} wa ${totalPages}`, 105, 288, { align: 'center' });
        
        // Generated date
        const now = new Date();
        const dateStr = now.toLocaleDateString('sw-TZ');
        const timeStr = now.toLocaleTimeString('sw-TZ', { hour: '2-digit', minute: '2-digit' });
        doc.text(`Imetengenezwa: ${dateStr} ${timeStr}`, 15, 285);
    }
    
    // Save with timestamp
    const timestamp = new Date().toISOString().split('T')[0];
    const filename = `${record.jina?.replace(/\s+/g, '_') || 'member'}_${record.id}_${timestamp}.pdf`;
    doc.save(filename);
    
    showToast('PDF imepakuliwa kwa mafanikio.', 'success');
}

        function getBase64Image(url) {
            return new Promise((resolve, reject) => {
                var img = new Image();
                img.setAttribute("crossOrigin", "anonymous");
                img.onload = () => {
                    var canvas = document.createElement("canvas");
                    canvas.width = img.width;
                    canvas.height = img.height;
                    var ctx = canvas.getContext("2d");
                    ctx.drawImage(img, 0, 0);
                    var dataURL = canvas.toDataURL("image/jpeg");
                    resolve(dataURL);
                };
                img.onerror = error => reject(error);
                img.src = url;
            });
        }

        function showToast(message, type) {
            const toast = type === 'success' 
                ? document.getElementById('successToast')
                : document.getElementById('errorToast');
            
            toast.textContent = message;
            toast.style.display = 'flex';
            
            setTimeout(() => {
                toast.style.display = 'none';
            }, 3000);
        }

        // Close modals on outside click
        document.querySelectorAll('.modal-overlay').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.style.display = 'none';
                }
            });
        });

        document.getElementById('closeViewModal').addEventListener('click', () => {
            document.getElementById('viewModal').style.display = 'none';
        });
        
        document.getElementById('cancelEdit').addEventListener('click', () => {
            document.getElementById('editModal').style.display = 'none';
        });

        // Bind save button to form submit
        document.getElementById('saveEdit').addEventListener('click', submitEdit);

        // Auto-hide toast if present on load
        setTimeout(() => {
            const successToast = document.getElementById('successToast');
            const errorToast = document.getElementById('errorToast');
            if (successToast) successToast.style.display = 'none';
            if (errorToast) errorToast.style.display = 'none';
        }, 3000);
    </script>
</body>
</html>
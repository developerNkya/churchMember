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
                        <label for="edit_simu" class="form-label">Namba ya Simu</label>
                        <input type="tel" id="edit_simu" name="simu" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_barua_pepe" class="form-label">Email</label>
                        <input type="email" id="edit_barua_pepe" name="barua_pepe" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_mtaa" class="form-label">Mtaa/Jumuiya</label>
                        <input type="text" id="edit_mtaa" name="mtaa" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_jina_eneo" class="form-label">Eneo</label>
                        <input type="text" id="edit_jina_eneo" name="jina_eneo" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_kazi" class="form-label">Kazi</label>
                        <input type="text" id="edit_kazi" name="kazi" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_mahali_kazi" class="form-label">Mahali pa Kazi</label>
                        <input type="text" id="edit_mahali_kazi" name="mahali_kazi" class="form-input">
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
            // Update photo if exists
            const photoContainer = document.getElementById('viewPhoto');
            const memberPhoto = document.getElementById('memberPhoto');
            if (record.photo) {
                memberPhoto.src = '/storage/' + record.photo;
                photoContainer.style.display = 'flex';
            } else {
                photoContainer.style.display = 'none';
            }
            
            // Update content
            document.getElementById('viewContent').innerHTML = `
                <div>
                    <h3 class="section-title">A. Tarifa Binafsi</h3>
                    <div class="info-grid">
                        <div class="info-item"><strong>Jina:</strong> <span>${record.jina || 'N/A'}</span></div>
                        <div class="info-item"><strong>Jinsi:</strong> <span>${record.jinsi || 'N/A'}</span></div>
                        <div class="info-item"><strong>Tarehe ya Kuzaliwa:</strong> <span>${record.tarehe_kuzaliwa || 'N/A'}</span></div>
                        <div class="info-item"><strong>Mahali:</strong> <span>${record.mahali_kuzaliwa || 'N/A'}</span></div>
                        <div class="info-item"><strong>Hali ya Ndoa:</strong> <span>${record.hali_ndoa || 'N/A'}</span></div>
                        <div class="info-item"><strong>Mwenzi:</strong> <span>${record.jina_mwenzi || 'N/A'}</span></div>
                    </div>
                </div>
                
                <div>
                    <h3 class="section-title">B. Mawasiliano</h3>
                    <div class="info-grid">
                        <div class="info-item"><strong>Simu:</strong> <span>${record.simu || 'N/A'}</span></div>
                        <div class="info-item"><strong>Email:</strong> <span>${record.barua_pepe || 'N/A'}</span></div>
                        <div class="info-item"><strong>Mtaa:</strong> <span>${record.mtaa || 'N/A'}</span></div>
                        <div class="info-item"><strong>Eneo:</strong> <span>${record.jina_eneo || 'N/A'}</span></div>
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
                        <div class="info-item"><strong>Kipaimara:</strong> <span>${record.kipaimara || 'N/A'}</span></div>
                        <div class="info-item"><strong>Meza ya Bwana:</strong> <span>${record.meza_bwana || 'N/A'}</span></div>
                    </div>
                </div>
            `;
            
            document.getElementById('viewModal').style.display = 'flex';
        }

        function handleEdit(record) {
            // Fill form
            document.getElementById('edit_jina').value = record.jina || '';
            document.getElementById('edit_jinsi').value = record.jinsi || '';
            document.getElementById('edit_simu').value = record.simu || '';
            document.getElementById('edit_barua_pepe').value = record.barua_pepe || '';
            document.getElementById('edit_mtaa').value = record.mtaa || '';
            document.getElementById('edit_jina_eneo').value = record.jina_eneo || '';
            document.getElementById('edit_kazi').value = record.kazi || '';
            document.getElementById('edit_mahali_kazi').value = record.mahali_kazi || '';
            
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
            
            // Header
            doc.setFontSize(16);
            doc.setFont('helvetica', 'bold');
            doc.text('K.K.K.T DAYOSISI YA MASHARIKI NA PWANI', 105, 15, { align: 'center' });
            doc.setFontSize(12);
            doc.text('JIMBO LA KUSINI - USHARIKA WA MJI MWEMA', 105, 22, { align: 'center' });
            
            let yPos = 35;

            // Image
            if (record.photo) {
                try {
                    const imgData = await getBase64Image('/storage/' + record.photo);
                    doc.addImage(imgData, 'JPEG', 160, 30, 35, 43.75);
                } catch (e) {
                    console.error("Could not load image", e);
                }
            }
            
            // Section A
            doc.setFontSize(14);
            doc.setFont('helvetica', 'bold');
            doc.text('A. TARIFA BINAFSI', 15, yPos);
            yPos += 8;
            
            doc.setFontSize(10);
            doc.setFont('helvetica', 'normal');
            doc.text(`Jina la Msharika: ${record.jina || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Jinsi: ${record.jinsi || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Tarehe ya Kuzaliwa: ${record.tarehe_kuzaliwa || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Mahali Ulipozaliwa: ${record.mahali_kuzaliwa || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Hali ya Ndoa: ${record.hali_ndoa || 'N/A'}`, 15, yPos);
            yPos += 6;
            
            if (record.jina_mwenzi) {
                doc.text(`Jina la Mwenzi: ${record.jina_mwenzi}`, 15, yPos);
                yPos += 6;
            }
            
            yPos += 3;
            
            // Section B
            doc.setFont('helvetica', 'bold');
            doc.text('B. MAWASILIANO NA MAKAZI', 15, yPos);
            yPos += 8;
            
            doc.setFont('helvetica', 'normal');
            doc.text(`Simu: ${record.simu || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Email: ${record.barua_pepe || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Mtaa/Jumuiya: ${record.mtaa || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Eneo: ${record.jina_eneo || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Namba ya Nyumba: ${record.namba_nyumba || 'N/A'}`, 15, yPos);
            yPos += 9;
            
            // Section C
            doc.setFont('helvetica', 'bold');
            doc.text('C. ELIMU NA KAZI YAKO', 15, yPos);
            yPos += 8;
            
            doc.setFont('helvetica', 'normal');
            doc.text(`Kazi: ${record.kazi || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Mahali pa Kazi: ${record.mahali_kazi || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Elimu: ${record.elimu || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Ujuzi: ${record.ujuzi || 'N/A'}`, 15, yPos);
            yPos += 9;
            
            // Section D
            doc.setFont('helvetica', 'bold');
            doc.text('D. HUDUMA ZA KIROHO', 15, yPos);
            yPos += 8;
            
            doc.setFont('helvetica', 'normal');
            doc.text(`Umebatizwa: ${record.batizwa || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Kipaimara: ${record.kipaimara || 'N/A'}`, 15, yPos);
            yPos += 6;
            doc.text(`Meza ya Bwana: ${record.meza_bwana || 'N/A'}`, 15, yPos);
            
            // Footer
            doc.setFontSize(8);
            doc.text(`Tarehe ya Kujaza: ${new Date(record.created_at || Date.now()).toLocaleDateString('sw-TZ')}`, 15, 285);
            
            doc.save(`${record.jina?.replace(/\s+/g, '_') || 'member'}_${record.id}.pdf`);
            showToast('PDF imepakuliwa.', 'success');
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
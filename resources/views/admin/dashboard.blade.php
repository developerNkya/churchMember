<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
            overflow-x: hidden;
        }

        /* Header Styles */
        .header {
            background: white;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }

        .header-title h1 {
            font-size: 20px;
            font-weight: 700;
            color: #111827;
            line-height: 1.2;
        }

        .header-title p {
            font-size: 13px;
            color: #6b7280;
            margin-top: 2px;
        }

        .logout-btn {
            background: transparent;
            border: 1px solid #d1d5db;
            color: #374151;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s;
            text-decoration: none;
            white-space: nowrap;
        }

        .logout-btn:hover {
            background: #f9fafb;
            border-color: #9ca3af;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 16px;
        }

        /* Search and Actions */
        .search-section {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 16px;
            margin-bottom: 20px;
        }

        .search-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
            width: 100%;
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
            width: 100%;
        }

        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            width: 18px;
            height: 18px;
            pointer-events: none;
        }

        .search-input {
            width: 100%;
            padding: 10px 12px 10px 38px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.2s;
            -webkit-appearance: none;
            appearance: none;
        }

        .search-input:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .actions-row {
            display: flex;
            gap: 8px;
            width: 100%;
        }

        @media (min-width: 768px) {
            .actions-row {
                width: auto;
            }
        }

        .btn-primary {
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 10px 16px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
            white-space: nowrap;
            flex: 1;
            text-align: center;
        }

        @media (min-width: 768px) {
            .btn-primary {
                flex: none;
            }
        }

        .btn-primary:hover {
            background: #4338ca;
        }

        .btn-secondary {
            background: transparent;
            border: 1px solid #d1d5db;
            color: #374151;
            padding: 10px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            white-space: nowrap;
            flex: 1;
        }

        @media (min-width: 768px) {
            .btn-secondary {
                flex: none;
            }
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
            position: relative;
        }

        .table-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        .data-table thead {
            background: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
        }

        .data-table th {
            padding: 12px 16px;
            text-align: left;
            font-size: 11px;
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
            padding: 14px 16px;
            font-size: 14px;
            color: #374151;
            white-space: nowrap;
        }

        .data-table td:first-child {
            color: #6b7280;
            font-weight: 500;
        }

        /* Mobile-friendly table cells */
        @media (max-width: 640px) {
            .data-table th:nth-child(6),
            .data-table td:nth-child(6),
            .data-table th:nth-child(7),
            .data-table td:nth-child(7) {
                display: none;
            }
        }

        .actions-cell {
            text-align: right;
            position: sticky;
            right: 0;
            background: white;
        }

        .actions-container {
            display: flex;
            gap: 6px;
            justify-content: flex-end;
        }

        @media (max-width: 480px) {
            .actions-container {
                gap: 4px;
            }
        }

        .action-btn {
            background: transparent;
            border: 1px solid #e5e7eb;
            color: #6b7280;
            width: 34px;
            height: 34px;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            flex-shrink: 0;
        }

        @media (max-width: 480px) {
            .action-btn {
                width: 32px;
                height: 32px;
            }
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
            padding: 40px 20px;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }

        /* Modal Styles - Updated for Mobile */
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
            padding: 16px;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            width: 100%;
            max-width: 95vw;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            animation: modalSlideIn 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        @keyframes modalSlideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @media (min-width: 768px) {
            .modal-content {
                max-width: 768px;
                max-height: 85vh;
            }
        }

        .modal-header {
            padding: 20px 20px 16px;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
            border-radius: 12px 12px 0 0;
        }

        .modal-title {
            font-size: 18px;
            font-weight: 600;
            color: #111827;
            line-height: 1.3;
        }

        .modal-body {
            padding: 20px;
            flex: 1;
            overflow-y: auto;
        }

        @media (max-width: 640px) {
            .modal-body {
                padding: 16px;
            }
        }

        .photo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .member-photo {
            width: 100px;
            height: 125px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #e5e7eb;
        }

        @media (max-width: 640px) {
            .member-photo {
                width: 90px;
                height: 112px;
            }
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 16px;
            padding-bottom: 8px;
            border-bottom: 2px solid #e5e7eb;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
            margin-bottom: 20px;
        }

        @media (min-width: 480px) {
            .info-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 768px) {
            .info-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .info-item {
            font-size: 14px;
        }

        .info-item strong {
            color: #374151;
            display: block;
            margin-bottom: 4px;
            font-weight: 500;
        }

        .info-item span {
            color: #6b7280;
            word-break: break-word;
        }

        /* Edit Form - Enhanced Mobile Responsiveness */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .form-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Make full-width items on mobile */
        @media (max-width: 639px) {
            .form-group {
                grid-column: span 1 !important;
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
            width: 100%;
            -webkit-appearance: none;
            appearance: none;
        }

        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        /* Better select styling for mobile */
        .form-select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236b7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
            padding-right: 36px;
        }

        .modal-footer {
            padding: 16px 20px 20px;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            position: sticky;
            bottom: 0;
            background: white;
            z-index: 10;
            border-radius: 0 0 12px 12px;
        }

        @media (max-width: 640px) {
            .modal-footer {
                flex-direction: column;
                gap: 8px;
            }
            
            .modal-footer .btn-primary,
            .modal-footer .btn-secondary {
                width: 100%;
            }
        }

        /* Toast Notifications */
        .toast {
            position: fixed;
            top: 20px;
            right: 16px;
            left: 16px;
            padding: 12px 16px;
            border-radius: 8px;
            color: white;
            font-size: 14px;
            font-weight: 500;
            display: none;
            align-items: center;
            gap: 8px;
            animation: slideIn 0.3s ease;
            z-index: 1001;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        @media (min-width: 640px) {
            .toast {
                left: auto;
                max-width: 320px;
            }
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
            flex-shrink: 0;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Pagination Styles */
        .pagination {
            display: flex;
            justify-content: center;
            padding: 16px;
            gap: 6px;
            flex-wrap: wrap;
        }

        .pagination-link {
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            color: #374151;
            text-decoration: none;
            transition: all 0.2s;
            font-size: 14px;
            min-width: 40px;
            text-align: center;
        }

        .pagination-link:hover {
            background: #f9fafb;
        }

        .pagination-link.active {
            background: #4f46e5;
            color: white;
            border-color: #4f46e5;
        }

        /* Mobile-specific styles */
        @media (max-width: 640px) {
            .main-content {
                padding: 16px 12px;
            }
            
            .table-container {
                border-radius: 6px;
            }
            
            .data-table td,
            .data-table th {
                padding: 12px;
            }
            
            .modal-header {
                padding: 16px 16px 12px;
            }
            
            .modal-title {
                font-size: 16px;
            }
            
            .section-title {
                font-size: 15px;
                margin-bottom: 12px;
            }
        }

        /* Pledge items grid - Mobile optimized */
        .pledge-item-grid {
            display: grid; 
            grid-template-columns: 1fr; 
            gap: 12px; 
            align-items: start; 
            margin-bottom: 12px; 
            background: #f9fafb; 
            padding: 12px; 
            border-radius: 6px; 
            border: 1px solid #e5e7eb;
        }

        @media (min-width: 480px) {
            .pledge-item-grid {
                grid-template-columns: 1fr 1fr 40px; 
                align-items: end;
                gap: 10px;
            }
        }

        @media (max-width: 479px) {
            .pledge-item-grid > div:last-child {
                display: flex;
                justify-content: flex-end;
                margin-top: 8px;
            }
        }

        /* View modal tables for mobile */
        @media (max-width: 640px) {
            .view-table {
                display: block;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            
            .view-table table {
                min-width: 500px;
            }
        }

        /* Better touch targets for mobile */
        @media (max-width: 768px) {
            button, 
            .btn-primary, 
            .btn-secondary, 
            .action-btn,
            .pagination-link {
                min-height: 44px;
                min-width: 44px;
            }
            
            .form-input,
            .form-select {
                min-height: 44px;
            }
        }

        /* Prevent zoom on input focus for mobile */
        @media (max-width: 768px) {
            input[type="text"],
            input[type="tel"],
            input[type="email"],
            input[type="number"],
            input[type="date"],
            select,
            textarea {
                font-size: 16px; /* Prevents iOS zoom */
            }
        }

        /* Hide scrollbar for modal on mobile */
        .modal-body::-webkit-scrollbar {
            width: 4px;
        }

        .modal-body::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .modal-body::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        .modal-body::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Loading state */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #4f46e5;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Keyboard navigation improvements */
        .form-input:focus,
        .form-select:focus,
        .search-input:focus,
        button:focus {
            outline: 2px solid #4f46e5;
            outline-offset: 2px;
        }

        /* Dark mode support for form inputs */
        @media (prefers-color-scheme: dark) {
            .form-input,
            .form-select {
                background-color: white;
                color: #1f2937;
            }
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
                        aria-label="Tafuta washarika"
                    >
                </div>
                <div class="actions-row">
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
                            <th class="hidden-mobile">Kazi</th>
                            <th class="hidden-mobile">Tarehe</th>
                            <th class="actions-cell">Vitendo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($members as $index => $member)
                        <tr>
                            <td>{{ $members->firstItem() + $index }}</td>
                            <td>{{ $member->first_name }} {{ $member->middle_name }} {{ $member->last_name }}</td>
                            <td>{{ $member->jinsi }}</td>
                            <td>{{ $member->simu }}</td>
                            <td>{{ $member->mtaa }}</td>
                            <td class="hidden-mobile">{{ $member->kazi }}</td>
                            <td class="hidden-mobile">{{ $member->created_at->format('d/m/Y') }}</td>
                            <td class="actions-cell">
                                <div class="actions-container">
                                    <button class="action-btn" onclick="handleView(@js($member))" title="Angalia" aria-label="Angalia taarifa za msharika">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </button>
                                    <button class="action-btn" onclick="handleEdit(@js($member))" title="Hariri" aria-label="Hariri taarifa za msharika">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </button>
                                    <button class="action-btn" onclick="downloadPDF(@js($member))" title="Pakua PDF" aria-label="Pakua PDF ya msharika">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg>
                                    </button>
                                    <button class="action-btn delete" onclick="handleDelete({{ $member->id }})" title="Futa" aria-label="Futa msharika">
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
            <div class="pagination">
                {{ $members->onEachSide(1)->links() }}
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
                    <img id="memberPhoto" class="member-photo" alt="Member photo" loading="lazy">
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
                        <label for="edit_first_name" class="form-label">Jina la Kwanza</label>
                        <input type="text" id="edit_first_name" name="first_name" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_middle_name" class="form-label">Jina la Kati</label>
                        <input type="text" id="edit_middle_name" name="middle_name" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_last_name" class="form-label">Jina la Mwisho</label>
                        <input type="text" id="edit_last_name" name="last_name" class="form-input" required>
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
                        <select id="edit_hali_ndoa" name="hali_ndoa" class="form-select" required onchange="toggleMarriageFields()">
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
                    <div class="form-group marriage-field">
                        <label for="edit_jina_mwenzi" class="form-label">Jina la Mwenzi</label>
                        <input type="text" id="edit_jina_mwenzi" name="jina_mwenzi" class="form-input">
                    </div>
                    <div class="form-group marriage-field">
                        <label for="edit_aina_ndoa" class="form-label">Aina ya Ndoa</label>
                        <select id="edit_aina_ndoa" name="aina_ndoa" class="form-select">
                            <option value="">Chagua</option>
                            <option value="Kikristo">Kikristo</option>
                            <option value="Siyo Kikristo">Siyo Kikristo</option>
                        </select>
                    </div>
                    <div class="form-group marriage-field">
                        <label for="edit_tarehe_ndoa" class="form-label">Tarehe ya Ndoa</label>
                        <input type="date" id="edit_tarehe_ndoa" name="tarehe_ndoa" class="form-input">
                    </div>

                    <!-- Section B -->
                    <div class="form-group">
                        <label for="edit_simu" class="form-label">Namba ya Simu</label>
                        <input type="tel" id="edit_simu" name="simu" class="form-input" required inputmode="tel">
                    </div>
                    <div class="form-group marriage-field">
                        <label for="edit_simu_mwenzi" class="form-label">Simu ya Mwenzi</label>
                        <input type="tel" id="edit_simu_mwenzi" name="simu_mwenzi" class="form-input" inputmode="tel">
                    </div>
                    <div class="form-group">
                        <label for="edit_barua_pepe" class="form-label">Email</label>
                        <input type="email" id="edit_barua_pepe" name="barua_pepe" class="form-input" inputmode="email">
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
                        <input type="tel" id="edit_jirani_simu" name="jirani_simu" class="form-input" inputmode="tel">
                    </div>
                    <div class="form-group">
                        <label for="edit_mzee_kanisa" class="form-label">Mzee wa Kanisa</label>
                        <input type="text" id="edit_mzee_kanisa" name="mzee_kanisa" class="form-input">
                    </div>
                    <div class="form-group">
                        <label for="edit_simu_mzee" class="form-label">Simu ya Mzee wa Kanisa</label>
                        <input type="tel" id="edit_simu_mzee" name="simu_mzee" class="form-input" inputmode="tel">
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
                        <select id="edit_kipaimara" name="kipaimara" class="form-select" onchange="toggleKipaimara()">
                            <option value="">Chagua</option>
                            <option value="Ndiyo">Ndiyo</option>
                            <option value="Hapana">Hapana</option>
                        </select>
                    </div>
                    <div class="form-group" id="container_tarehe_kipaimara_date">
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

                    <!-- Section F: Ahadi - Fixed Jengo & Uwakili with no remove button -->
                    <div class="form-group" style="grid-column: span 1;">
                        <label class="form-label" style="font-weight: 600; color: #374151; margin-bottom: 15px;">AHADI ZAKO</label>
                        
                        <!-- Fixed Jengo Ahadi (Non-removable) -->
                        <div class="pledge-item-grid">
                            <div>
                                <label style="font-size: 12px; color: #4b5563; margin-bottom: 4px; display: block;">Jina la Ahadi</label>
                                <input type="text" 
                                       name="other_pledges[0][name]" 
                                       value="Jengo"
                                       class="form-input"
                                       style="font-size: 14px; background: #e0f2fe; cursor: not-allowed;"
                                       readonly>
                            </div>
                            <div>
                                <label style="font-size: 12px; color: #4b5563; margin-bottom: 4px; display: block;">Kiasi (TZS)</label>
                                <input type="number" 
                                       id="edit_ahadi_jengo_fixed"
                                       name="other_pledges[0][amount]" 
                                       value=""
                                       placeholder="0"
                                       class="form-input"
                                       style="font-size: 14px;"
                                       min="0"
                                       step="1"
                                       inputmode="numeric">
                            </div>
                            <!-- Empty div for alignment with remove button column -->
                            <div></div>
                        </div>
                        
                        <!-- Fixed Uwakili Ahadi (Non-removable) -->
                        <div class="pledge-item-grid">
                            <div>
                                <label style="font-size: 12px; color: #4b5563; margin-bottom: 4px; display: block;">Jina la Ahadi</label>
                                <input type="text" 
                                       name="other_pledges[1][name]" 
                                       value="Uwakili"
                                       class="form-input"
                                       style="font-size: 14px; background: #e0f2fe; cursor: not-allowed;"
                                       readonly>
                            </div>
                            <div>
                                <label style="font-size: 12px; color: #4b5563; margin-bottom: 4px; display: block;">Kiasi (TZS)</label>
                                <input type="number" 
                                       id="edit_ahadi_uwakili_fixed"
                                       name="other_pledges[1][amount]" 
                                       value=""
                                       placeholder="0"
                                       class="form-input"
                                       style="font-size: 14px;"
                                       min="0"
                                       step="1"
                                       inputmode="numeric">
                            </div>
                            <!-- Empty div for alignment with remove button column -->
                            <div></div>
                        </div>
                        
                        <!-- Dynamic Other Pledges Container -->
                        <div id="otherPledgesContainer">
                            <!-- Dynamic pledges will be added here starting from index 2 -->
                        </div>
                        
                        <button type="button" onclick="addOtherPledge()" class="btn-secondary" style="margin-top: 10px; font-size: 14px; padding: 8px 16px; width: 100%;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                                <path d="M12 5v14M5 12h14"></path>
                            </svg>
                            Ongeza Ahadi Nyingine
                        </button>
                    </div>

                    <!-- Hidden old fields for backward compatibility -->
                    <input type="hidden" id="edit_ahadi_jengo" name="ahadi_jengo" value="0">
                    <input type="hidden" id="edit_ahadi_uwakili" name="ahadi_uwakili" value="0">
                    <input type="hidden" id="edit_ahadi_nyingine" name="ahadi_nyingine" value="0">
                    <div class="form-group">
                        <label for="edit_namba_ahadi" class="form-label">Una Namba ya Ahadi?</label>
                        <select id="edit_namba_ahadi" name="namba_ahadi" class="form-select" onchange="toggleAhadiNumber()">
                            <option value="">Chagua</option>
                            <option value="Ndiyo">Ndiyo</option>
                            <option value="Hapana">Hapana</option>
                        </select>
                    </div>
                    <div class="form-group" id="ahadiNumberContainer" style="display: none;">
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
        <span id="successMessage">{{ session('success') }}</span>
    </div>
    <div id="errorToast" class="toast toast-error" style="display: {{ session('error') ? 'flex' : 'none' }}">
        <svg class="toast-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        <span id="errorMessage">{{ session('error') }}</span>
    </div>

    <!-- PDF Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>

    <script>
        // Modal state management
        let currentModal = null;
        let isSubmitting = false;

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
                memberPhoto.src = '/' + record.photo;
                photoContainer.style.display = 'flex';
            } else {
                photoContainer.style.display = 'none';
            }
            
            // Helper to parse JSON safely
            const parseJson = (str) => {
                try { return JSON.parse(str) || []; } catch(e) { return []; }
            };

            const watoto = ensureArray(record.watoto);
            const huduma = ensureArray(record.huduma);
            const kwaya = ensureArray(record.kwaya);
            const umoja = ensureArray(record.umoja);
            const otherPledges = ensureArray(record.other_pledges);

            // Build pledges table HTML
            let pledgesTableHtml = '';
            let totalAhadi = 0;
            
            if (otherPledges && otherPledges.length > 0) {
                // Show dynamic pledges from other_pledges field
                pledgesTableHtml = `
                    <div class="view-table" style="margin-top: 15px;">
                        <table style="width: 100%; border-collapse: collapse; font-size: 14px; color: #4b5563; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
                            <thead>
                                <tr style="background-color: #3b82f6; color: white;">
                                    <th style="padding: 12px; text-align: left; border: 1px solid #2563eb; font-weight: 600;">#</th>
                                    <th style="padding: 12px; text-align: left; border: 1px solid #2563eb; font-weight: 600;">Aina ya Ahadi</th>
                                    <th style="padding: 12px; text-align: right; border: 1px solid #2563eb; font-weight: 600;">Kiasi (TZS)</th>
                                </tr>
                            </thead>
                            <tbody>
                `;
                
                otherPledges.forEach((pledge, index) => {
                    if (pledge.name && pledge.amount) {
                        const amount = parseFloat(pledge.amount) || 0;
                        totalAhadi += amount;
                        
                        pledgesTableHtml += `
                            <tr style="${index % 2 === 0 ? 'background-color: #f9fafb;' : 'background-color: white;'}">
                                <td style="padding: 12px; border: 1px solid #e5e7eb; font-weight: 500;">${index + 1}</td>
                                <td style="padding: 12px; border: 1px solid #e5e7eb;">${pledge.name}</td>
                                <td style="padding: 12px; border: 1px solid #e5e7eb; text-align: right; font-weight: 500;">${amount.toLocaleString('en-US')}</td>
                            </tr>
                        `;
                    }
                });
                
                // Add total row
                pledgesTableHtml += `
                            </tbody>
                            <tfoot>
                                <tr style="background-color: #f0f9ff; border-top: 2px solid #3b82f6;">
                                    <td colspan="2" style="padding: 14px 12px; text-align: right; border: 1px solid #e5e7eb; font-weight: 700; color: #1e40af;">JUMLA YA AHADI:</td>
                                    <td style="padding: 14px 12px; text-align: right; border: 1px solid #e5e7eb; font-weight: 700; color: #1e40af; font-size: 15px;">${totalAhadi.toLocaleString('en-US')} TZS</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                `;
            } else {
                // Fallback to old fields (for backward compatibility)
                const oldPledges = [
                    { name: 'Jengo', value: record.ahadi_jengo },
                    { name: 'Uwakili', value: record.ahadi_uwakili },
                    { name: 'Nyingine', value: record.ahadi_nyingine }
                ];
                
                const validOldPledges = oldPledges.filter(pledge => {
                    const value = parseFloat(pledge.value) || 0;
                    return value > 0;
                });
                
                if (validOldPledges.length > 0) {
                    pledgesTableHtml = `
                        <div class="view-table" style="margin-top: 15px;">
                            <table style="width: 100%; border-collapse: collapse; font-size: 14px; color: #4b5563; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
                                <thead>
                                    <tr style="background-color: #3b82f6; color: white;">
                                        <th style="padding: 12px; text-align: left; border: 1px solid #2563eb; font-weight: 600;">#</th>
                                        <th style="padding: 12px; text-align: left; border: 1px solid #2563eb; font-weight: 600;">Aina ya Ahadi</th>
                                        <th style="padding: 12px; text-align: right; border: 1px solid #2563eb; font-weight: 600;">Kiasi (TZS)</th>
                                    </tr>
                                </thead>
                                <tbody>
                    `;
                    
                    validOldPledges.forEach((pledge, index) => {
                        const amount = parseFloat(pledge.value) || 0;
                        totalAhadi += amount;
                        
                        pledgesTableHtml += `
                            <tr style="${index % 2 === 0 ? 'background-color: #f9fafb;' : 'background-color: white;'}">
                                <td style="padding: 12px; border: 1px solid #e5e7eb; font-weight: 500;">${index + 1}</td>
                                <td style="padding: 12px; border: 1px solid #e5e7eb;">${pledge.name}</td>
                                <td style="padding: 12px; border: 1px solid #e5e7eb; text-align: right; font-weight: 500;">${amount.toLocaleString('en-US')}</td>
                            </tr>
                        `;
                    });
                    
                    // Add total row
                    pledgesTableHtml += `
                                </tbody>
                                <tfoot>
                                    <tr style="background-color: #f0f9ff; border-top: 2px solid #3b82f6;">
                                        <td colspan="2" style="padding: 14px 12px; text-align: right; border: 1px solid #e5e7eb; font-weight: 700; color: #1e40af;">JUMLA YA AHADI:</td>
                                        <td style="padding: 14px 12px; text-align: right; border: 1px solid #e5e7eb; font-weight: 700; color: #1e40af; font-size: 15px;">${totalAhadi.toLocaleString('en-US')} TZS</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    `;
                } else {
                    pledgesTableHtml = `
                        <div style="text-align: center; padding: 20px; background-color: #f9fafb; border: 1px dashed #d1d5db; border-radius: 8px; margin-top: 15px;">
                            <span style="color: #6b7280; font-style: italic;">Hakuna ahadi zilizowekwa</span>
                        </div>
                    `;
                }
            }
            
            // Ahadi number information
            const ahadiNumberHtml = record.namba_ahadi ? `
                <div style="margin-top: 15px; padding: 12px; background-color: #f0f9ff; border: 1px solid #bfdbfe; border-radius: 6px;">
                    <strong style="color: #1e40af;">Namba ya Ahadi:</strong> 
                    <span style="color: #374151; margin-left: 8px;">${record.namba_ahadi} ${record.namba_ahadi_specific ? `(${record.namba_ahadi_specific})` : ''}</span>
                </div>
            ` : '';

            // Update content
            document.getElementById('viewContent').innerHTML = `
                <div>
                    <h3 class="section-title">A. Tarifa Binafsi</h3>
                    <div class="info-grid">
                        <div class="info-item"><strong>Jina:</strong> <span>${(record.first_name || '') + ' ' + (record.middle_name || '') + ' ' + (record.last_name || '') || 'N/A'}</span></div>
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
                            <div class="view-table">
                                <table style="width: 100%; border-collapse: collapse; font-size: 14px; color: #4b5563; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden;">
                                    <thead>
                                        <tr style="background-color: #3b82f6; color: white;">
                                            <th style="padding: 12px; text-align: left; border: 1px solid #2563eb; font-weight: 600;">#</th>
                                            <th style="padding: 12px; text-align: left; border: 1px solid #2563eb; font-weight: 600;">Jina Kamili</th>
                                            <th style="padding: 12px; text-align: left; border: 1px solid #2563eb; font-weight: 600;">Tarehe ya Kuzaliwa</th>
                                            <th style="padding: 12px; text-align: left; border: 1px solid #2563eb; font-weight: 600;">Uhusiano</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ${watoto.map((m, index) => `
                                            <tr style="${index % 2 === 0 ? 'background-color: #f9fafb;' : 'background-color: white;'}">
                                                <td style="padding: 12px; border: 1px solid #e5e7eb; font-weight: 500;">${index + 1}</td>
                                                <td style="padding: 12px; border: 1px solid #e5e7eb;">${m.jina || 'N/A'}</td>
                                                <td style="padding: 12px; border: 1px solid #e5e7eb;">${extractDateOnly(m.tarehe_kuzaliwa) || 'N/A'}</td>
                                                <td style="padding: 12px; border: 1px solid #e5e7eb;">${m.uhusiano || 'N/A'}</td>
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
                    <div style="margin-top: 15px; padding: 15px; background-color: #f9fafb; border-radius: 8px; border: 1px solid #e5e7eb;">
                        <div style="margin-bottom: 8px;">
                            <strong style="color: #374151; display: inline-block; min-width: 80px;">Huduma:</strong>
                            <span style="color: #6b7280;">${huduma.join(', ') || 'N/A'}</span>
                        </div>
                        <div style="margin-bottom: 8px;">
                            <strong style="color: #374151; display: inline-block; min-width: 80px;">Kwaya:</strong>
                            <span style="color: #6b7280;">${kwaya.join(', ') || 'N/A'}</span>
                        </div>
                        <div>
                            <strong style="color: #374151; display: inline-block; min-width: 80px;">Umoja:</strong>
                            <span style="color: #6b7280;">${umoja.join(', ') || 'N/A'}</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="section-title">F. Ahadi</h3>
                    ${pledgesTableHtml}
                    ${ahadiNumberHtml}
                </div>
            `;
            
            showModal('viewModal');
        }

        // Helper to ensure value is an array
        function ensureArray(value) {
            if (Array.isArray(value)) return value;
            if (typeof value === 'string') {
                try {
                    const parsed = JSON.parse(value);
                    if (Array.isArray(parsed)) return parsed;
                } catch (e) {
                    // Not valid JSON
                }
            }
            return [];
        }

        function toggleKipaimara() {
            const status = document.getElementById('edit_kipaimara').value;
            const container = document.getElementById('container_tarehe_kipaimara_date');
            if (container) {
                container.style.display = status === 'Ndiyo' ? 'block' : 'none';
                if (status !== 'Ndiyo') {
                    const input = document.getElementById('edit_tarehe_kipaimara');
                    if(input) input.value = '';
                }
            }
        }

        function toggleMarriageFields() {
            const status = document.getElementById('edit_hali_ndoa').value;
            const isMarried = ['Umeoa', 'Umeolewa'].includes(status);
            
            document.querySelectorAll('.marriage-field').forEach(field => {
                field.style.display = isMarried ? 'block' : 'none';
                if (!isMarried) {
                    const inputs = field.querySelectorAll('input, select');
                    inputs.forEach(input => input.value = '');
                }
            });
        }

        function toggleAhadiNumber() {
            const status = document.getElementById('edit_namba_ahadi').value;
            const container = document.getElementById('ahadiNumberContainer');
            if (container) {
                container.style.display = status === 'Ndiyo' ? 'block' : 'none';
                if (status !== 'Ndiyo') {
                    const input = document.getElementById('edit_namba_ahadi_specific');
                    if(input) input.value = '';
                }
            }
        }

        function addOtherPledge(name = '', amount = '') {
            const container = document.getElementById('otherPledgesContainer');
            const index = container.children.length + 2; // +2 for fixed Jengo and Uwakili
            
            const div = document.createElement('div');
            div.className = 'pledge-item pledge-item-grid';
            
            div.innerHTML = `
                <div>
                    <label style="font-size: 12px; color: #4b5563; margin-bottom: 4px; display: block;">Jina la Ahadi</label>
                    <input type="text" 
                           name="other_pledges[${index}][name]" 
                           value="${name}"
                           placeholder="Mf: Shukrani"
                           class="form-input"
                           style="font-size: 14px;"
                           required>
                </div>
                <div>
                    <label style="font-size: 12px; color: #4b5563; margin-bottom: 4px; display: block;">Kiasi (TZS)</label>
                    <input type="number" 
                           name="other_pledges[${index}][amount]" 
                           value="${amount}"
                           placeholder="0"
                           class="form-input"
                           style="font-size: 14px;"
                           min="0"
                           step="1"
                           inputmode="numeric">
                </div>
                <button type="button" onclick="removePledge(this)" style="color: #ef4444; background: #fee2e2; border: none; border-radius: 4px; width: 32px; height: 32px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 6L6 18M6 6l12 12"></path>
                    </svg>
                </button>
            `;
            
            container.appendChild(div);
            reindexPledges();
        }

        function removePledge(button) {
            button.closest('.pledge-item').remove();
            reindexPledges();
        }

        function reindexPledges() {
            const container = document.getElementById('otherPledgesContainer');
            const items = container.querySelectorAll('.pledge-item');
            
            items.forEach((item, i) => {
                const index = i + 2; // Start from 2
                const nameInput = item.querySelector('input[name*="[name]"]');
                const amountInput = item.querySelector('input[name*="[amount]"]');
                
                if (nameInput) nameInput.name = `other_pledges[${index}][name]`;
                if (amountInput) amountInput.name = `other_pledges[${index}][amount]`;
            });
        }

        function handleEdit(record) {
            if (isSubmitting) return;
            
            // Fill basic fields
            const fields = [
                'first_name', 'middle_name', 'last_name', 'jinsi', 'tarehe_kuzaliwa', 'mahali_kuzaliwa', 'hali_ndoa', 'jina_mwenzi', 'aina_ndoa', 'tarehe_ndoa',
                'simu', 'simu_mwenzi', 'barua_pepe', 'sanduku_barua', 'mtaa', 'namba_nyumba', 'jina_eneo', 'block_no', 'jirani_jina', 'jirani_simu', 'mzee_kanisa', 'simu_mzee',
                'kazi', 'mahali_kazi', 'elimu', 'ujuzi',
                'batizwa', 'kipaimara', 'tarehe_kipaimara', 'meza_bwana',
                'jumuiya', 'jina_jumuiya', 'sababu',
                'namba_ahadi', 'namba_ahadi_specific'
            ];

            fields.forEach(field => {
                const el = document.getElementById('edit_' + field);
                if (el) el.value = record[field] || '';
            });

            // Handle Checkboxes (Huduma, Kwaya, Umoja)
            ['huduma', 'kwaya', 'umoja'].forEach(type => {
                // Reset all checkboxes for this type
                document.querySelectorAll(`input[name="${type}[]"]`).forEach(cb => cb.checked = false);
                
                // Get data and ensure it's an array
                let data = record[type];
                const dataArray = ensureArray(data);
                
                // Check matching boxes
                dataArray.forEach(val => {
                    const cb = document.querySelector(`input[name="${type}[]"][value="${val}"]`);
                    if (cb) cb.checked = true;
                });
            });

            // Handle Other Pledges (Ahadi)
            // 1. Reset Fixed Fields
            document.getElementById('edit_ahadi_jengo_fixed').value = '';
            document.getElementById('edit_ahadi_uwakili_fixed').value = '';
            
            // 2. Clear Dynamic Container
            const container = document.getElementById('otherPledgesContainer');
            if (container) container.innerHTML = '';
            
            // 3. Parse and Populate
            let pledges = [];
            if (Array.isArray(record.other_pledges)) {
                pledges = record.other_pledges;
            } else if (typeof record.other_pledges === 'string') {
                try {
                    pledges = JSON.parse(record.other_pledges);
                } catch (e) { pledges = []; }
            }
            
            // Handle legacy fields if new structure is empty
            if ((!pledges || pledges.length === 0) && (record.ahadi_jengo || record.ahadi_uwakili || record.ahadi_nyingine)) {
                if (record.ahadi_jengo) pledges.push({ name: 'Jengo', amount: record.ahadi_jengo });
                if (record.ahadi_uwakili) pledges.push({ name: 'Uwakili', amount: record.ahadi_uwakili });
                if (record.ahadi_nyingine) pledges.push({ name: 'Ahadi Nyingine', amount: record.ahadi_nyingine });
            }
            
            if (pledges && pledges.length > 0) {
                pledges.forEach(p => {
                    const name = p.name || '';
                    const amount = p.amount || '';
                    
                    if (name === 'Jengo') {
                        document.getElementById('edit_ahadi_jengo_fixed').value = amount;
                    } else if (name === 'Uwakili') {
                        document.getElementById('edit_ahadi_uwakili_fixed').value = amount;
                    } else {
                        addOtherPledge(name, amount);
                    }
                });
            }

            // Trigger Toggles to set initial state
            toggleMarriageFields();
            toggleKipaimara();
            toggleAhadiNumber();
            
            // Store the record ID for submission
            const form = document.getElementById('editForm');
            form.action = `/admin/member/${record.id}`;
            
            showModal('editModal');
        }

        async function submitEdit() {
            if (isSubmitting) return;
            
            const form = document.getElementById('editForm');
            const saveBtn = document.getElementById('saveEdit');
            const originalText = saveBtn.textContent;
            
            // Show loading state
            isSubmitting = true;
            saveBtn.innerHTML = '<div class="loading"></div>';
            saveBtn.disabled = true;
            
            try {
                const formData = new FormData(form);
                
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'X-HTTP-Method-Override': 'PUT',
                        'Accept': 'application/json'
                    }
                });
                
                const data = await response.json();
                
                if (!response.ok) {
                    if (response.status === 422) {
                        const errorMessages = Object.values(data.errors).flat().join('\n');
                        throw new Error(errorMessages);
                    }
                    throw new Error(data.message || 'Hitilafu imetokea.');
                }
                
                if (data.success) {
                    showToast(data.message, 'success');
                    closeModal('editModal');
                    setTimeout(() => location.reload(), 1000);
                } else {
                    showToast('Hitilafu imetokea.', 'error');
                }
            } catch (error) {
                console.error('Error:', error);
                showToast(error.message || 'Hitilafu ya mtandao.', 'error');
            } finally {
                // Reset button state
                isSubmitting = false;
                saveBtn.textContent = originalText;
                saveBtn.disabled = false;
            }
        }

        async function handleDelete(id) {
            if (!confirm('Je, una uhakika unataka kufuta rekodi hii?')) return;
            
            try {
                const response = await fetch(`/admin/member/${id}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'X-HTTP-Method-Override': 'DELETE'
                    }
                });
                
                const data = await response.json();
                
                if (data.success) {
                    showToast(data.message, 'success');
                    setTimeout(() => location.reload(), 1000);
                } else {
                    showToast('Hitilafu imetokea.', 'error');
                }
            } catch (error) {
                console.error('Error:', error);
                showToast('Hitilafu ya mtandao.', 'error');
            }
        }

        // Modal management functions
        function showModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                currentModal = modalId;
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
                currentModal = null;
            }
        }

        // Close modals on outside click
        document.querySelectorAll('.modal-overlay').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal(this.id);
                }
            });
        });

        // Close modals with escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && currentModal) {
                closeModal(currentModal);
            }
        });

        // Close buttons
        document.getElementById('closeViewModal').addEventListener('click', () => {
            closeModal('viewModal');
        });
        
        document.getElementById('cancelEdit').addEventListener('click', () => {
            closeModal('editModal');
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

        // Show toast notification
        function showToast(message, type) {
            const toast = type === 'success' 
                ? document.getElementById('successToast')
                : document.getElementById('errorToast');
            
            const messageSpan = toast.querySelector('span');
            if (messageSpan) {
                messageSpan.textContent = message;
            }
            
            toast.style.display = 'flex';
            
            setTimeout(() => {
                toast.style.display = 'none';
            }, 3000);
        }

        // Keep PDF download function (unchanged as per your code)
        async function downloadPDF(record) {
            // Your existing PDF download function here
            // ... (keep the same PDF download code)
        }

        // Function to get base64 image (keep as is)
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
    </script>
</body>
</html>
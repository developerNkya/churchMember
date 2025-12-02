        <!-- Member Registration Form -->
        <div id="member-form" class="form-section">

            <div class="form-container">

                            <button class="back-button" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                Rudi Nyuma
            </button>
            
            
                <form id="registrationForm" onsubmit="submitRegistration(event)">
                    <!-- Header Section -->
                    <div class="form-header">
                        <div class="church-info">
                            <h1 style="color: #2c3e50; font-size: 24px; margin-bottom: 10px;">K.K.K.T DAYOSISI YA MASHARIKI NA PWANI</h1>
                            <div class="form-group">
                                <label for="jimbo" class="form-label">JIMBO LA KUSINI</label>
                                <input type="text" class="form-input" id="jimbo" name="jimbo" value="KUSINI" readonly>
                            </div>
                            <div class="form-group">
                                <label for="usharika" class="form-label">USHARIKA WA MJI MWEMA</label>
                                <input type="text" class="form-input" id="usharika" name="usharika" value="MJI MWEMA" readonly>
                            </div>
                        </div>
                        <div class="photo-section">
                            <div class="photo-placeholder">
                                PICHA YA MSHARIKA
                            </div>
                            <input type="file" class="form-input" id="photo" name="photo" accept="image/*" style="margin-top: 10px; padding: 5px;">
                        </div>
                    </div>

                    <!-- Section A: Personal Information -->
                    <div class="form-group">
                        <h2 class="form-section-title">A. TARIFA BINAFSI</h2>
                        
                        <div class="inline-group">
                            <div class="form-group">
                                <label for="jina" class="form-label">1. Jina la Msharika</label>
                                <input type="text" class="form-input" id="jina" name="jina" required>
                            </div>
                            <div class="form-group">
                                <label for="jinsi" class="form-label">2. Jinsi (Me/Ke)</label>
                                <select class="form-select" id="jinsi" name="jinsi" required>
                                    <option value="">Chagua</option>
                                    <option value="Me">Me</option>
                                    <option value="Ke">Ke</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="inline-group">
                            <div class="form-group">
                                <label for="tarehe_kuzaliwa" class="form-label">3. Tarehe ya Kuzaliwa (DD/MM/YYYY)</label>
                                <input type="date" class="form-input" id="tarehe_kuzaliwa" name="tarehe_kuzaliwa" required>
                            </div>
                            <div class="form-group">
                                <label for="mahali_kuzaliwa" class="form-label">4. Mahali Ulipozaliwa</label>
                                <input type="text" class="form-input" id="mahali_kuzaliwa" name="mahali_kuzaliwa" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">5. Hali ya Ndoa</label>
                            <div class="radio-group">
                                <div class="radio-item">
                                    <input type="radio" id="umeoa" name="hali_ndoa" value="Umeoa">
                                    <label for="umeoa">Umeoa</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="hujaoa" name="hali_ndoa" value="Hujaoa">
                                    <label for="hujaoa">Hujaoa</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="umeolewa" name="hali_ndoa" value="Umeolewa">
                                    <label for="umeolewa">Umeolewa</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="hujaolewa" name="hali_ndoa" value="Hujaolewa">
                                    <label for="hujaolewa">Hujaolewa</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="mgane" name="hali_ndoa" value="Mgane">
                                    <label for="mgane">Mgane</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="mjane" name="hali_ndoa" value="Mjane">
                                    <label for="mjane">Mjane</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="talikiwa" name="hali_ndoa" value="Talikiwa">
                                    <label for="talikiwa">Talikiwa</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="tengana" name="hali_ndoa" value="Tengana">
                                    <label for="tengana">Tengana</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="jina_mwenzi" class="form-label">6. Kama umeoa/kuolewa, taja jina la Mwenzi wako</label>
                            <input type="text" class="form-input" id="jina_mwenzi" name="jina_mwenzi">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">7. Ndoa yako imefungwa?</label>
                            <div class="inline-group">
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" id="ndoa_kikristo" name="aina_ndoa" value="Kikristo">
                                        <label for="ndoa_kikristo">Kikristo</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="ndoa_siyo_kikristo" name="aina_ndoa" value="Siyo Kikristo">
                                        <label for="ndoa_siyo_kikristo">Siyo Kikristo</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tarehe_ndoa" class="form-label">Tarehe (DD/MM/YYYY)</label>
                                    <input type="date" class="form-input" id="tarehe_ndoa" name="tarehe_ndoa">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Watoto/Waumini wanao kutegemea</label>
                            <table class="form-table">
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
                                        <td><input type="text" class="form-input" name="jina_mtoto_1"></td>
                                        <td><input type="date" class="form-input" name="tarehe_mtoto_1"></td>
                                        <td><input type="text" class="form-input" name="uhusiano_mtoto_1"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-input" name="jina_mtoto_2"></td>
                                        <td><input type="date" class="form-input" name="tarehe_mtoto_2"></td>
                                        <td><input type="text" class="form-input" name="uhusiano_mtoto_2"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-input" name="jina_mtoto_3"></td>
                                        <td><input type="date" class="form-input" name="tarehe_mtoto_3"></td>
                                        <td><input type="text" class="form-input" name="uhusiano_mtoto_3"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" class="form-input" name="jina_mtoto_4"></td>
                                        <td><input type="date" class="form-input" name="tarehe_mtoto_4"></td>
                                        <td><input type="text" class="form-input" name="uhusiano_mtoto_4"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Section B: Contact and Residence -->
                    <div class="form-group">
                        <h2 class="form-section-title">B. MAWASILIANO NA MAKAZI</h2>
                        
                        <div class="inline-group">
                            <div class="form-group">
                                <label for="simu" class="form-label">1. Namba ya Simu</label>
                                <input type="tel" class="form-input" id="simu" name="simu" required>
                            </div>
                            <div class="form-group">
                                <label for="simu_mwenzi" class="form-label">2. Namba ya Simu (Mwenzi)</label>
                                <input type="tel" class="form-input" id="simu_mwenzi" name="simu_mwenzi">
                            </div>
                        </div>
                        
                        <div class="inline-group">
                            <div class="form-group">
                                <label for="sanduku_barua" class="form-label">3. Sanduku la Barua</label>
                                <input type="text" class="form-input" id="sanduku_barua" name="sanduku_barua">
                            </div>
                            <div class="form-group">
                                <label for="barua_pepe" class="form-label">4. Barua Pepe (email) yako</label>
                                <input type="email" class="form-input" id="barua_pepe" name="barua_pepe">
                            </div>
                        </div>
                        
                        <div class="inline-group">
                            <div class="form-group">
                                <label for="mtaa" class="form-label">5. Mtaa/Jumuiya</label>
                                <input type="text" class="form-input" id="mtaa" name="mtaa" required>
                            </div>
                            <div class="form-group">
                                <label for="namba_nyumba" class="form-label">6. Namba ya Nyumba</label>
                                <input type="text" class="form-input" id="namba_nyumba" name="namba_nyumba">
                            </div>
                        </div>
                        
                        <div class="inline-group">
                            <div class="form-group">
                                <label for="jina_eneo" class="form-label">7. Jina la Eneo unaloishi</label>
                                <input type="text" class="form-input" id="jina_eneo" name="jina_eneo" required>
                            </div>
                            <div class="form-group">
                                <label for="block_no" class="form-label">8. Block No.</label>
                                <input type="text" class="form-input" id="block_no" name="block_no">
                            </div>
                        </div>
                        
                        <div class="inline-group">
                            <div class="form-group">
                                <label for="jirani_jina" class="form-label">9. Jirani (Jina Kamili)</label>
                                <input type="text" class="form-input" id="jirani_jina" name="jirani_jina">
                            </div>
                            <div class="form-group">
                                <label for="jirani_simu" class="form-label">10. Jirani (Simu)</label>
                                <input type="tel" class="form-input" id="jirani_simu" name="jirani_simu">
                            </div>
                        </div>
                        
                        <div class="inline-group">
                            <div class="form-group">
                                <label for="mzee_kanisa" class="form-label">11. Mzee wa Kanisa (Jina)</label>
                                <input type="text" class="form-input" id="mzee_kanisa" name="mzee_kanisa">
                            </div>
                            <div class="form-group">
                                <label for="simu_mzee" class="form-label">12. Simu ya Mzee wa Kanisa</label>
                                <input type="tel" class="form-input" id="simu_mzee" name="simu_mzee">
                            </div>
                        </div>
                    </div>

                    <!-- Section C: Education and Work -->
                    <div class="form-group">
                        <h2 class="form-section-title">C. ELIMU NA KAZI YAKO</h2>
                        
                        <div class="form-group">
                            <label for="kazi" class="form-label">1. Kazi/Shughuli yako (Occupation)</label>
                            <input type="text" class="form-input" id="kazi" name="kazi" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="mahali_kazi" class="form-label">2. Mahali pa Kazi</label>
                            <input type="text" class="form-input" id="mahali_kazi" name="mahali_kazi">
                        </div>
                        
                        <div class="form-group">
                            <label for="elimu" class="form-label">3. Elimu</label>
                            <input type="text" class="form-input" id="elimu" name="elimu">
                        </div>
                        
                        <div class="form-group">
                            <label for="ujuzi" class="form-label">4. Ujuzi (Profession)</label>
                            <input type="text" class="form-input" id="ujuzi" name="ujuzi">
                        </div>
                    </div>

                    <!-- Section D: Spiritual Services -->
                    <div class="form-group">
                        <h2 class="form-section-title">D. HUDUMA ZA KIROHO</h2>
                        
                        <div class="form-group">
                            <label class="form-label">1. Umebatizwa?</label>
                            <div class="radio-group">
                                <div class="radio-item">
                                    <input type="radio" id="batizwa_ndiyo" name="batizwa" value="Ndiyo">
                                    <label for="batizwa_ndiyo">Ndiyo</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="batizwa_hapana" name="batizwa" value="Hapana">
                                    <label for="batizwa_hapana">Hapana</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">2. Ulishapata Kipaimara?</label>
                            <div class="inline-group">
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" id="kipaimara_ndiyo" name="kipaimara" value="Ndiyo">
                                        <label for="kipaimara_ndiyo">Ndiyo</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="kipaimara_hapana" name="kipaimara" value="Hapana">
                                        <label for="kipaimara_hapana">Hapana</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tarehe_kipaimara" class="form-label">Tarehe (DD/MM/YYYY)</label>
                                    <input type="date" class="form-input" id="tarehe_kipaimara" name="tarehe_kipaimara">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">3. Unashiriki Sakramenti ya Meza ya Bwana?</label>
                            <div class="radio-group">
                                <div class="radio-item">
                                    <input type="radio" id="meza_ndiyo" name="meza_bwana" value="Ndiyo">
                                    <label for="meza_ndiyo">Ndiyo</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="meza_hapana" name="meza_bwana" value="Hapana">
                                    <label for="meza_hapana">Hapana</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section E: Church Service Participation -->
                    <div class="form-group">
                        <h2 class="form-section-title">E. USHIRIKI WA HUDUMA ZA KANISA NA VIKUNDI</h2>
                        
                        <div class="form-group">
                            <label class="form-label">Unashiriki ibada za nyumba kwa nyumba (Jumuiya)?</label>
                            <div class="inline-group">
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" id="jumuiya_ndiyo" name="jumuiya" value="Ndiyo">
                                        <label for="jumuiya_ndiyo">Ndiyo</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="jumuiya_hapana" name="jumuiya" value="Hapana">
                                        <label for="jumuiya_hapana">Hapana</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jina_jumuiya" class="form-label">Jina la Jumuiya</label>
                                    <input type="text" class="form-input" id="jina_jumuiya" name="jina_jumuiya">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sababu" class="form-label">Sababu ya Kutoshiriki</label>
                                <input type="text" class="form-input" id="sababu" name="sababu">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Je, Umejiunga au ungependa Kujiunga na huduma gani hapa Usharikani?</label>
                            
                            <div class="checkbox-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" id="huduma_1" name="huduma[]" value="Fellowship/Bible Study">
                                    <label for="huduma_1">Fellowship / Bible Study</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="huduma_2" name="huduma[]" value="Kufundisha Shule ya Jumapili">
                                    <label for="huduma_2">Kufundisha Shule ya Jumapili (Sunday School)</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="huduma_3" name="huduma[]" value="Kutembelea Wagonjwa">
                                    <label for="huduma_3">Kutembelea Wagonjwa</label>
                                </div>
                            </div>
                            
                            <div class="form-group" style="margin-top: 15px;">
                                <label class="form-label">Kwaya</label>
                                <div class="checkbox-group">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="kwaya_kuu" name="kwaya[]" value="Kuu">
                                        <label for="kwaya_kuu">Kuu</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="kwaya_vijana" name="kwaya[]" value="Vijana">
                                        <label for="kwaya_vijana">Vijana</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="kwaya_matarumbeta" name="kwaya[]" value="Matarumbeta">
                                        <label for="kwaya_matarumbeta">Matarumbeta</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="kwaya_kusifu" name="kwaya[]" value="Kusifu na Kuabudu">
                                        <label for="kwaya_kusifu">Kusifu na Kuabudu</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Umoja</label>
                                <div class="checkbox-group">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="umoja_vijana" name="umoja[]" value="Vijana">
                                        <label for="umoja_vijana">Vijana</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="umoja_mama" name="umoja[]" value="Wa mama">
                                        <label for="umoja_mama">Wa mama</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="umoja_baba" name="umoja[]" value="Wa Baba">
                                        <label for="umoja_baba">Wa Baba</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkbox-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" id="huduma_4" name="huduma[]" value="Uinjilisti">
                                    <label for="huduma_4">Uinjilisti</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="huduma_5" name="huduma[]" value="Uamsho">
                                    <label for="huduma_5">Uamsho</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="huduma_6" name="huduma[]" value="Akina Mama">
                                    <label for="huduma_6">Akina Mama</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section F: Pledge for 2026 -->
                    <div class="form-group">
                        <h2 class="form-section-title">F. AHADI YAKO KWA BWANA MWAKA 2026</h2>
                        
                        <table class="form-table">
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
                                    <td><input type="number" class="form-input" name="ahadi_jengo" min="0"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Uwakili</td>
                                    <td><input type="number" class="form-input" name="ahadi_uwakili" min="0"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ahadinyingine kama ipo</td>
                                    <td><input type="number" class="form-input" name="ahadi_nyingine" min="0"></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="form-group">
                            <label class="form-label">4. Je una Namba ya Ahadi?</label>
                            <div class="inline-group">
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" id="namba_ahadi_ndiyo" name="namba_ahadi" value="Ndiyo">
                                        <label for="namba_ahadi_ndiyo">Ndiyo</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="namba_ahadi_hapana" name="namba_ahadi" value="Hapana">
                                        <label for="namba_ahadi_hapana">Hapana</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namba_ahadi" class="form-label">Namba ya ahadi kama unayo</label>
                                    <input type="text" class="form-input" id="namba_ahadi" name="namba_ahadi">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">Wasilisha Fomu</button>
                </form>
            </div>
        </div>
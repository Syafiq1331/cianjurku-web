@extends('layouts.guest.app', ['title' => 'Dashboard'])

@section('content')
    <div class="container pt-3 pb-5 mt-2 mb-4">
        <h1>Sekretariat Daerah</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Alamat</th>
                        <td>Jl. Siliwangi No. 9 Pamoyanan, Cianjur</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <ul>
                                <li>
                                    <a href="mailto:umumkeu-setda@cianjurkab.go.id" class="text-danger text-decoration-none">
                                        Bagian Umum Keuangan
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:organisasi-setda@cianjurkab.go.id"
                                        class="text-danger text-decoration-none">
                                        Bagian Organisasi
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:hukum-setda@cianjurkab.go.id" class="text-danger text-decoration-none">
                                        Bagian Hukum
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:barjas-setda@cianjurkab.go.id" class="text-danger text-decoration-none">
                                        Bagian Pengadaan Barang dan Jasa
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:pembangunan-setda@cianjurkab.go.id"
                                        class="text-danger text-decoration-none">
                                        Bagian Pembangunan
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:perekonomian-setda@cianjurkab.go.id"
                                        class="text-danger text-decoration-none">
                                        Bagian Perekonomian dan Investasi
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:kesra-setda@cianjurkab.go.id" class="text-danger text-decoration-none">
                                        Bagian Kesejahteraan Rakyat
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:humas-setda@cianjurkab.go.id" class="text-danger text-decoration-none">
                                        Bagian Humas dan Keprotokolan
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:pemerintahan-setda@cianjurkab.go.id"
                                        class="text-danger text-decoration-none">
                                        Bagian Pemerintahan
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td> (0263) 261892-261896</td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td>
                            <ul>
                                <li>
                                    <a href="https://jdih.cianjurkab.go.id" class="text-danger text-decoration-none">Bagian
                                        Hukum</a>
                                </li>
                                <li>
                                    <a href="https://blpbj.cianjurkab.go.id" class="text-danger text-decoration-none">Bagian
                                        Pengadaan Barang dan Jasa</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Faximile</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Sosial Media</th>
                        <td>
                            <ul>
                                <li>Bagian Kesejahteraan Rakyat</li>
                                <ul>
                                    <li>Facebook : Kesra Setda Cianjur</li>
                                </ul>
                                <li>Bagian Humas dan Keprotokolan</li>
                                <ul>
                                    <li>Facebook: Humas & Protokol Pemkab Cianjur</li>
                                    <li>Twitter : @humas_setda</li>
                                    <li>Youtube : Humas Cianjur</li>
                                </ul>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <hr style="width: 12%; margin: 24px auto;">

        <h3>Dokumen Sakip</h3>
        <ol>
            <li>
                <a class="text-decoration-none"
                    href="https://web.cianjurkab.go.id/wp-content/uploads/2024/03/LKIP-TA-2023-Setda-Cianjur.pdf">
                    LKIP TA 2023
                </a>
            </li>
            <li>
                <a class="text-decoration-none"
                    href="https://web.cianjurkab.go.id/wp-content/uploads/2024/03/LKIP-SETDA-Tahun-2022.pdf">
                    LKIP TA 2022
                </a>
            </li>
        </ol>

        <hr style="width: 12%; margin: 24px auto;">
        <h3>Daftar Pejabat</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Sekretariat Daerah</th>
                        <td>Dr. H. Cecep S. Alamsyah. M,Kes,. M.Si</td>
                    </tr>
                    <tr>
                        <th>Asisten Pemerintahan dan kesejahteraan Rakyat</th>
                        <td>ASDA I : ARIEF PURNAWAN, S.A.P</td>
                    </tr>
                    <tr>
                        <th>Staf Ahli Bupati Bidang Ekonomi Keuangan Dan Pembangunan</th>
                        <td>Drs. H. Dudun Abdullah, SQ.,MM</td>
                    </tr>
                    <tr>
                        <th>Staf Ahli Bupati Bidang Kemasyarakatan Dan Sumber Daya Manusia</th>
                        <td>RACHMAT HARTONO, SH, MAP</td>
                    </tr>
                    <tr>
                        <th>Bagian Pemerintahan</th>
                        <td>Kepala Bagian : IYUS YUSUF, S.STP, M.Si
                            <ul>
                                <li class="fw-semibold">Sub Koordinator Kerjasama dan Otonomi Daerah
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan: ASEP KOSWARA,Spt, M.Si</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Administrasi Kewilayahan
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan: ELIS ROSMAKANIA, S.IP</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Administrasi Pemerintahan
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan : ASEP KOSWARA, S.Pt</li>
                                    </ul>
                                </li>
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <th>Bagian Kesejahteraan Rakyat</th>
                        <td>Kepala Bagian: DINDIN AMALUDIN, AKS
                            <ul>
                                <li class="fw-semibold">Sub Koordinator Bina Mental Spiritual
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan: DIDIF FUAD HILMY, SE</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Kesejahteraan Masyarakat
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan : DADANG TARYANA, SH</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Kesejahteraan Sosial
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan : H. MEMET HIKMAT</li>
                                    </ul>
                                </li>
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <th>Bagian Hukum</th>
                        <td>Kepala Bagian: MOKHAMAD IRFAN SOFYAN, ST, SH. M.Kn
                            <ul>
                                <li class="fw-semibold">Sub Koordinator Perundang-undangan
                                    <ul>
                                        <li class="fw-normal">Perancang Peraturan Perundang-undangan : DINDIN SOLIHIN, SH
                                        </li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Dokumentasi Dan Informasi
                                    <ul>
                                        <li class="fw-normal">Analis Hukum : SARI SRI HARYATI, SE</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Bantuan Hukum
                                    <ul>
                                        <li class="fw-normal">Analis Hukum : YUDI ISMAIL, SH</li>
                                    </ul>
                                </li>
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <th>Asisten Perekonomian Dan Pembangunan</th>
                        <td>BUDHI RAHAYU TOYIB, S.Sos, MM</td>
                    </tr>
                    <tr>
                        <th>Bagian Perekonomian Dan Sumber Daya Alam</th>
                        <td>Kepala Bagian : SARIPUDIN, S.STP, M.Si
                            <ul>
                                <li class="fw-semibold">Sub Koordinator Sumber Daya Alam
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan : RIMA SARI FEBIANI, S.Hut
                                        </li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Pembinaan BUMD dan BLUD
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan : ADI RAHADI JAYUSMAN, SE</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Perekonomian
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan : ACEP SOPIANDI, SH</li>
                                    </ul>
                                </li>
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <th>Bagian Pengadaan Barang dan Jasa</th>
                        <td>Kepala Bagian: JATNIKA YUSEP, S.Pi
                            <ul>
                                <li class="fw-semibold">Sub Koordinator Pengelolaan Pengadaan Barang dan Jasa
                                    <ul>
                                        <li class="fw-normal">Pengelolaan Pengadaan Barang/Jasa : IRPAN ADIGUNA, ST, MAP
                                        </li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Pembinaan dan Advokasi Pengadaan Barang dan Jasa
                                    <ul>
                                        <li class="fw-normal">Pengelolaan Pengadaan Barang/Jasa : ENDA SUWENDA, SE</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Pengelolaan Layanan Pengadaan Secara Elektronik
                                    <ul>
                                        <li class="fw-normal">Pengelolaan Pengadaan Barang/Jasa : ARY WIDODO, ST</li>
                                    </ul>
                                </li>
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <th>Bagian Administrasi Pembangunan</th>
                        <td>Kepala Bagian: JONI, ST
                            <ul>
                                <li class="fw-semibold">Sub Koordinator Penyusunan Program
                                    <ul>
                                        <li class="fw-normal">Perencana : TITA ROSILAWATI, S.Sos.
                                        </li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Evaluasi dan Pelaporan
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan : IKE KESUMAWATI PARDIANIE, SE, MM</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Pengendalian Program
                                    <ul>
                                        <li class="fw-normal">Kepala Subagian : IWAN RAHMATIAWAN</li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Asisten Administrasi Umum</th>
                        <td>R. DEDI SUDRAJAT, SE, MAP</td>
                    </tr>
                    <tr>
                        <th>Bagian Umum dan Keuangan</th>
                        <td>Kepala Bagian: HERI FARID HIFARI, S.Psi. MAP
                            <ul>
                                <li class="fw-semibold">Sub-bagian Tata Usaha Pimpinan, Staf Ahli dan Kepegawaian
                                    <ul>
                                        <li class="fw-normal">Kepala Subagian : EMAN SUHERMAN, SH
                                        </li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub-bagian Rumah Tangga dan Perlengkapan
                                    <ul>
                                        <li class="fw-normal">Kepala Subbagian: IRDAN MUHAMMAD RAMDHAN, S.STP</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Keuangan
                                    <ul>
                                        <li class="fw-normal">Analis Keuangan Pusat dan Daerah : HAMDAN JAELANI, S.E</li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Bagian Organisasi</th>
                        <td>Kepala Bagian: Dra. HERMIN PATRIANA, M.Si.
                            <ul>
                                <li class="fw-semibold">Sub Koordinator Kelembagaan dan Analisis Jabatan
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan : ASEP GUNAWAN, SE
                                        </li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Pelayanan Publik dan Tata Laksana
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan : FENNY RUSMIATI, S.AP</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Kinerja dan Reformasi Birokrasi
                                    <ul>
                                        <li class="fw-normal">Analis Kebijakan :PRIMA HERVIANI, S.STP</li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Bagian Protokol dan Komunikasi Pimpinan</th>
                        <td>Kepala Bagian: ASEP HUSEN AFANDI, SE
                            <ul>
                                <li class="fw-semibold">Sub Koordinator Komunikasi Pimpinan
                                    <ul>
                                        <li class="fw-normal">Pranata Hubungan Masyarakat :-
                                        </li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub Koordinator Dokumentasi Pimpinan
                                    <ul>
                                        <li class="fw-normal">Pranata Hubungan Masyarakat : DUDAH HAMIDAH</li>
                                    </ul>
                                </li>
                                <li class="fw-semibold">Sub-bagian Protokol
                                    <ul>
                                        <li class="fw-normal">Kepala Subagian : BUDI ACHMAD FAUZI, SH</li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection

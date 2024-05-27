@extends('frontend.layouts.app')
@section('title', 'Documentation API')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <div class="container mt-5">
        <div class="row" style="margin-top: 15%;">
            <div class="col-md-4">
                <!-- Image pelamar -->
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgODDVArLuZT7JkW6ERet39dP948bJxSEjNzEZG4Dn5IJdHqbtdaLgYoQWSVemKmbBUDccIRcbdyIFkOboQ7iplJGiUvy0ZYo6O0FBDIgroKXftlzYwCoO6BQJIhpNxhsZYD0eIWUzF_4RKHEAlyvSc1ZE4-ms3qkdhR7Os0N33EzCtE1Jde-TRAjA20Q/s1200/3x4%20warna.jpg"
                    alt="Profile Image" class="profile-img">
            </div>
            <div class="col-md-8 info-container">
                <!-- Identitas lengkap -->
                <h2>Gugun Gunawan, S.Kom</h2>
                <p>Street Pasar Sindaglaya, No.154 04/01 Cisaranten Bina
                    Harapan - Arcamanik, Kota Bandung</p>
                <br>
                <p>Email: careergunawan@gmail.com</p>
                <p>Email: gugun.net21@gmail.com</p>
                <p>WhatsApp: +6282320163626</p>

                <!-- Hyperlink untuk GitHub dan Social Media -->
                <div class="social-links">
                    <a href="mailto:careergunawan@gmail.com" target="_blank">
                        <i class="fa fa-envelope"></i> Email
                    </a>
                    <a href="https://wa.me/6282320163626" target="_blank">
                        <i class="fa fa-whatsapp"></i> WhatsApp
                    </a>
                    <a href="https://github.com/ugunNet21" target="_blank">
                        <i class="fa fa-github"></i> GitHub
                    </a>
                    <a href="https://www.linkedin.com/in/gugun-gunawan-0482981a3/" target="_blank">
                        <i class="fa fa-linkedin"></i> LinkedIn
                    </a>

                </div>
                <br>
                <!-- Hyperlink untuk Download CV PDF -->
                <a href="https://drive.google.com/drive/folders/1kkq_dLMTEx-wlYxMqvOmTbIPc1X-BJVl?usp=sharing"
                    class="btn btn-primary" target="_blank">Download CV
                    (PDF)</a>
                <br>
                <!-- List untuk Hyperlink URL Restful API -->
                {{-- <h3>Projects</h3> --}}
                <br>
                <ul>
                    <li>
                        <a href="https://careergunawaan.000webhostapp.com/api/buku" target="_blank"
                            class="btn btn-secondry">
                            Get All Buku
                        </a>
                        <br>
                        <p>
                            Endpoint:
                            <code>GET api/buku</code> - Menampilkan daftar
                            buku.
                        </p>
                        <p>
                            Contoh Output:
                            <pre>
                                {
                                "status": true,
                                "message": "Data buku berhasil disimpan",
                                "data": {
                                    "judul": "BS",
                                    "pengarang": "Gugun Gunawan, S.Kom",
                                    "tanggal_publikasi": "2023/05/03",
                                    "updated_at": "2023-12-15T03:26:33.000000Z",
                                    "created_at": "2023-12-15T03:26:33.000000Z",
                                    "id": 1
                                }
                                }
                        </pre>
                        </p>
                    </li>
                    <br>
                    <li>
                        <a href="https://careergunawaan.000webhostapp.com/api/buku/1" target="_blank"
                            class="btn btn-secondry">
                            Project RESTful API Buku - Detail
                        </a>
                        <br>
                        <p>
                            Endpoint:
                            <code>GET api/buku/1</code> - Menampilkan detail
                            buku dengan ID tertentu.
                        </p>
                    </li>
                    <br>
                    <li>
                        <a href="https://careergunawaan.000webhostapp.com/api/buku" target="_blank"
                            class="btn btn-secondry">
                            Project RESTful API Buku - Store
                        </a>
                        <br>
                        <p>
                            Endpoint:
                            <code>POST api/buku</code> - Menyimpan data buku
                            baru.
                        </p>
                        <p>
                            Masukkan Parameter dan Value:
                            <pre>
            {
            "judul": "BS",
            "pengarang": "Gugun Gunawan, S.Kom",
            "tanggal_publikasi": "2023/05/03"
            }
                    </pre>
                        </p>
                    </li>
                    <br>
                    <li>
                        <a href="https://careergunawaan.000webhostapp.com/api/buku/1" target="_blank"
                            class="btn btn-secondry">
                            Project RESTful API Buku - Update
                        </a>
                        <br>
                        <p>
                            Endpoint:
                            <code>PUT api/buku/1</code> - Memperbarui data
                            buku dengan ID tertentu.
                        </p>
                        <p>
                            Masukkan Parameter dan Value:
                            <pre>
                            {
                            "judul": "Updated Title"
                            }
                            </pre>
                        </p>
                    </li>
                    <br>
                    <li>
                        <a href="https://careergunawaan.000webhostapp.com/api/buku/1" target="_blank"
                            class="btn btn-secondry">
                            Project RESTful API Buku - Delete
                        </a>
                        <br>
                        <p>
                            Endpoint:
                            <code>DELETE api/buku/1</code> - Menghapus data
                            buku dengan ID tertentu.
                        </p>
                        <p>
                            Masukkan Parameter dan Value:
                            <pre>
                            {

                            }
                            </pre>
                        </p>
                    </li>
                </ul>


            </div>
        </div>
    </div>
@endsection

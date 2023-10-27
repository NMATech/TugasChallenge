@extends('utama')

@section ('content')

    <div class="container mt-5 w-80 mx-auto">
       <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <div class="d-flex box justify-content-center">
                    <img class="rounded w-50 shadow-lg" src="{{ URL('storage/1.jpeg')}}" alt="">
                </div>
            </div>
            <div class="col">
                <div class="box">
                    <div class="text-center mt-sm-4 mt-lg-0">
                        <h2>Profile</h2>
                    </div>
                    <div class="text-center mb-sm-4">
                        <p>Nama saya Nadindra Maulana Aziz, seorang mahasiswa Informatika semester 3 di Universitas Singaperbangsa Karawang. Saya juga lulusan dari SMA NEGERI 1 TELAGASARI jurusan IPA. Saya memiliki ketertarikan pada bidang <strong><i>FrontEnd - Developer</i></strong> atau mungkin saja saya bisa beralih ke <strong><i>Fullstack</i></strong> suatu saat nanti. Saya juga aktif dalam Himpunan dan bagian dari <i>Divisi Research and Development</i> anggota <i>Departement Product Development</i>. Di luar perkuliahan atau akademik saya senang bermain game, menghabiskan waktu dengan mendengarkan musik, dan bermain basket.</p>
                    </div>
                </div>
            </div>
       </div>
    </div>

@endsection
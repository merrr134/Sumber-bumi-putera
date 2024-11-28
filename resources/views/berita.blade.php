@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center text-white flex items-center justify-center bg-primary-dark min-h-[80vh]" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');" data-aos="fade-up" data-aos-duration="1500">
  <!-- Overlay -->
  <div class="absolute inset-0 "></div>

  <div class="container px-4 text-center relative z-20 mx-auto max-w-[1000px] overflow-hidden">
    <!-- Judul -->
    <h1 class="text-4xl font-bold mb-4" data-aos="zoom-in" data-aos-duration="1000">Job Fair Expo 2024: SMK Telkom Makassar Hadirkan Peluang Karier untuk Generasi Muda</h1>
  </div>
</section>

<!-- Konten Utama -->
<div class="relative z-20 mx-auto bg-white lg:mb-28 md:mb-12 -mt-36 rounded-lg shadow-md max-w-[1000px] overflow-hidden" data-aos="fade-up" data-aos-duration="1500">
  <!-- Bagian Gambar -->
  <div>
      <img 
          src="{{ asset('images/image6.jpg') }}" 
          alt="Gambar Placeholder" 
          class="w-full h-auto object-cover"
          data-aos="zoom-in" data-aos-duration="1000"
      />
  </div>
  <!-- Bagian Informasi -->
  <div class="p-6">
      <p class="text-gray-600" data-aos="fade-up" data-aos-duration="1500">
          Makassar, 16 November 2024 SMK Telkom Makassar sukses menggelar Job Fair Expo 2024, sebuah pameran karier bergengsi yang berlangsung selama dua hari, mulai tanggal 16 hingga 17 November 2024. Bertempat di Lontara SMK Telkom Makassar, acara ini membuka pintu karier bagi generasi muda, khususnya siswa dan alumni SMK, dengan menghadirkan lebih dari 14 perusahaan nasional dan multinasional.
          <br><br>
          Acara ini turut dihadiri oleh Kepala Sekolah SMK Telkom Makassar, Kepala Bidang SMK Dinas Pendidikan Provinsi Sulawesi selatan Bapak Drs. Abdul Malik Azkari, M.Pd., dan Pengawas SMK Dinas Pendidikan SulSel, Bapak Kamaruddin S.Pd., serta Bapak Sjaiful Bahri, S.E., S.St.Par selaku Ketua DPD AHLI Sulsel. Dalam sambutannya, mereka menyampaikan apresiasi atas kolaborasi berbagai pihak dalam mendukung pengembangan karier siswa.
          <br><br>
          "Job Fair Expo 2024 ini merupakan langkah nyata kami untuk mempersiapkan lulusan yang siap kerja dan mampu bersaing di dunia industri," ujarnya.
          <br><br>
          Kepala Bidang SMK Dinas Pendidikan juga memberikan dorongan kepada para peserta untuk memanfaatkan peluang ini sebaik-baiknya.
          <br><br>
          "Acara ini menjadi bukti bahwa pendidikan vokasi di Sulawesi Selatan terus berkomitmen membangun SDM unggul dan siap bersaing di era digital," katanya.
          <br><br>
          <strong>Berbagai Fasilitas Menarik untuk Peserta:</strong>
          <ul class="list-disc ml-8">
              <li>Walk-in Interview: Kesempatan untuk wawancara langsung dengan HRD perusahaan.</li>
              <li>Career Coaching: Sesi konsultasi karier gratis bersama para profesional.</li>
              <li>Workshop: Pelatihan singkat seperti pembuatan CV, tips wawancara, dan pengembangan keterampilan digital.</li>
              <li>Expo Teknologi: Pameran inovasi teknologi karya siswa dan alumni SMK Telkom Makassar.</li>
          </ul>
          <br>
          <strong>Pendaftaran dan Informasi Lainnya:</strong>
          <br>
          Pendaftaran peserta dilakukan secara online melalui postingan Instagram resmi SMK Telkom Makassar atau langsung di lokasi acara. Registrasi dibuka mulai pukul 08.00 WITA, dan acara berlangsung hingga selesai.
          <br><br>
          Perusahaan yang berpartisipasi di antaranya Anha tour & travel, Royal Air Internasional, AHLI, ASITA, PT. Borneo Hijau Lestari, SUPERNOVA, Penerbit Erlangga, Mandiri, PT. Mandiri Utama Finance, Telkom Akses, PT. Rupa Raya Indonesia, BTPRI, PHRI, CV. AZHARI PERMATA MANDIRI.
          <br><br>
          Dengan antusiasme tinggi dari peserta dan dukungan penuh dari berbagai pihak, Job Fair Expo 2024 SMK Telkom Makassar menjadi bukti nyata komitmen pendidikan vokasi dalam mencetak lulusan siap bersaing di era digital.
      </p>
  </div>
</div>

@endsection

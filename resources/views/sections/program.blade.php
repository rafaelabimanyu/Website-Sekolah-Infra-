<!-- ================= SECTION PROGRAM KEAHLIAN ================= -->
<section id="program" class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-4 md:px-8">

    <!-- Judul -->
    <div class="text-right mb-12 fade-in-up">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
        Program <span class="text-orange-600">Keahlian</span>
      </h2>
      <p class="text-gray-600 max-w-3xl ml-auto">
        Empat jurusan unggulan siap membentukmu jadi generasi kreatif dan kompeten.  
        PPLG dengan dunia coding dan gim, TKJ untuk keahlian jaringan, DKV yang mengekspresikan ide melalui desain,  
        hingga BCF yang mengasah talenta film dan broadcasting.
      </p>
    </div>

    <!-- Grid Program -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
      
      <!-- Card PPLG -->
      <div class="relative group rounded-xl overflow-hidden shadow-lg fade-in-up delay-100">
        <img src="assets/program/pplg.png" alt="PPLG"
          class="w-full h-96 object-cover group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/40 group-hover:bg-orange-500/40 transition duration-500"></div>
        <div class="absolute inset-0 flex flex-col justify-end text-center p-8 z-10">
          <div class="mb-3">
            <img src="assets/icons/pplg.png" alt="icon" class="mx-auto w-12 h-12">
          </div>
          <h3 class="text-white font-bold text-xl">Pengembangan Perangkat Lunak dan Gim</h3>
          <a href="#" class="lihat-selengkapnya mt-3 inline-block text-sm text-orange-300 font-semibold hover:underline"
            data-target="pplg">
            Lihat Selengkapnya
          </a>
        </div>
      </div>

      <!-- Card TKJ -->
      <div class="relative group rounded-xl overflow-hidden shadow-lg fade-in-up delay-200">
        <img src="assets/program/tkj.png" alt="TKJ"
          class="w-full h-96 object-cover group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/40 group-hover:bg-orange-500/40 transition duration-500"></div>
        <div class="absolute inset-0 flex flex-col justify-end text-center p-8 z-10">
          <div class="mb-3">
            <img src="assets/icons/tkj.png" alt="icon" class="mx-auto w-12 h-12">
          </div>
          <h3 class="text-white font-bold text-xl">Teknik Jaringan Komputer dan Telekomunikasi</h3>
          <a href="#" class="lihat-selengkapnya mt-3 inline-block text-sm text-orange-300 font-semibold hover:underline"
            data-target="tkj">
            Lihat Selengkapnya
          </a>
        </div>
      </div>

      <!-- Card BCF -->
      <div class="relative group rounded-xl overflow-hidden shadow-lg fade-in-up delay-300">
        <img src="assets/program/bcf.png" alt="Broadcast"
          class="w-full h-96 object-cover group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/40 group-hover:bg-orange-500/40 transition duration-500"></div>
        <div class="absolute inset-0 flex flex-col justify-end text-center p-8 z-10">
          <div class="mb-3">
            <img src="assets/icons/bcf.png" alt="icon" class="mx-auto w-12 h-12">
          </div>
          <h3 class="text-white font-bold text-xl">Broadcast dan Film</h3>
          <a href="#" class="lihat-selengkapnya mt-3 inline-block text-sm text-orange-300 font-semibold hover:underline"
            data-target="bcf">
            Lihat Selengkapnya
          </a>
        </div>
      </div>

      <!-- Card DKV -->
      <div class="relative group rounded-xl overflow-hidden shadow-lg fade-in-up delay-400">
        <img src="assets/program/dkv.png" alt="DKV"
          class="w-full h-96 object-cover group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/40 group-hover:bg-orange-500/40 transition duration-500"></div>
        <div class="absolute inset-0 flex flex-col justify-end text-center p-8 z-10">
          <div class="mb-3">
            <img src="assets/icons/dkv.png" alt="icon" class="mx-auto w-12 h-12">
          </div>
          <h3 class="text-white font-bold text-xl">Desain Komunikasi Visual</h3>
          <a href="#" class="lihat-selengkapnya mt-3 inline-block text-sm text-orange-300 font-semibold hover:underline"
            data-target="dkv">
            Lihat Selengkapnya
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= SECTION DETAIL JURUSAN (DINAMIS) ================= -->
<section id="jurusan-detail-wrapper" class="py-20 bg-white hidden opacity-0 transition duration-700 transform translate-y-10">
  <div class="max-w-7xl mx-auto px-4 md:px-8" id="jurusan-detail-content">
    <!-- Konten detail jurusan akan dimasukkan lewat JavaScript -->
  </div>
</section>

<!-- ================= STYLE ANIMASI ================= -->
<style>
.fade-in-up {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.8s ease-out;
}
.fade-in-up.show {
  opacity: 1;
  transform: translateY(0);
}
.delay-100 { transition-delay: 0.1s; }
.delay-200 { transition-delay: 0.2s; }
.delay-300 { transition-delay: 0.3s; }
.delay-400 { transition-delay: 0.4s; }
</style>

<!-- ================= SCRIPT UNTUK TOGGLE ================= -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".lihat-selengkapnya");
    const wrapper = document.getElementById("jurusan-detail-wrapper");
    const content = document.getElementById("jurusan-detail-content");

    // Data detail jurusan
    const details = {
      pplg: `
        <div class="mb-12 text-center fade-in-up show">
          <h2 class="text-3xl md:text-4xl font-bold text-orange-600 mb-2">Pengembangan Perangkat Lunak dan Gim (PPLG)</h2>
          <p class="text-gray-700 text-lg">Menguasai dunia pemrograman dan industri gim modern</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden fade-in-up">
            <img src="assets/program/website.jpg" alt="Website" class="w-full h-48 object-cover">
            <div class="p-6">
              <h3 class="font-bold text-lg text-gray-900 mb-2">Pengembangan <span class="text-orange-600">Website</span></h3>
              <p class="text-gray-600">Belajar HTML, CSS, JavaScript, hingga framework modern untuk membangun website responsif.</p>
            </div>
          </div>
          <div class="bg-white rounded-xl shadow-lg overflow-hidden fade-in-up delay-100">
            <img src="assets/program/android.jpg" alt="Android" class="w-full h-48 object-cover">
            <div class="p-6">
              <h3 class="font-bold text-lg text-gray-900 mb-2">Pengembangan <span class="text-orange-600">Android</span></h3>
              <p class="text-gray-600">Membuat aplikasi mobile berbasis Android dengan teknologi terkini.</p>
            </div>
          </div>
          <div class="bg-white rounded-xl shadow-lg overflow-hidden fade-in-up delay-200">
            <img src="assets/program/game.jpg" alt="Gim" class="w-full h-48 object-cover">
            <div class="p-6">
              <h3 class="font-bold text-lg text-gray-900 mb-2">Pengembangan <span class="text-orange-600">Gim</span></h3>
              <p class="text-gray-600">Mempelajari konsep, desain, hingga implementasi gim interaktif.</p>
            </div>
          </div>
        </div>
      `,
      tkj: `
        <div class="mb-12 text-center fade-in-up show">
          <h2 class="text-3xl md:text-4xl font-bold text-orange-600 mb-2">Teknik Jaringan Komputer dan Telekomunikasi (TKJ)</h2>
          <p class="text-gray-700 text-lg">Mendalami jaringan komputer, server, dan keamanan jaringan.</p>
        </div>
        <img src="assets/program/tkj-detail.jpg" alt="TKJ" class="rounded-xl shadow-lg mb-8 mx-auto fade-in-up">
      `,
      bcf: `
        <div class="mb-12 text-center fade-in-up show">
          <h2 class="text-3xl md:text-4xl font-bold text-orange-600 mb-2">Broadcast dan Film (BCF)</h2>
          <p class="text-gray-700 text-lg">Fokus pada produksi film, editing video, dan broadcasting profesional.</p>
        </div>
        <img src="assets/program/bcf-detail.jpg" alt="BCF" class="rounded-xl shadow-lg mb-8 mx-auto fade-in-up">
      `,
      dkv: `
        <div class="mb-12 text-center fade-in-up show">
          <h2 class="text-3xl md:text-4xl font-bold text-orange-600 mb-2">Desain Komunikasi Visual (DKV)</h2>
          <p class="text-gray-700 text-lg">Desain grafis, ilustrasi, animasi, hingga visual branding kreatif.</p>
        </div>
        <img src="assets/program/dkv-detail.jpg" alt="DKV" class="rounded-xl shadow-lg mb-8 mx-auto fade-in-up">
      `
    };

    // Klik "Lihat Selengkapnya"
    links.forEach(link => {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        const target = this.getAttribute("data-target");

        // Masukkan detail sesuai jurusan
        content.innerHTML = details[target] + `
          <div class="mt-12 text-center fade-in-up">
            <a href="#" id="close-detail" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-semibold transition transform hover:scale-105">
              ← Kembali ke Program
            </a>
          </div>
        `;

        // Tampilkan wrapper dengan animasi
        wrapper.classList.remove("hidden");
        setTimeout(() => {
          wrapper.classList.remove("opacity-0", "translate-y-10");
        }, 50);

        // Scroll ke detail
        wrapper.scrollIntoView({ behavior: "smooth" });

        // Event tombol kembali
        document.getElementById("close-detail").addEventListener("click", function (e) {
          e.preventDefault();
          wrapper.classList.add("opacity-0", "translate-y-10");
          setTimeout(() => {
            wrapper.classList.add("hidden");
            content.innerHTML = "";
            document.getElementById("program").scrollIntoView({ behavior: "smooth" });
          }, 500);
        });

        // Re-observe animasi
        const newElements = content.querySelectorAll(".fade-in-up");
        newElements.forEach(el => observer.observe(el));
      });
    });

    // Animasi scroll untuk card & detail
    const elements = document.querySelectorAll(".fade-in-up");
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
        } else {
          entry.target.classList.remove("show"); // biar bisa berulang saat scroll
        }
      });
    }, { threshold: 0.2 });

    elements.forEach(el => observer.observe(el));
  });
</script>

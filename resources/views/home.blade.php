<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TI UNIMUS | HOME</title>

    <!-- Inline Tailwind (copied minimal used in welcome) to keep styling self-contained -->
    <style>
      /* small subset of Tailwind utilities used by this page (from welcome.blade) */
      *,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}html{line-height:1.5;font-family:ui-sans-serif,system-ui,-apple-system,'Segoe UI',Roboto,'Helvetica Neue',Arial}body{margin:0}img,video{max-width:100%;height:auto}a{color:inherit;text-decoration:none}.
      min-h-screen{min-height:100vh}.mx-auto{margin-left:auto;margin-right:auto}.max-w-7xl{max-width:80rem}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-12{padding-top:3rem;padding-bottom:3rem}.text-center{text-align:center}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-2xl{font-size:1.5rem;line-height:2rem}.font-semibold{font-weight:600}.text-gray-700{color:#374151}.text-gray-500{color:#6b7280}.rounded-xl{border-radius:0.75rem}.bg-white{background:#fff}.grid{display:grid}.gap-6{gap:1.5rem}.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0,1fr))}@media(min-width:768px){.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0,1fr))}}.flex{display:flex}.items-center{align-items:center}.justify-between{justify-content:space-between}.space-x-4>*+*{margin-left:1rem}.btn{display:inline-block;padding:.5rem 1rem;background:#0b74de;color:#fff;border-radius:.5rem}
    </style>
  </head>
  <body class="min-h-screen bg-gray-100">
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto p-6 flex items-center justify-between">
        <div class="flex items-center space-x-4">
          <img src="/images/ti-unimus.svg" alt="Logo Teknologi Informasi UNIMUS" style="width:160px;height:48px;object-fit:contain">
          <div>
            <div class="font-semibold text-2xl">Teknologi Informasi - UNIMUS</div>
            <div class="text-gray-500 text-sm">Situs resmi tugas mingguan</div>
          </div>
        </div>

        <nav>
          @if (Route::has('login'))
            <div class="flex items-center space-x-4">
              @auth
                <a href="{{ url('/home') }}" class="text-gray-700">Dashboard</a>
              @else
                <a href="{{ route('login') }}" class="text-gray-700">Log in</a>

                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="btn">Register</a>
                @endif
              @endauth
            </div>
          @endif
        </nav>
      </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-12">
      <section class="text-center">
        <h1 class="text-3xl font-semibold text-gray-700">Selamat Datang di Situs TI UNIMUS</h1>
        <p class="text-gray-500 mt-4">Kumpulan tugas, berita, dan profil yang dibuat untuk keperluan pembelajaran.</p>
        <div class="mt-6">
          <a href="/berita" class="btn">Lihat Berita</a>
        </div>
      </section>

      <section class="mt-12">
        <div class="grid gap-6 md:grid-cols-3">
          <a href="/berita" class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="font-semibold">Berita</h3>
            <p class="text-gray-500 mt-2">Baca artikel dan update terbaru dari jurusan.</p>
          </a>

          <a href="/profile" class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="font-semibold">Profil</h3>
            <p class="text-gray-500 mt-2">Informasi dosen, mahasiswa, dan struktur organisasi.</p>
          </a>

          <a href="/kontak" class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="font-semibold">Kontak</h3>
            <p class="text-gray-500 mt-2">Hubungi kami untuk pertanyaan lebih lanjut.</p>
          </a>
        </div>
      </section>
    </main>

    <footer class="border-t py-6 text-center text-gray-500">
      © {{ date('Y') }} TI UNIMUS — Dibuat untuk tugas mingguan
    </footer>
  </body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profil - TI UNIMUS</title>
		<style>
			/* Minimal inline utilities used across home/profile */
			*,::after,::before{box-sizing:border-box}html{line-height:1.5;font-family:ui-sans-serif,system-ui,-apple-system,'Segoe UI',Roboto,'Helvetica Neue',Arial}body{margin:0;background:#f3f4f6;color:#111827}img{max-width:100%;height:auto}.
			max-w-7xl{max-width:80rem}.mx-auto{margin-left:auto;margin-right:auto}.p-6{padding:1.5rem}.rounded-xl{border-radius:.75rem}.bg-white{background:#fff}.text-gray-500{color:#6b7280}.text-gray-700{color:#374151}.font-semibold{font-weight:600}.flex{display:flex}.items-center{align-items:center}.justify-between{justify-content:space-between}.space-x-4>*+*{margin-left:1rem}.btn{display:inline-block;padding:.5rem 1rem;background:#0b74de;color:#fff;border-radius:.5rem}
		</style>
	</head>
	<body>
		<header class="bg-white shadow">
			<div class="max-w-7xl mx-auto p-6 flex items-center justify-between">
				<div class="flex items-center space-x-4">
					<img src="/images/ti-unimus.svg" alt="Logo Teknologi Informasi UNIMUS" style="width:160px;height:48px;object-fit:contain">
				</div>

				<nav>
					@if (Route::has('login'))
						<div class="flex items-center space-x-4">
							@auth
								<a href="{{ url('/home') }}" class="text-gray-700">Home</a>
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

		<main class="max-w-7xl mx-auto p-6">
			<div class="bg-white rounded-xl p-6">
				<div style="display:flex;gap:1.5rem;flex-wrap:wrap;align-items:center">
					<div style="flex:0 0 150px">
						<img src="https://via.placeholder.com/150" alt="Foto Profil" style="width:150px;height:150px;border-radius:12px;object-fit:cover">
					</div>

					<div style="flex:1;min-width:200px">
						<h2 class="font-semibold text-gray-700" style="font-size:1.5rem">Kukuh Pradiyanto Bekti</h2>
						<p class="text-gray-500" style="margin-top:6px">NIM: 13242420024</p>
						<p class="text-gray-500">Program Studi: Teknologi informasi</p>

						<div style="margin-top:12px">
							<a href="/" class="btn">Kembali ke Home</a>
						</div>
					</div>
				</div>

				<section style="margin-top:18px">
					<h3 class="font-semibold text-gray-700">Tentang</h3>
					<p class="text-gray-500" style="margin-top:8px">Mahasiswa aktif pada Program Studi Teknologi informasi yang memiliki ketertarikan pada pengembangan web, basis data, dan sistem informasi. Halaman ini dibuat sebagai bagian dari tugas mingguan.</p>
				</section>

				<section style="margin-top:18px">
					<h3 class="font-semibold text-gray-700">Keahlian / Tugas</h3>
					<ul style="margin-top:8px" class="text-gray-500">
						<li>• Pengembangan aplikasi web menggunakan Laravel</li>
						<li>• Dasar-dasar HTML, CSS, JavaScript</li>
						<li>• Desain basis data dan query SQL</li>
					</ul>
				</section>
			</div>
		</main>

		<footer class="border-t py-6 text-center text-gray-500">
			© {{ date('Y') }} TI UNIMUS — Profil 
		</footer>
	</body>
</html>

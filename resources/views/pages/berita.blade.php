@extends('layouts.app')

@section('content')
<div style="max-width: 1200px; margin: 40px auto; font-family: Arial, sans-serif;">

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">

        <!-- Kolom Kiri -->
        <div>
            <!-- Hero News -->
            <section style="margin-bottom: 40px;">
                <img src="https://via.placeholder.com/800x400" alt="Hero News" style="width: 100%; border-radius: 8px;">
                <p style="margin-top: 15px; font-size: 15px; line-height: 1.6;">
                    Memberikan penghargaan kepada guru-guru berprestasi sebagai bentuk apresiasi atas dedikasi dan kontribusi mereka dalam pendidikan.
                </p>
                <a href="#" style="color: #f26522; font-weight: bold; text-decoration: none;">Read More >></a>
            </section>

            <!-- Populer -->
            <section style="margin-bottom: 40px;">
                <h3 style="border-bottom: 2px solid #f26522; padding-bottom: 8px;">Populer</h3>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; margin-top: 20px;">
                    <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                        <img src="https://via.placeholder.com/300x200" style="width: 100%;">
                        <div style="padding: 10px;">
                            <span style="background: #f26522; color: white; padding: 2px 6px; font-size: 12px;">Pendidikan</span>
                            <small style="display: block; color: gray; margin-top: 5px;">28 Januari 2025</small>
                            <h4 style="margin-top: 10px; font-size: 16px;">Rapat Guru</h4>
                        </div>
                    </div>
                    <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                        <img src="https://via.placeholder.com/300x200" style="width: 100%;">
                        <div style="padding: 10px;">
                            <span style="background: #f26522; color: white; padding: 2px 6px; font-size: 12px;">Pendidikan</span>
                            <small style="display: block; color: gray; margin-top: 5px;">28 Januari 2025</small>
                            <h4 style="margin-top: 10px; font-size: 16px;">Nonton Bioskop</h4>
                        </div>
                    </div>
                    <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                        <img src="https://via.placeholder.com/300x200" style="width: 100%;">
                        <div style="padding: 10px;">
                            <span style="background: #f26522; color: white; padding: 2px 6px; font-size: 12px;">Pendidikan</span>
                            <small style="display: block; color: gray; margin-top: 5px;">28 Januari 2025</small>
                            <h4 style="margin-top: 10px; font-size: 16px;">Apresiasi Guru</h4>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Global News -->
            <section style="margin-bottom: 40px;">
                <h3 style="border-bottom: 2px solid #f26522; padding-bottom: 8px;">Global News</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
                    <img src="https://via.placeholder.com/400x250" alt="Global News" style="width: 100%; border-radius: 6px;">
                    <div>
                        <div style="margin-bottom: 15px; border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                            <h4 style="font-size: 15px; margin-bottom: 5px;">Prestasi Prima juara 1 Lomba Film Kreativitas Pemuda 2024</h4>
                            <small style="color: gray;">Lomba 👁 331</small>
                        </div>
                        <div style="margin-bottom: 15px; border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                            <h4 style="font-size: 15px; margin-bottom: 5px;">Prestasi Prima juara 2 Lomba Basket SPECTADSE 2024</h4>
                            <small style="color: gray;">Lomba 👁 331</small>
                        </div>
                        <div style="margin-bottom: 15px; border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                            <h4 style="font-size: 15px; margin-bottom: 5px;">SMK Prestasi Prima juara 3 Lomba Desain Poster FESTIKA 2024</h4>
                            <small style="color: gray;">Lomba 👁 331</small>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Kolom Kanan (Sidebar) -->
        <aside>
            <!-- Search -->
            <div style="margin-bottom: 30px;">
                <input type="text" placeholder="Search..." style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 6px;">
            </div>

            <!-- Categories -->
            <div style="margin-bottom: 30px;">
                <h5 style="border-bottom: 2px solid #f26522; padding-bottom: 8px;">Kategori</h5>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 5px 0;"><a href="#" style="color: #333; text-decoration: none;">Hot News</a></li>
                    <li style="padding: 5px 0;"><a href="#" style="color: #333; text-decoration: none;">Pendidikan</a></li>
                    <li style="padding: 5px 0;"><a href="#" style="color: #333; text-decoration: none;">Event</a></li>
                    <li style="padding: 5px 0;"><a href="#" style="color: #333; text-decoration: none;">Prestasi</a></li>
                    <li style="padding: 5px 0;"><a href="#" style="color: #333; text-decoration: none;">Olahraga</a></li>
                </ul>
            </div>

            <!-- Recommended -->
            <div>
                <h5 style="border-bottom: 2px solid #f26522; padding-bottom: 8px;">Recommended</h5>
                <div style="display: flex; margin-bottom: 15px;">
                    <img src="https://via.placeholder.com/60x50" style="border-radius: 4px; margin-right: 10px;">
                    <div>
                        <small style="color: gray;">TKJ</small>
                        <p style="margin: 0;">Prestasi Prima Juara 3 & Harapan 1 LKS ITNSA Jakarta Timur</p>
                    </div>
                </div>
                <div style="display: flex; margin-bottom: 15px;">
                    <img src="https://via.placeholder.com/60x50" style="border-radius: 4px; margin-right: 10px;">
                    <div>
                        <small style="color: gray;">RPL</small>
                        <p style="margin: 0;">Prestasi Prima raih Juara di LKS Jakarta Timur SMKN 22</p>
                    </div>
                </div>
                <div style="display: flex; margin-bottom: 15px;">
                    <img src="https://via.placeholder.com/60x50" style="border-radius: 4px; margin-right: 10px;">
                    <div>
                        <small style="color: gray;">Bahasa</small>
                        <p style="margin: 0;">Prestasi Prima raih Medali Emas Bahasa Inggris di SAINTECH 2024</p>
                    </div>
                </div>
            </div>
        </aside>

    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

<div class="bo bo-wrap">
  <!-- Sidebar -->
  <aside class="bo-sidebar">
    <div class="bo-brand">Prima Board</div>
    <nav class="bo-nav">
      <a href="#" class="bo-item"><i data-lucide="layout-dashboard"></i><span>Home</span></a>
      <a href="#" class="bo-item"><i data-lucide="medal"></i><span>Leader Board</span></a>
      <a href="#" class="bo-item active"><i data-lucide="graduation-cap"></i><span>Daftar Siswa</span></a>
      <a href="#" class="bo-item"><i data-lucide="id-card"></i><span>Profile</span></a>
    </nav>
    <div class="bo-sep"></div>
    <div class="bo-logout">
      <a href="#" class="bo-item" style="padding-left:0">
        <i data-lucide="log-out"></i><span>Logout</span>
      </a>
    </div>
  </aside>

  <!-- Main -->
  <section class="bo-main">
    <div class="bo-toolbar">
      <div class="left">
        <button type="button" class="chip"><i data-lucide="sliders-horizontal"></i> Filter By</button>
      </div>
      <div class="right">
        <button class="btn-add" type="button" onclick="openAddModal()"><i data-lucide="user-plus"></i> Tambah Data Siswa</button>
      </div>
    </div>

    <!-- Table -->
    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="studentTable">
          @foreach($students as $student)
          <tr id="row-{{ $student->id }}">
            <td>{{ $student->id }}</td>
            <td class="nama">{{ $student->nama }}</td>
            <td class="kelas">{{ $student->kelas }}</td>
            <td class="jk">{{ $student->jenis_kelamin }}</td>
            <td class="status" data-status="{{ $student->status }}">
              @if(strtolower($student->status) === 'active')
                <span class="badge active">Active</span>
              @else
                <span class="badge grad">Graduated</span>
              @endif
            </td>
            <td>
              <button class="action-btn btn-edit" onclick="openEditModal({{ $student->id }})"><i data-lucide="edit"></i></button>
              <button class="action-btn btn-del" onclick="deleteStudent({{ $student->id }})"><i data-lucide="trash-2"></i></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
</div>

<!-- Modal Add (Compact Version) -->
<div id="addModal" class="modal">
  <div class="modal-card" style="max-width:500px; padding:20px 24px;">
    <div class="modal-header">
      <h2 style="font-size:20px; color:var(--orange-600)">Tambah Data Siswa</h2>
    </div>
    <form id="addForm">
      @csrf
      <div class="form-grid" style="grid-template-columns: 1fr 1fr; gap:10px;">
        <div class="form-group"><label>NIS</label><input type="text" name="nis" required style="padding:8px;"></div>
        <div class="form-group"><label>Tempat Lahir</label><input type="text" name="tempat_lahir" style="padding:8px;"></div>
        <div class="form-group"><label>Nama Lengkap</label><input type="text" name="nama" required style="padding:8px;"></div>
        <div class="form-group"><label>Tanggal Lahir</label><input type="date" name="tanggal_lahir" style="padding:8px;"></div>
        <div class="form-group"><label>Nama Wali</label><input type="text" name="nama_wali" style="padding:8px;"></div>
        <div class="form-group"><label>Alamat Domisili</label><input type="text" name="alamat_domisili" style="padding:8px;"></div>
        <div class="form-group"><label>Asal Sekolah</label><input type="text" name="asal_sekolah" style="padding:8px;"></div>
        <div class="form-group"><label>Agama</label><input type="text" name="agama" style="padding:8px;"></div>
        <div class="form-group"><label>Jenis Kelamin</label>
          <select name="jenis_kelamin" required style="padding:8px;">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group"><label>No. Telepon</label><input type="text" name="nomer_telepon" style="padding:8px;"></div>
        <div class="form-group"><label>Status</label>
          <select name="status" required style="padding:8px;">
            <option value="Active">Active</option>
            <option value="Graduated">Graduated</option>
          </select>
        </div>
      </div>
      <div class="modal-footer" style="margin-top:16px; justify-content:center; gap:10px;">
        <button type="submit" class="btn-upload" style="padding:10px 16px; font-size:14px;">
          <i data-lucide="upload"></i> Upload
        </button>
        <button type="button" class="btn-discard" onclick="closeAddModal()" style="padding:10px 16px; font-size:14px;">
          Discard
        </button>
      </div>
    </form>
  </div>
</div>


<!-- Modal Edit (sama dengan Add) -->
<div id="editModal" class="modal">
  <div class="modal-card">
    <div class="modal-header">
      <h2>Edit Data Siswa</h2>
    </div>
    <form id="editForm">
      @csrf
      @method('PUT')
      <input type="hidden" id="editId">
      <div class="form-grid">
        <div class="form-group"><label>NIS</label><input type="text" id="editNis" name="nis"></div>
        <div class="form-group"><label>Tempat Lahir</label><input type="text" id="editTempatLahir" name="tempat_lahir"></div>
        <div class="form-group"><label>Nama Lengkap</label><input type="text" id="editNama" name="nama"></div>
        <div class="form-group"><label>Tanggal Lahir</label><input type="date" id="editTanggalLahir" name="tanggal_lahir"></div>
        <div class="form-group"><label>Nama Wali</label><input type="text" id="editNamaWali" name="nama_wali"></div>
        <div class="form-group"><label>Alamat Domisili</label><input type="text" id="editAlamatDomisili" name="alamat_domisili"></div>
        <div class="form-group"><label>Asal Sekolah</label><input type="text" id="editAsalSekolah" name="asal_sekolah"></div>
        <div class="form-group"><label>Agama</label><input type="text" id="editAgama" name="agama"></div>
        <div class="form-group"><label>Jenis Kelamin</label>
          <select id="editJenisKelamin" name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group"><label>Nomor Telepon</label><input type="text" id="editNomerTelepon" name="nomer_telepon"></div>
        <div class="form-group"><label>Status</label>
          <select id="editStatus" name="status">
            <option value="Active">Active</option>
            <option value="Graduated">Graduated</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn-upload"><i data-lucide="upload"></i> Simpan</button>
        <button type="button" class="btn-discard" onclick="closeEditModal()">Batal</button>
      </div>
    </form>
  </div>
</div>

<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();

  // Modal Add
  function openAddModal() { document.getElementById('addModal').classList.add('active'); }
  function closeAddModal() { document.getElementById('addModal').classList.remove('active'); }

  document.getElementById('addForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    formData.append('_token', '{{ csrf_token() }}');
    const res = await fetch(`/backoffice/student`, { method: 'POST', body: formData });
    if (res.ok) location.reload();
    else alert("Gagal menambahkan data");
  });

  // Modal Edit
  function openEditModal(id) {
    const row = document.getElementById(`row-${id}`);
    document.getElementById('editId').value = id;
    document.getElementById('editNis').value = row.querySelector('.nis')?.innerText || '';
    document.getElementById('editNama').value = row.querySelector('.nama').innerText;
    document.getElementById('editKelas').value = row.querySelector('.kelas').innerText;
    document.getElementById('editJenisKelamin').value = row.querySelector('.jk').innerText.trim();
    document.getElementById('editStatus').value = row.querySelector('.status').dataset.status;
    document.getElementById('editModal').classList.add('active');
  }
  function closeEditModal() { document.getElementById('editModal').classList.remove('active'); }

  document.getElementById('editForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const id = document.getElementById('editId').value;
    const formData = new FormData(this);
    formData.append('_method', 'PUT');
    formData.append('_token', '{{ csrf_token() }}');

    const res = await fetch(`/backoffice/student/${id}`, { method: 'POST', body: formData });
    if (res.ok) location.reload();
    else alert("Gagal update data");
  });

  // Delete
  async function deleteStudent(id) {
    if (!confirm("Yakin ingin menghapus data ini?")) return;
    const formData = new FormData();
    formData.append('_method', 'DELETE');
    formData.append('_token', '{{ csrf_token() }}');
    const res = await fetch(`/backoffice/student/${id}`, { method: 'POST', body: formData });
    if (res.ok) document.getElementById(`row-${id}`).remove();
    else alert("Gagal menghapus data");
  }
</script>
@endsection

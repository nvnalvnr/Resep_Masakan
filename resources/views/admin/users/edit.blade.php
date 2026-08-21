<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Role User - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-role-sidebar active="users" />

    <main class="admin-form-page role-sidebar-content">
        <section class="admin-form-card">
            <h1>Edit Role User</h1>
            <p>Ubah hak akses untuk {{ $user->name }}.</p>

            <form method="POST" action="{{ route('admin.users.update', $user) }}">
                @csrf
                @method('PUT')

                <div class="admin-form-field">
                    <label for="name">Nama</label>
                    <input id="name" value="{{ $user->name }}" disabled>
                </div>

                <div class="admin-form-field">
                    <label for="email">Email</label>
                    <input id="email" value="{{ $user->email }}" disabled>
                </div>

                <div class="admin-form-field">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="user" @selected(old('role', $user->role) === 'user')>User</option>
                        <option value="admin" @selected(old('role', $user->role) === 'admin')>Admin</option>
                    </select>
                    @error('role')
                        <span class="admin-form-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="admin-form-actions">
                    <a href="{{ route('admin.users.index') }}">Batal</a>
                    <button type="submit">Simpan Perubahan</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>

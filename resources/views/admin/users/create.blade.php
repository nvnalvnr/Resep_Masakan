<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-role-sidebar active="users" />

    <main class="admin-form-page role-sidebar-content">
        <section class="admin-form-card">
            <h1>Tambah User</h1>
            <p>Buat akun baru dan tentukan role aksesnya.</p>

            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf

                <div class="admin-form-field">
                    <label for="name">Nama</label>
                    <input id="name" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')<span class="admin-form-error">{{ $message }}</span>@enderror
                </div>

                <div class="admin-form-field">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                    @error('email')<span class="admin-form-error">{{ $message }}</span>@enderror
                </div>

                <div class="admin-form-field">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="user" @selected(old('role') === 'user')>User</option>
                        <option value="admin" @selected(old('role') === 'admin')>Admin</option>
                    </select>
                    @error('role')<span class="admin-form-error">{{ $message }}</span>@enderror
                </div>

                <div class="admin-form-field">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" required>
                    @error('password')<span class="admin-form-error">{{ $message }}</span>@enderror
                </div>

                <div class="admin-form-field">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required>
                </div>

                <div class="admin-form-actions">
                    <a href="{{ route('admin.users.index') }}">Batal</a>
                    <button type="submit">Tambah User</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>

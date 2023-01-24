# Sistem Informasi Pondok

## Tabel
1. User
    - id (primary_key)
    - name
    - email
    - password

2. Santri
    - id
    - user_id (foreign_key)
    - asrama_id
    - NISN
    - NIK
    - TTL
    - Alamat

3. Asrama
    - id
    - nama

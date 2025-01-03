import subprocess
import sys

def get_wifi_profiles_linux():
    """Menampilkan profil WiFi dan password di Linux."""
    try:
        # Mendapatkan daftar koneksi yang aktif
        active_output = subprocess.check_output(['nmcli', '-t', '-f', 'NAME', 'c', 'show', '--active']).decode('utf-8').strip()
        active_profiles = active_output.split('\n')

        print("Profil WiFi di Linux:")
        for profile in active_profiles:
            try:
                # Mendapatkan detail password dari koneksi aktif
                password_output = subprocess.check_output(['nmcli', '-s', '-g', '802-11-wireless-security.psk', 'c', 'show', profile]).decode('utf-8').strip()
                password = password_output if password_output else "Tidak ditemukan (tidak disimpan)"
                print(f"- {profile}: {password}")
            except subprocess.CalledProcessError:
                print(f"- {profile}: Gagal mendapatkan detail atau tidak memiliki password")
    except FileNotFoundError:
        print("Perintah 'nmcli' tidak ditemukan. Pastikan Anda menggunakan Linux dan nmcli sudah terinstal.")

# Menentukan sistem operasi
if sys.platform.startswith('win'):
    get_wifi_profiles_windows()
elif sys.platform.startswith('linux'):
    get_wifi_profiles_linux()
else:
    print("Skrip ini hanya mendukung Windows dan Linux.")
function submitReservation() {
    const nama = document.getElementById("nama").value;
    const nomor = document.getElementById("nomor").value;
    const jumlah = document.getElementById("jumlah").value;
    const tanggal = document.getElementById("tanggal").value;
    const waktu = document.getElementById("waktu").value;

    if (!nama || !nomor || !jumlah || !tanggal || !waktu) {
        alert("Harap lengkapi semua data sebelum memesan.");
        return;
    }

    const confirmationMessage = document.getElementById("confirmationMessage");
    confirmationMessage.innerHTML = `Terima kasih, ${nama}! Reservasi untuk ${jumlah} orang pada tanggal ${tanggal} jam ${waktu} berhasil dibuat. Kami akan menghubungi Anda melalui nomor ${nomor} jika ada informasi lebih lanjut.`;
}

    document.getElementById("reservationForm").reset();







    
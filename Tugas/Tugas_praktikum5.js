// eksternal
function cekNilai() {
    let nim = document.getElementById("nim").value.trim();
    let nilai = parseInt(document.getElementById("nilai").value);
    let teks = document.getElementById("hasil");

    // Validasi input
    if (nim === "") {
        teks.innerHTML = "Harap masukkan NIM dan nilai yang valid!";
        return;
    }

    let hurufMutu;
    if (nilai >= 80 && nilai <= 100) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else if (nilai >= 0) {
        hurufMutu = "E";
    } else {
        teks.innerHTML = "Nilai tidak valid!";
        return;
    }

    teks.innerHTML = `NIM: ${nim} <br> Huruf Mutu: <b>${hurufMutu}</b>`;
}

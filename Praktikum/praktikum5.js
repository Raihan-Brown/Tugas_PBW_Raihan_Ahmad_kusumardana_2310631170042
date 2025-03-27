alert('Halo bang')
console.log('ini sebuah console')

function contohLet(){
    let y = 20 
    if (true){
        let y = 30;
        console.log('Nilai dalam blok', y)
    }
    console.log('Nilai diluar blok', y)
}

contohLet();

var usia = 20
const x = 1
let y = 3
console.log('Umur Saya '+ usia)

// let nama =  'Raihan Ahmad Kusumardana' //string
// let usia = 20 //integer
// let tinggiBadan = 163.2 //double atau float
// let beratBadan = 50
// let uang = 2

if(uang == null){
    uang = "Kosong euy"
} else{
    // uang
    uang = "Kepo lu"
}

// switch (uang){
//     case 1:
//         uang = "Punya uang tapi sedikit"
//         break;
//     case 2:
//         uang = "Ada duit mah pokoknya cukup"
//         break;
//     default:
//         uang = "Dompet Kosong euy"

// }

let uangAwal = 100000
let uangTambahan = 20000
const uangTotal = uangAwal + uangTambahan

// alert('Nama saya adalah '+ nama) //pop up

alert(`Nama saya ${nama}, Usia saya ${usia}, Tinggi badan saya ${tinggiBadan}, Berat badan saya ${beratBadan} kg, dan  ${uang}`);

alert(`Pagi-pagi saya dikasih uang sama emak Rp.${uangAwal} Terus siangnya di TF lagi sama emak Rp.${uangTambahan} Jadi jumlah uang yang saya punya adalah Rp.${uangTotal} `)


array

let namaPanggilan = [
    'Han',
    'Rai',
    'Rehan'
]

namaPanggilan.push('Handoko', 'Woy') // menambahkan index array
namaPanggilan.shift() // menghapus salah satu index
namaPanggilan.pop() // menghapus salah satu index array yang di tambahkan
alert(namaPanggilan)
alert(namaPanggilan[0])
console.log(namaPanggilan.length) //mengetahui panjang array nya.


let mahasiswa = {
    jurusan : "Komputer",
    Semester : 4,
    Prodi : "Informatika"
};
console.log(mahasiswa.Prodi)
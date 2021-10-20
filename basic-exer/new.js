// let jawaban =   confirm('Do you want to go?')
// if(jawaban) {
//     window.location = "https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"
// } else{
//     document.write('Ok then')
// }


const nama = 'My Name is Bruh'
const alamat = 'Malang'
const gender = 'Male'

document.getElementById('name').innerHTML = nama
document.getElementById('alamat').innerHTML = alamat
document.getElementById('gender').innerHTML = gender

// alert("Bruh u got rickrolled!");


//incr
let a = 5;
let b = 6;
let c = a + b;
let d = a - b;
let e = a * b;
let f = a / b;
let g = a % b;
document.getElementById('penjumlahan').innerHTML = c;
document.getElementById('pengurangan').innerHTML = d;
document.getElementById('perkalian').innerHTML = e;
document.getElementById('pembagian').innerHTML = f;
document.getElementById('modulus').innerHTML = g;


let sayuran = ["bayam", "kangkung", "kol", "tomat"]
document.getElementById('sayur').innerHTML = sayuran[1]

let biodata = {
    nama: "Indra",
    alamat: "Malang",
    umur: "17",   
}
document.getElementById('bio').innerHTML = biodata.nama + " tinggal di " + biodata.alamat + " berumur " + biodata.umur;


// let nama = "indra";
// let kelas = "XIR6";

// document.write("Nama saya adalah "+nama);
// document.write(" dari kelas " +kelas);

// document.getElementById('hitng').innerHTML = hitung;









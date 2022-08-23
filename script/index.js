function HargaTotal() {
var myForm = document.pemesanan;
var total1;
var total2;
var total3;
var total4;
var total5;
var total6;
var total7;
var durasi1 = parseInt(myForm.durasi1.value);
var durasi2 = parseInt(myForm.durasi2.value);
var durasi3 = parseInt(myForm.durasi3.value);
var durasi4 = parseInt(myForm.durasi4.value);
var durasi5 = parseInt(myForm.durasi5.value);
var durasi6 = parseInt(myForm.durasi6.value);
var durasi7 = parseInt(myForm.durasi7.value);


if(myForm.durasi1.value == "") durasi1=0;
if(myForm.durasi2.value == "") durasi2=0;
if(myForm.durasi3.value == "") durasi3=0;
if(myForm.durasi4.value == "") durasi4=0;
if(myForm.durasi5.value == "") durasi5=0;
if(myForm.durasi6.value == "") durasi6=0;
if(myForm.durasi7.value == "") durasi7=0;

total1 = parseInt(myForm.harga1.value)*durasi1;
total2 = parseInt(myForm.harga2.value)*durasi2;
total3 = parseInt(myForm.harga3.value)*durasi3;
total4 = parseInt(myForm.harga4.value)*durasi4;
total5 = parseInt(myForm.harga5.value)*durasi5;
total6 = parseInt(myForm.harga6.value)*durasi6;
total7 = parseInt(myForm.harga7.value)*durasi7;

myForm.total.value = total1 + total2 + total3 + total4 + total5 + total6 + total7;
}

function diskon() {
var myForm = document.pemesanan;

if(myForm.total.value < 1000000) {
myForm.potongan.value = 0;
}
else {
myForm.potongan.value = 300000;
}
}

function TotalBayar() {
var myForm = document.pemesanan;

myForm.bayar.value = parseInt(myForm.total.value) - parseInt(myForm.potongan.value);
}

function proses() {
HargaTotal();
diskon();
TotalBayar();
}

function batal() {
var element = document.pemesanan;

element.durasi1.value = "";
element.durasi2.value = "";
element.durasi3.value = "";
element.durasi4.value = "";
element.durasi5.value = "";
element.durasi6.value = "";
element.durasi7.value = "";
element.total.value = "";
element.potongan.value = "";
element.bayar.value = "";
}
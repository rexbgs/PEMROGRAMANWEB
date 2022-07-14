//bagian menu
function menu(){
	alert(" OK dan BUKA TAB BARU :D ");
}

//besar kecil berita gambar
function bigImg(x) {
    x.style.height = "150px";
    x.style.width = "200px";
}

function normalImg(x) {
    x.style.height = "120px";
    x.style.width = "160px";
}

//besar kecil galeri
function besar(x) {
    x.style.height = "350px";
    x.style.width = "450px";
}

function normal(x) {
    x.style.height = "300px";
    x.style.width = "400px";
}

//dashboardadmin
function cetak(){
	var nama = (document.fform.inama.value);
	var nim = (document.fform.inim.value);
	var fakultas = (document.fform.ifakultas.value);
	var prodi = (document.fform.iprodi.value);
	var angkatan = (document.fform.iangkatan.value);

	document.fform.onama.value=nama;
	document.fform.onim.value=nim;
	document.fform.ofakultas.value=fakultas;
	document.fform.oprodi.value=prodi;
	document.fform.oangkatan.value=angkatan;
}
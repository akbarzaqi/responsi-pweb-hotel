const checkRegistration = () => {
    var nama = (document.form2.nama.value);
    var alamat = (document.form2.alamat.value);
    var email = (document.form2.email.value);
    var password = document.form2.password.value;

    if(nama == "" || alamat == "" || email == "" || password == "") 
        alert("Data tidak boleh kosong");
    else 
        alert("Data berhasil ditambahkan");
}

const checkReservasi = () => {
  var name = document.form1.address.value;
  var email = document.form1.email.value;
  var phone = document.form1.phone.value;
  var address = document.form1.address.value;
  var checkin = document.form1.checkin.value;
  var checkout = document.form1.checkout.value;

  if (
    name == "" ||
    email == "" ||
    phone == "" ||
    address == "" ||
    checkin == "" ||
    checkout == ""
  )
    alert("Data tidak boleh kosong");
  else {
    alert("Data berhasil ditambahkan");
  }
};

const check = () => {
  var id = document.form1.id.value;
  var name = document.form1.name.value;
  var jenis = document.form1.jenis.value;
  var price = document.form1.price.value;
  var place = document.form1.place.value;

  if (id == "" || name == "" || jenis == "" || price == "" || place == "") {
    alert("Data tidak boleh kosong");
  } else {
    alert("Data berhasil ditambahkan");
  }
};
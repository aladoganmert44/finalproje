var menuBoyutu1Durum = "false";
var menuBoyutu2Durum = "false";
var menuBoyutu3Durum = "false";
var menuBoyutu4Durum = "false";
var hamburgerBoyu5 = "false";
var pizzaBoyu6 = "false";
var patatesBoyu7 = "false";
var kolaSecimi10 = "false";

function girisKayitAc(){
  document.getElementById("giriskayitMenusu").style.display = "block";
}
function girisKayitKapat(){
  document.getElementById("giriskayitMenusu").style.display = "none";
  document.getElementById("menuGiris").style.display = "block";
  document.getElementById("menuKayit").style.display = "none";
}
function menuGirisAc(){
  document.getElementById("menuGiris").style.display = "block";
  document.getElementById("menuKayit").style.display = "none";
}
function menuKayitAc(){
  document.getElementById("menuKayit").style.display = "block";
  document.getElementById("menuGiris").style.display = "none";
}
function sepeteEkleMenuAc(Id){
  document.getElementById("sepeteEkleMenu").style.display = "block";
  for (var i = 1; i <= 10; i++) {
    if(Id == "sepeteEkle"+i){
      document.getElementById("menuEkran"+i).style.display = "block";
    }
  }
}
function sepeteEkleMenuKapat(){
  document.getElementById("sepeteEkleMenu").style.display = "none";
  for (var i = 1; i <= 10; i++) {
    document.getElementById("menuEkran"+i).style.display = "none";
    document.getElementById("adet"+i).value = "1";
    document.getElementById("fiyat"+i).innerHTML = document.getElementById("fiyatDeger"+i).value + "₺";
  }
  document.getElementById("menuIcecek1").value = "Coca-Cola";
  document.getElementById("menuSos1").value = "İstemiyorum";
  document.getElementById("menuSos2").value = "İstemiyorum";
  document.getElementById("pizzaSecimi2").value = "Margarita";
  document.getElementById("menuIcecek2").value = "Coca-Cola";
  document.getElementById("aciDurumu").value = "Acısız";
  document.getElementById("pizzaSecimi6").value = "Margarita";
  document.getElementById("donutSecimi8").value = "Çilekli";
  document.getElementById("kurabiyeSecimi9").value = "Çikolatalı";
  for (var i = 1; i <= 4; i++) {
    document.getElementById("menuBoyutu"+i).value = "Orta";
  }
  document.getElementById("hamburgerBoyu5").value = "Orta";
  document.getElementById("pizzaBoyu6").value = "Orta";
  document.getElementById("patatesBoyu7").value = "Orta";
  document.getElementById("kolaSecimi10").value = "250 ml.";
}
function profilMenusuAc(){
  document.getElementById("profilMenusu").style.display = "block";
}
function profilMenusuKapat(){
  document.getElementById("profilMenusu").style.display = "none";
}

function adetArttir(Id){
  for (var i = 1; i <= 10; i++) {
    if(document.getElementById("adet"+i).value < 10){
      if (Id == "arti"+i) {
        document.getElementById("adet"+i).value++;
        var fiyat = document.getElementById("fiyatDeger"+i).value;
        if (menuBoyutu1Durum == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 5))+"₺";
        }
        else if (menuBoyutu2Durum == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 5))+"₺";
        }
        else if (menuBoyutu3Durum == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 5))+"₺";
        }
        else if (menuBoyutu4Durum == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 5))+"₺";
        }
        else if (hamburgerBoyu5 == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 4))+"₺";
        }
        else if (pizzaBoyu6 == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 2))+"₺";
        }
        else if (patatesBoyu7 == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 2))+"₺";
        }
        else if (kolaSecimi10 == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 2))+"₺";
        }
        else{
          document.getElementById("fiyat"+i).innerHTML = (parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat))+"₺";
        }
      }
    }
  }
}
function adetEksilt(Id){
  for (var i = 1; i <= 10; i++) {
    if(document.getElementById("adet"+i).value > 1){
      if (Id == "eksi"+i) {
        document.getElementById("adet"+i).value--;
        var fiyat = document.getElementById("fiyatDeger"+i).value;
        if (menuBoyutu1Durum == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 5))+"₺";
        }
        else if (menuBoyutu2Durum == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 5))+"₺";
        }
        else if (menuBoyutu3Durum == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 5))+"₺";
        }
        else if (menuBoyutu4Durum == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 5))+"₺";
        }
        else if (hamburgerBoyu5 == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 4))+"₺";
        }
        else if (pizzaBoyu6 == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 2))+"₺";
        }
        else if (patatesBoyu7 == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 2))+"₺";
        }
        else if (kolaSecimi10 == "true") {
          document.getElementById("fiyat"+i).innerHTML = ((parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat)) + (parseInt(document.getElementById("adet"+i).value) * 2))+"₺";
        }
        else{
          document.getElementById("fiyat"+i).innerHTML = (parseInt(document.getElementById("adet"+i).value) * parseInt(fiyat))+"₺";
        }
      }
    }
  }
}

function satinAlMenusu2Ac(){
  if (document.getElementById("sepetBosText").style.display == "none") {
    document.getElementById("satinAlMenu").style.display = "block";
  }
  else{
    alert("Sepetiniz boş!");
  }
}
function satinAlMenusu2Kapat(){
  document.getElementById("satinAlMenu").style.display = "none";
}


var indirimKontrol = "false";

setInterval(function(indirimKontrol) {
    if (menuBoyutu1Durum == "false" && document.getElementById("menuBoyutu1").value == "Büyük") {
          menuBoyutu1Durum = "true";
          var adet1 = document.getElementById("adet1").value;
          document.getElementById("fiyat1").innerHTML = ((parseInt(adet1) * 15) + (adet1 * 5)) + "₺";
    }
    if (menuBoyutu1Durum == "true" && document.getElementById("menuBoyutu1").value == "Orta") {
          menuBoyutu1Durum = "false";
          var adet1 = document.getElementById("adet1").value;
          document.getElementById("fiyat1").innerHTML = (parseInt(adet1) * 15) + "₺";
    }
    if (menuBoyutu2Durum == "false" && document.getElementById("menuBoyutu2").value == "Büyük") {
          menuBoyutu2Durum = "true";
          var adet2 = document.getElementById("adet2").value;
          document.getElementById("fiyat2").innerHTML = ((parseInt(adet2) * 20) + (adet2 * 5)) + "₺";
    }
    if (menuBoyutu2Durum == "true" && document.getElementById("menuBoyutu2").value == "Orta") {
          menuBoyutu2Durum = "false";
          var adet2 = document.getElementById("adet2").value;
          document.getElementById("fiyat2").innerHTML = (parseInt(adet2) * 20) + "₺";
    }
    if (menuBoyutu3Durum == "false" && document.getElementById("menuBoyutu3").value == "Büyük") {
          menuBoyutu3Durum = "true";
          var adet3 = document.getElementById("adet3").value;
          document.getElementById("fiyat3").innerHTML = ((parseInt(adet3) * 10) + (adet3 * 5)) + "₺";
    }
    if (menuBoyutu3Durum == "true" && document.getElementById("menuBoyutu3").value == "Orta") {
          menuBoyutu3Durum = "false";
          var adet3 = document.getElementById("adet3").value;
          document.getElementById("fiyat3").innerHTML = (parseInt(adet3) * 10) + "₺";
    }
    if (menuBoyutu4Durum == "false" && document.getElementById("menuBoyutu4").value == "Büyük") {
          menuBoyutu4Durum = "true";
          var adet4 = document.getElementById("adet4").value;
          document.getElementById("fiyat4").innerHTML = ((parseInt(adet4) * 10) + (adet4 * 5)) + "₺";
    }
    if (menuBoyutu4Durum == "true" && document.getElementById("menuBoyutu4").value == "Orta") {
          menuBoyutu4Durum = "false";
          var adet4 = document.getElementById("adet4").value;
          document.getElementById("fiyat4").innerHTML = (parseInt(adet4) * 10) + "₺";
    }
    if (hamburgerBoyu5 == "false" && document.getElementById("hamburgerBoyu5").value == "Büyük") {
          hamburgerBoyu5 = "true";
          var adet5 = document.getElementById("adet5").value;
          document.getElementById("fiyat5").innerHTML = ((parseInt(adet5) * 6) + (adet5 * 4)) + "₺";
    }
    if (hamburgerBoyu5 == "true" && document.getElementById("hamburgerBoyu5").value == "Orta") {
          hamburgerBoyu5 = "false";
          var adet5 = document.getElementById("adet5").value;
          document.getElementById("fiyat5").innerHTML = (parseInt(adet5) * 6) + "₺";
    }
    if (pizzaBoyu6 == "false" && document.getElementById("pizzaBoyu6").value == "Büyük") {
          pizzaBoyu6 = "true";
          var adet6 = document.getElementById("adet6").value;
          document.getElementById("fiyat6").innerHTML = ((parseInt(adet6) * 3) + (adet6 * 2)) + "₺";
    }
    if (pizzaBoyu6 == "true" && document.getElementById("pizzaBoyu6").value == "Orta") {
          pizzaBoyu6 = "false";
          var adet6 = document.getElementById("adet6").value;
          document.getElementById("fiyat6").innerHTML = (parseInt(adet6) * 3) + "₺";
    }
    if (patatesBoyu7 == "false" && document.getElementById("patatesBoyu7").value == "Büyük") {
          patatesBoyu7 = "true";
          var adet7 = document.getElementById("adet7").value;
          document.getElementById("fiyat7").innerHTML = ((parseInt(adet7) * 5) + (adet7 * 2)) + "₺";
    }
    if (patatesBoyu7 == "true" && document.getElementById("patatesBoyu7").value == "Orta") {
          patatesBoyu7 = "false";
          var adet7 = document.getElementById("adet7").value;
          document.getElementById("fiyat7").innerHTML = (parseInt(adet7) * 5) + "₺";
    }
    if (kolaSecimi10 == "false" && document.getElementById("kolaSecimi10").value == "1 lt.") {
          kolaSecimi10 = "true";
          var adet10 = document.getElementById("adet10").value;
          document.getElementById("fiyat10").innerHTML = ((parseInt(adet10) * 3) + (adet10 * 2)) + "₺";
    }
    if (kolaSecimi10 == "true" && document.getElementById("kolaSecimi10").value == "250 ml.") {
          kolaSecimi10 = "false";
          var adet10 = document.getElementById("adet10").value;
          document.getElementById("fiyat10").innerHTML = (parseInt(adet10) * 3) + "₺";
    }
    if (location.href == "http://localhost/#sepetim") {
      document.getElementById("satinAlMenusu").style.display = "block";
    }
    if (location.href != "http://localhost/#sepetim") {
      document.getElementById("satinAlMenusu").style.display = "none";
    }

    if ((parseInt(document.getElementById("toplamUcretDeger").innerHTML) >= 50) && (indirimKontrol == "false") && (document.getElementById("oturumDeger").innerHTML == "True")) {
      indirimKontrol = "true";
      var toplamUcretDeger = parseInt(document.getElementById("toplamUcretDeger").innerHTML);
      var indirimliToplamUcretDeger = toplamUcretDeger - ((toplamUcretDeger * 20 ) / 100);
      document.getElementById("toplamUcretDegerText").innerHTML = indirimliToplamUcretDeger + "₺";
      document.getElementById("indirimDeger").innerHTML = "Var";
      document.getElementById("indirimDeger").style.color = "#039900";
    }
    if (((parseInt(document.getElementById("toplamUcretDeger").innerHTML) < 50) && (indirimKontrol == "true")) || (document.getElementById("oturumDeger").innerHTML == "False")) {
      indirimKontrol = "false";
      document.getElementById("indirimDeger").innerHTML = "Yok";
      document.getElementById("indirimDeger").style.color = "#870000";
    }
    if (document.getElementById("odemeYontemi").value == "Kredi Kartı") {
      document.getElementById("kknumaratext").style.display = "block";
      document.getElementById("kkskttext").style.display = "block";
      document.getElementById("kkkodtext").style.display = "block";
      document.getElementById("kknumara").style.display = "block";
      document.getElementById("kkskt").style.display = "block";
      document.getElementById("kkkod").style.display = "block";
    }
    if (document.getElementById("odemeYontemi").value == "Kapıda Ödeme") {
      document.getElementById("kknumaratext").style.display = "none";
      document.getElementById("kkskttext").style.display = "none";
      document.getElementById("kkkodtext").style.display = "none";
      document.getElementById("kknumara").style.display = "none";
      document.getElementById("kkskt").style.display = "none";
      document.getElementById("kkkod").style.display = "none";
    }
}, 10, indirimKontrol);
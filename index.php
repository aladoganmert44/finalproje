<?php include 'php/islemkontrol.php'; ?> 
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Online Fast Food</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/sitelogo.png"/>
</head>
<body>

    <script language="Javascript1.1" src="js/main.js"></script>

    <img class="arkaplan" src="img/arkaplan.jpg" alt=""></img>


    <nav class="navbar">
        <ul>
            <div id="div">
                <li class="logo"><img src="img/sitelogo.png" alt="Yemek Sepeti" width="85" height="85"></img></li>
                <li><a href="#anasayfa">Ana Sayfa</a></li>
                <li id="menulerbtn"><a href="#menuler">Menüler</a></li>
                <li id="sepetimbtn"><a href="#sepetim">Sepetim</a></li>
                <li><a href="#hakkimda">Hakkımda</a></li>
                <li id="giriskayitBtn"><a onclick="girisKayitAc()">Giriş Yap</a></li>
                <li id="profilMenusuBtn"><a onclick="profilMenusuAc()">Profil</a></li>
            </div>
        </ul>
    </nav>
    <div class="sepeteEkleMenu" id="sepeteEkleMenu">
        
        <div class="islemMenu" id="islemMenu">
            <a onclick="sepeteEkleMenuKapat()"><img class="islemMenuKapat" src="img/kapat.png" alt="Kapat"></img></a>
            
            <div class="menuEkran1" id="menuEkran1">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/hamburgermenu.png" alt="Hamburger Menü"></img>
                    <h1>Hamburger Menü</h1>
                    <p>Hamburger + Patates + İçecek</p>
                    <input type="text" name="adet1" id="adet1" value="1" readonly="yes">
                    <a id="arti1" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi1" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat1">150₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger1" value="15"></input>
                    <label class="menuOzellikleri ozellik1">Menü Boyutu: </label>
                        <select class="combobox ozellik1" name="menuBoyutu1" id="menuBoyutu1">
                            <option value="Orta" selected="selected">Orta</option>
                            <option value="Büyük">Büyük [ +15₺ ]</option>
                        </select>
                    <label class="menuOzellikleri ozellik2">İçecek Seçimi: </label>
                        <select class="combobox ozellik2"  name="menuIcecek1" id="menuIcecek1">
                            <option value="Coca-Cola" selected="selected">Coca-Cola</option>
                            <option value="Sprite">Sprite</option>
                            <option value="Ayran">Ayran</option>
                            <option value="Su">Su</option>
                        </select>
                    <label class="menuOzellikleri ozellik3">1.Sos: </label>
                        <select class="combobox ozellik3"  name="menuSos1" id="menuSos1">
                            <option value="İstemiyorum" selected="selected">İstemiyorum</option>
                            <option value="Ketçap">Ketçap</option>
                            <option value="Mayonez">Mayonez</option>
                            <option value="Acı Sos">Acı Sos</option>
                        </select>
                    <label class="menuOzellikleri ozellik4">2.Sos: </label>
                        <select class="combobox ozellik4"  name="menuSos2" id="menuSos2">
                            <option value="İstemiyorum" selected="selected">İstemiyorum</option>
                            <option value="Ketçap">Ketçap</option>
                            <option value="Mayonez">Mayonez</option>
                            <option value="Acı Sos">Acı Sos</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle1" id="sepeteEkle1" value="Sepete Ekle"></input>
                </form>
            </div>

            <div class="menuEkran2" id="menuEkran2">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/pizzamenu.png" alt="Pizza Menü"></img>
                    <h1>Pizza Menü</h1>
                    <p>Pizza + İçecek</p>
                    <input type="text" name="adet2" id="adet2" value="1" readonly="yes">
                    <a id="arti2" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi2" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat2">20₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger2" value="20"></input>
                    <label class="menuOzellikleri ozellik1">Menü Boyutu: </label>
                        <select class="combobox ozellik1" name="menuBoyutu2" id="menuBoyutu2">
                            <option value="Orta" selected="selected">Orta</option>
                            <option value="Büyük">Büyük [ +5₺ ]</option>
                        </select>
                    <label class="menuOzellikleri ozellik2">Pizza Seçimi: </label>
                        <select class="combobox ozellik2" name="pizzaSecimi2" id="pizzaSecimi2">
                            <option value="Margarita" selected="selected">Margarita</option>
                            <option value="Süperos">Süperos</option>
                            <option value="Barbekü Soslu">Barbekü Soslu</option>
                            <option value="Dopdolu Extra">Dopdolu Extra</option>
                        </select>
                    <label class="menuOzellikleri ozellik3">İçecek Seçimi: </label>
                        <select class="combobox ozellik3"  name="menuIcecek2" id="menuIcecek2">
                            <option value="Coca-Cola" selected="selected">Coca-Cola</option>
                            <option value="Sprite">Sprite</option>
                            <option value="Ayran">Ayran</option>
                            <option value="Su">Su</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle2" id="sepeteEkle2" value="Sepete Ekle"></input>
                </form>
            </div>

            <div class="menuEkran3" id="menuEkran3">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/tavukmenu.png" alt="Tavuk Menü"></img>
                    <h1>Tavuk Menü</h1>
                    <p>Tavuk + Patates</p>
                    <input type="text" name="adet3" id="adet3" value="1" readonly="yes">
                    <a id="arti3" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi3" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat3">10₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger3" value="10"></input>
                    <label class="menuOzellikleri ozellik1">Menü Boyutu: </label>
                        <select class="combobox ozellik1" name="menuBoyutu3" id="menuBoyutu3">
                            <option value="Orta" selected="selected">Orta</option>
                            <option value="Büyük">Büyük [ +5₺ ]</option>
                        </select>
                    <label class="menuOzellikleri ozellik2">Acılı / Acısız: </label>
                        <select class="combobox ozellik2" name="aciDurumu3" id="aciDurumu">
                            <option value="Acısız" selected="selected">Acısız</option>
                            <option value="Acılı">Acılı</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle3" id="sepeteEkle3" value="Sepete Ekle"></input>
                </form>
            </div>

            <div class="menuEkran4" id="menuEkran4">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/sebzemenu.png" alt="Sebze Menü"></img>
                    <h1>Sebze Menü</h1>
                    <p>Sebze</p>
                    <input type="text" name="adet4" id="adet4" value="1" readonly="yes">
                    <a id="arti4" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi4" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat4">10₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger4" value="10"></input>
                    <label class="menuOzellikleri ozellik1">Menü Boyu: </label>
                        <select class="combobox ozellik1"  name="menuBoyutu4" id="menuBoyutu4">
                            <option value="Orta" selected="selected">Orta</option>
                            <option value="Büyük">Büyük [ +5₺ ]</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle4" id="sepeteEkle4" value="Sepete Ekle"></input>
                </form>
            </div>

            <div class="menuEkran5" id="menuEkran5">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/hamburger.png" alt="Hamburger"></img>
                    <h1>Hamburger</h1>
                    <p>Orta Boy Hamburger</p>
                    <input type="text" name="adet5" id="adet5" value="1" readonly="yes">
                    <a id="arti5" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi5" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat5">6₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger5" value="6"></input>
                    <label class="menuOzellikleri ozellik1">Hamburger Boyu: </label>
                        <select class="combobox ozellik1"  name="hamburgerBoyu5" id="hamburgerBoyu5">
                            <option value="Orta" selected="selected">Orta</option>
                            <option value="Büyük">Büyük [ +4₺ ]</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle5" id="sepeteEkle5" value="Sepete Ekle"></input>
                </form>
            </div>

            <div class="menuEkran6" id="menuEkran6">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/pizza.png" alt="Pizza"></img>
                    <h1>Pizza</h1>
                    <p>Orta Boy Pizza</p>
                    <input type="text" name="adet6" id="adet6" value="1" readonly="yes">
                    <a id="arti6" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi6" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat6">3₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger6" value="3"></input>
                    <label class="menuOzellikleri ozellik1">Pizza Seçimi: </label>
                        <select class="combobox ozellik1" name="pizzaSecimi6" id="pizzaSecimi6">
                            <option value="Margarita" selected="selected">Margarita</option>
                            <option value="Süperos">Süperos</option>
                            <option value="Barbekü Soslu">Barbekü Soslu</option>
                            <option value="Dopdolu Extra">Dopdolu Extra</option>
                        </select>
                    <label class="menuOzellikleri ozellik2">Pizza Boyu: </label>
                        <select class="combobox ozellik2"  name="pizzaBoyu6" id="pizzaBoyu6">
                            <option value="Orta" selected="selected">Orta</option>
                            <option value="Büyük">Büyük [ +2₺ ]</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle6" id="sepeteEkle6" value="Sepete Ekle"></input>
                </form>
            </div>

            <div class="menuEkran7" id="menuEkran7">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/patates.png" alt="Patates"></img>
                    <h1>Patates</h1>
                    <p>Orta Boy Patates</p>
                    <input type="text" name="adet7" id="adet7" value="1" readonly="yes">
                    <a id="arti7" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi7" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat7">5₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger7" value="5"></input>
                    <label class="menuOzellikleri ozellik1">Patates Boyu: </label>
                        <select class="combobox ozellik1"  name="patatesBoyu7" id="patatesBoyu7">
                            <option value="Orta" selected="selected">Orta</option>
                            <option value="Büyük">Büyük [ +2₺ ]</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle7" id="sepeteEkle7" value="Sepete Ekle"></input>
                </form>
            </div>

            <div class="menuEkran8" id="menuEkran8">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/donut.png" alt="Donut"></img>
                    <h1>Donut</h1>
                    <p>Donut</p>
                    <input type="text" name="adet8" id="adet8" value="1" readonly="yes">
                    <a id="arti8" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi8" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat8">2₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger8" value="2"></input>
                    <label class="menuOzellikleri ozellik1">Donut Seçimi: </label>
                        <select class="combobox ozellik1"  name="donutSecimi8" id="donutSecimi8">
                            <option value="Çilekli" selected="selected">Çilekli</option>
                            <option value="Kakaolu">Kakaolu</option>
                            <option value="Muzlu">Muzlu</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle8" id="sepeteEkle8" value="Sepete Ekle"></input>
                </form>
            </div>

            <div class="menuEkran9" id="menuEkran9">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/kurabiye.png" alt="Kurabiye"></img>
                    <h1>Kurabiye</h1>
                    <p>Kurabiye</p>
                    <input type="text" name="adet9" id="adet9" value="1" readonly="yes">
                    <a id="arti9" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi9" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat9">1₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger9" value="1"></input>
                    <label class="menuOzellikleri ozellik1">Kurabiye Seçimi: </label>
                        <select class="combobox ozellik1"  name="kurabiyeSecimi9" id="kurabiyeSecimi9">
                            <option value="Çikolatalı" selected="selected">Çikolatalı</option>
                            <option value="Çilekli">Çilekli</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle9" id="sepeteEkle9" value="Sepete Ekle"></input>
                </form>
            </div>

            <div class="menuEkran10" id="menuEkran10">
                <form id="menuEkranForm1" action="php/sepeteekle.php" method="post">
                    <img src="img/kola.png" alt="Kola"></img>
                    <h1>Coca-Cola</h1>
                    <p>Coca-Cola</p>
                    <input type="text" name="adet10" id="adet10" value="1" readonly="yes">
                    <a id="arti10" onclick="adetArttir(this.id)"><img class="adetArttir" src="img/arti.png" alt="Artı"></img></a>
                    <a id="eksi10" onclick="adetEksilt(this.id)"><img class="adetEksilt" src="img/eksi.png" alt="Eksi"></img></a>
                    <h2 id="fiyat10">3₺</h2>
                    <input type="text" class="fiyatDegerleri" id="fiyatDeger10" value="3"></input>
                    <label class="menuOzellikleri ozellik1">Coca-Cola Boyu: </label>
                        <select class="combobox ozellik1"  name="kolaSecimi10" id="kolaSecimi10">
                            <option value="250 ml." selected="selected">250 ml.</option>
                            <option value="1 lt.">1 lt. [ +2₺ ]</option>
                        </select>
                    <input type="submit" class="sepeteEkleBtn" name="sepeteEkle10" id="sepeteEkle10" value="Sepete Ekle"></input>
                </form>
            </div>

        </div>
    </div>
    <div class="sayfalar" id="anasayfa">
        <h1  class="anasayfaH1">Online Fast Food</h1>
        <p class="anasayfaP">Hemen şimdi oturum açın, 50₺ ve üzeri alışverişlerde %20 indirim kazanın!</p>
    </div>
    <div class="sayfalar" id="menuler">
        <div class="urunler">
            <div class="urun" id="urun1">
                <img src="img/hamburgermenu.png" alt="Hambuger Menü"></img><br><br>
                <h1>Hamburger Menü</h1>
                <p>119,90₺</p><br>
                <a id="sepeteEkle1" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
            <div class="urun" id="urun2">
                <img src="img/pizzamenu.png" alt="Pizza Menü"></img><br><br>
                <h1>Pizza Menü</h1>
                <p>149,99₺</p><br>
                <a id="sepeteEkle2" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
            <div class="urun" id="urun3">
                <img src="img/tavukmenu.png" alt="Tavuk Menü"></img><br><br>
                <h1>Tavuk Menü</h1>
                <p>99,99₺</p><br>
                <a id="sepeteEkle3" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
            <div class="urun" id="urun4">
                <img src="img/sebzemenu.png" alt="Sebze Menü"></img><br><br>
                <h1>Sebze Menü</h1>
                <p>69,90₺</p><br>
                <a id="sepeteEkle4" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
            <div class="urun" id="urun5">
                <img src="img/hamburger.png" alt="Hamburger"></img><br><br>
                <h1>Hamburger</h1>
                <p>79,90₺</p><br>
                <a id="sepeteEkle5" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
            <div class="urun" id="urun6">
                <img src="img/pizza.png" alt="Pizza"></img><br><br>
                <h1>Dilim Pizza</h1>
                <p>29,90₺</p><br>
                <a id="sepeteEkle6" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
            <div class="urun" id="urun7">
                <img src="img/patates.png" alt="Patates"></img><br><br>
                <h1>Patates</h1>
                <p>39,90₺</p><br>
                <a id="sepeteEkle7" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
            <div class="urun" id="urun8">
                <img src="img/donut.png" alt="Donut"></img><br><br>
                <h1>Donut</h1>
                <p>25₺</p><br>
                <a id="sepeteEkle8" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
            <div class="urun" id="urun9">
                <img src="img/kurabiye.png" alt="Kurabiye"></img><br><br>
                <h1>Kurabiye</h1>
                <p>9,90₺</p><br>
                <a id="sepeteEkle9" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
            <div class="urun" id="urun10">
                <img src="img/kola.png" alt="Kola"></img><br><br>
                <h1>250 ml. Kola</h1>
                <p>24,90₺</p><br>
                <a id="sepeteEkle10" onclick="sepeteEkleMenuAc(this.id)">Sepete Ekle</a>
            </div>
        </div>
    </div>

    <div class="sayfalar" id="sepetim">
        <form id="urunSepetForm1" action="php/sepettenkaldir.php" method="post">
            <div class="sepetBosText" id="sepetBosText">Sepetiniz Boş..</div>
            <div class="urunlerSepet">
                <div class="urunSepet" id="urunSepet1">
                    <img src="img/hamburgermenu.png" alt="Hamburger Menü"></img>
                    <h1>Hamburger Menü</h1>
                    <p id="fiyatSepet1">15₺</p>
                    <div id="menuOzellikleri1">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir1" id="urunKaldir1" value="Sepetten Kaldır"></input>
                </div>
                <div class="urunSepet" id="urunSepet2">
                    <img src="img/pizzamenu.png" alt="Pizza Menü"></img>
                    <h1>Pizza Menü</h1>
                    <p id="fiyatSepet2">20₺</p>
                    <div id="menuOzellikleri2">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir2" id="urunKaldir2" value="Sepetten Kaldır"></input>
                </div>
                <div class="urunSepet" id="urunSepet3">
                    <img src="img/tavukmenu.png" alt="Tavuk Menü"></img>
                    <h1>Tavuk Menü</h1>
                    <p id="fiyatSepet3">10₺</p>
                    <div id="menuOzellikleri3">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir3" id="urunKaldir3" value="Sepetten Kaldır"></input>
                </div>
                <div class="urunSepet" id="urunSepet4">
                    <img src="img/sebzemenu.png" alt="Sebze Menü"></img>
                    <h1>Sebze Menü</h1>
                    <p id="fiyatSepet4">10₺</p>
                    <div id="menuOzellikleri4">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir4" id="urunKaldir4" value="Sepetten Kaldır"></input>
                </div>
                <div class="urunSepet" id="urunSepet5">
                    <img src="img/hamburger.png" alt="Hamburger"></img>
                    <h1>Hamburger</h1>
                    <p id="fiyatSepet5">6₺</p>
                    <div id="menuOzellikleri5">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir5" id="urunKaldir5" value="Sepetten Kaldır"></input>
                </div>
                <div class="urunSepet" id="urunSepet6">
                    <img src="img/pizza.png" alt="Pizza"></img>
                    <h1>Dilim Pizza</h1>
                    <p id="fiyatSepet6">3₺</p>
                    <div id="menuOzellikleri6">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir6" id="urunKaldir6" value="Sepetten Kaldır"></input>
                </div>
                <div class="urunSepet" id="urunSepet7">
                    <img src="img/patates.png" alt="Patates"></img>
                    <h1>Patates</h1>
                    <p id="fiyatSepet7">5₺</p>
                    <div id="menuOzellikleri7">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir7" id="urunKaldir7" value="Sepetten Kaldır"></input>
                </div>
                <div class="urunSepet" id="urunSepet8">
                    <img src="img/donut.png" alt="Donut"></img>
                    <h1>Donut</h1>
                    <p id="fiyatSepet8">2₺</p>
                    <div id="menuOzellikleri8">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir8" id="urunKaldir8" value="Sepetten Kaldır"></input>
                </div>
                <div class="urunSepet" id="urunSepet9">
                    <img src="img/kurabiye.png" alt="Kurabiye"></img>
                    <h1>Kurabiye</h1>
                    <p id="fiyatSepet9">1₺</p>
                    <div id="menuOzellikleri9">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir9" id="urunKaldir9" value="Sepetten Kaldır"></input>
                </div>
                <div class="urunSepet" id="urunSepet10">
                    <img src="img/kola.png" alt="Kola"></img>
                    <h1>1 Litre Kola</h1>
                    <p id="fiyatSepet10">4₺</p>
                    <div id="menuOzellikleri10">2 Adet Büyük Boy Menü, Coca-Cola, Mayonez, Mayonez</div>
                    <input type="submit" name="urunSepetKaldir10" id="urunKaldir10" value="Sepetten Kaldır"></input>
                </div>
            </div>
        </form>
    </div>
    <div class="sayfalar" id="hakkimda">
        <h1 class="hakkimdaH1">Hakkımda</h1>
        <p class="hakkimdaP">
        Adres: fastfoodsiparis.com(temsili)<br>
        Telefon: 0549 000 00 00 <br>
        E-posta: lezzetliyemek@fastfood.com <br>
        Sosyal Medya: @onlinefastfood<br>
        Online Fast Food Sipariş ile mutlu yemekler!<br>
        Not: Lütfen aynı anda tüm öğeleri doldurmayın. <br>
        </p>
    </div>

    <div class="giriskayitMenusu" id="giriskayitMenusu">
        <img class="giriskayitArkaplan" src="img/arkaplan.jpg" alt=""></img>
        <a class="menuGirisBtn" onclick="menuGirisAc()">Giriş Yap</a>
        <a class="menuKayitBtn" onclick="menuKayitAc()">Kayıt Ol</a>
        <div class="menuGiris" id="menuGiris">
            <form id="girisForm" action="php/giris.php" method="post">
                <input class="textboxs textbox1" type="text" name="ka" placeholder="Kullanıcı Adı" required><br><br>
                <input class="textboxs textbox2" type="text" name="sifre" placeholder="Şifre" required><br><br><br>
                <input type="submit" name="girisbtn" class="butonlar" value="Giriş Yap"></input>
            </form>
        </div>
        <div class="menuKayit" id="menuKayit">
            <form id="kayitForm" action="php/kayit.php" method="post">
                <input class="textboxs textbox1" type="text" name="ka" placeholder="Kullanıcı Adı" required><br><br>
                <input class="textboxs textbox2" type="text" name="sifre" placeholder="Şifre" required><br><br><br>
                <input type="submit" href="php/kayit.php" name="kayitbtn" class="butonlar" value="Kayıt Ol"></input>
            </form>
        </div>
        <a onclick="girisKayitKapat()"><img class="Kapat" src="img/kapat.png" alt="Kapat"></img></a>
    </div>

    <div class="profilMenusu" id="profilMenusu">
        <img class="profilMenusuArkaplan" src="img/arkaplan.jpg" alt=""></img>
        <img class="uyeIcon" src="img/uye.png" alt="Üye"></img>
        <h1 id="profilUyeAdi" class="profilUyeAdi">Üye Adı</h1>
        <h1 id="siparisSayisi" class="siparisSayisi">Sipariş Sayısı</h1>
        <h1 id="siparisSayisiDeger" class="siparisSayisiDeger">0</h1>
        <a href="php/cikis.php"><img class="cikis" src="img/cikis.png" alt="Çıkış"></img></a>
        <a onclick="profilMenusuKapat()"><img class="Kapat" src="img/kapat.png" alt="Kapat"></img></a>
    </div>

    <div class="satinAlMenusu" id="satinAlMenusu">
        <div class="toplamUcret" id="toplamUcret">Toplam Ücret</div>
        <div class="toplamUcretDegerText" id="toplamUcretDegerText">0₺</div>
        <div class="toplamUcretDeger" id="toplamUcretDeger">0</div>
        <div class="indirimDurum" id="indirimDurum">İndirim Durumu</div>
        <div class="indirimDeger" id="indirimDeger">Yok</div>
        <a id="siparisVer" class="siparisVer" onclick="satinAlMenusu2Ac()">Satın Al</a>
    </div>

    <div class="oturumDeger" id="oturumDeger">False</div>

    <div class="satinAlMenu" id="satinAlMenu">

        <div class="satinAlMenusu2" id="satinAlMenusu2">
            <a onclick="satinAlMenusu2Kapat()"><img class="satinAlMenuKapat" src="img/kapat.png" alt="Kapat"></img></a>

            <form id="satinAlMenuForm1" action="php/satinal.php" method="post">
                <img class="satinAlMenuLogo" src="img/sitelogo.png" alt="Yemek Sepeti"></img>
                <h1>Yemek Sepeti</h1>
                <label class="satinAlMenuOzellikleri satinAlOzellik1">İsim ve Soyisim: </label>
                <input class="satinAlMenuOzellikleri2 satinAlOzellik1 textboxlar" type="text" name="isimsoyisim" id="isimsoyisim" required>
                <label class="satinAlMenuOzellikleri satinAlOzellik2">Şehir: </label>
                <input class="satinAlMenuOzellikleri2 satinAlOzellik2 textboxlar" type="text" name="sehir" id="sehir" required>
                <label class="satinAlMenuOzellikleri satinAlOzellik3">İlçe: </label>
                <input class="satinAlMenuOzellikleri2 satinAlOzellik3 textboxlar" type="text" name="ilce" id="ilce" required>
                <label class="satinAlMenuOzellikleri satinAlOzellik4">Ödeme Yöntemi: </label>
                    <select class="combobox satinAlMenuOzellikleri2 satinAlOzellik4"  name="odemeYontemi" id="odemeYontemi">
                        <option value="Kapıda Ödeme" selected="selected">Kapıda Ödeme</option>
                        <option value="Kredi Kartı">Kredi Kartı</option>
                    </select>
                <label class="satinAlMenuOzellikleri satinAlOzellik5">Adres: </label>
                <textarea class="satinAlMenuOzellikleri2 satinAlOzellik5 textarea" type="textarea" name="adres" id="adres" rows="3" cols="32" required></textarea>
                <label class="satinAlMenuOzellikleri satinAlOzellik6" id="kknumaratext">Kredi Kartı Numarası: </label>
                <input class="satinAlMenuOzellikleri2 satinAlOzellik6 textboxlar" type="text" name="kknumara" id="kknumara">
                <label class="satinAlMenuOzellikleri satinAlOzellik7" id="kkskttext">Son Kullanma Tarihi: </label>
                <input class="satinAlMenuOzellikleri2 satinAlOzellik7 textboxlar" type="text" name="kkskt" id="kkskt">
                <label class="satinAlMenuOzellikleri satinAlOzellik8" id="kkkodtext">Güvenlik Kodu: </label>
                <input class="satinAlMenuOzellikleri2 satinAlOzellik8 textboxlar" type="text" name="kkkod" id="kkkod">
                <input type="submit" class="satinAlBtn" name="satinAlBtn" id="satinAlBtn" value="Satın Al"></input>
            </form>
        </div>

    </div>
</body>
</html>
<?php include 'php/oturumkontrol.php'; ?>
<?php include 'php/sepetkontrol.php'; ?> 
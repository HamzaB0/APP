<!doctype html>
<html>
<head>
    <title>Capt'Ouvre</title>
    <link rel="SHORT ICON" href="LOGO-museum.png" type="image/jpg">
<style type="text/css">
body{
    box-sizing: border-box;
    align-items: center;
    height: 95vh;
    display: flex;
    justify-content: center;
    background: rgb(244, 238, 238);
}
.container{
    margin: 0 auto;
    min-height: 500px;
    padding-left: 40px;
    padding-right: 40px;
    display: flex;
    justify-content: center;
    text-align: center;
    align-items: center;
    background: white;
    border: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
}
.containerr{
    border-radius: 10px;
    margin: 15px;
    padding: 30px;
    display: block;
    background: white;
    border:none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
.login{
    text-align: center;
}
.input{
    outline: none;
    text-align: center;
    display: block;
    margin-top: 10px;
    width: 300px;
    height: 30px;
    border-radius: 5px;
    border-style: none;
    border: #ccd0d5;
    background:#f5f6f7;
    border-bottom: 2px solid black;
    box-shadow:0 0 12px rgba(0, 0, 0, 0.2);
}
.BD{
    display: inline;
}

.N{
    display: flex;
    justify-content:space-around;
    margin-bottom: 10px;
}
.namee{
    outline: none;
    text-align: center;
    display: block;
    margin-top: 10px;
    height: 30px;
    border-radius: 5px;
    border-style: none;
    border: #ccd0d5;
    background:#f5f6f7;
    border-bottom: 2px solid black;
    box-shadow:0 0 12px rgba(0, 0, 0, 0.2);
    width: 140px;
}
img{
    
    width: 180px;
    height: 200px;
}
a{
    text-decoration: none;
}
.deja{
    margin-top: 10px;
    display: flex;
    justify-content: center;
}
button{
    border: none;
    border-radius: 10px;
    width: 100px;
    height: 30px;
    background: rgb(219, 245, 221);
}
button:hover{
    background: rgb(143, 189, 147);
}
select{
    outline: none;
    border: none;
    border-radius: 5px;
    width: 90px;
    height: 30px;
    background: #f5f6f7;
    margin-bottom: 10px;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);;
    border-bottom:2px solid black;
}
.birthday{
    display: inline;
    justify-content: space-around;
}
.label{
    color: #606770;
    font-family: SFProText-Medium, Helvetica, Arial, sans-serif;
    font-size: 12px;
    font-weight: normal;
    line-height: 20px;
    margin-bottom: 0px;
    margin-top: 2px;
}
.label1{
    margin-right: 180px;
}
.label2{
    margin-right: 60px;
}
.inscrire{
    color: #1c1e21;
    font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif;
    font-size: 30px;
    line-height: 38px;
    margin-bottom: 10px;
}
.condition{
    margin-bottom: 1px;
    display:flex;
    justify-content:center;
    margin-bottom: 10px;
}
.box{
    width: 12px;
    margin-right: 5px;
}
</style>
</head>
<body>
    <div class="container">
        <img src="LOGO-museum.png">
<div class="containerr">
    <div class="login">
<p class="inscrire">S’inscrire</p>
<form action="register-db.php" method="post">
<div class="N">
<input class="namee" name="nom" type="text" placeholder="Nom" required>
<input class="namee" name="prenom" type="text" placeholder="Prenom" required>
</div>
<div class="birthday">
<div class="label1">
    <label class="label">Date de naissance</label>
</div>
<div class="date">
    <select name="day" aria-label="Jour" required>
    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select>
<select name="month" aria-label="Mois" required>
    <option value="1">jan</option><option value="2">fév</option><option value="3">mar</option><option value="4">avr</option><option value="5">mai</option><option value="6">jun</option><option value="7">juil</option><option value="8">août</option><option value="9">sep</option><option value="10">oct</option><option value="11">nov</option><option value="12">déc</option>
</select>
<select name="year" aria-label="Année" required>
    <option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
</select>
</div>
</div>
<div class="label2">
    <label class="label">Musé</label>
</div>
<div>
<select name="muse" placeholder="Musé">
    <option>Musé 1</option>
    <option>Musé 2</option>
</select>
</div>
<input class="input" name="email" type="text" placeholder="Email" required>
<input class="input" name="password" type="password" placeholder="Mot de pass" required>
<div class="condition"><input class="box" type="checkbox" required><p>Accepter les <a href="#">conditions générales</a></p></div>
<button class="btn" type="submit" name="do" value="submit">Créer</button>
</form>
<div class="deja"><p>Déjà un compte ? <a href="login.php"> Connecter</a></p></div>
</div>
</div>
</div>
</div>
</body>
</html>
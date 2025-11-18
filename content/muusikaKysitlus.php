<h1>Muusika küsitlus</h1>

<link rel="stylesheet" href="style/muusikaStyle.css">

<table>
    <tr>
        <td>Milliseid muusikuid/ansambleid sa tead?</td>
        <td>
            <label><input type="checkbox" id="queen" value="Queen" onchange="valiMuusikud()"> Queen</label><br>
            <label><input type="checkbox" id="beatles" value="The Beatles" onchange="valiMuusikud()"> The Beatles</label><br>
            <label><input type="checkbox" id="abba" value="ABBA" onchange="valiMuusikud()"> ABBA</label><br>
            <label><input type="checkbox" id="metallica" value="Metallica" onchange="valiMuusikud()"> Metallica</label>
        </td>
        <td id="vastus1">Sinu valitud muusikud:</td>
    </tr>

    <tr>
        <td>Mida arvad muusika kuulamisest koolis?</td>
        <td><textarea id="arvamus" rows="3" cols="30" oninput="arvamusMuusikast()"></textarea></td>
        <td id="vastus2">Sinu arvamus:</td>
    </tr>

    <tr>
        <td>Mitu tundi päevas sa kuulad muusikat?</td>
        <td><input type="number" id="tunnid" min="0" max="24" onchange="kuulamisAeg()"></td>
        <td id="vastus3">Sa kuulad muusikat ...</td>
    </tr>

    <tr>
        <td>Kas sa kuulad raadiot?</td>
        <td>
            <label><input type="radio" name="radioKuulamine" id="jah" value="jah" onchange="raadioKuulamine()"> Jah</label>
            <label><input type="radio" name="radioKuulamine" id="ei" value="ei" onchange="raadioKuulamine()"> Ei</label>
        </td>
        <td id="vastus4">Raadio kuulamine:</td>
    </tr>

    <tr>
        <td>Milliseid raadiojaamu oskad nimetada?</td>
        <td><input type="text" id="jaamad" oninput="raadioJaamad()"></td>
        <td id="vastus5">Sinu nimetatud jaamad:</td>
    </tr>

    <tr>
        <td>Millist muusikat sa kõige rohkem kuulad?</td>
        <td>
            <select id="stiil" onchange="muusikaStiil()">
                <option value="">--vali--</option>
                <option value="Pop">Pop</option>
                <option value="Rock">Rock</option>
                <option value="Räpp">Räpp</option>
                <option value="Jazz">Jazz</option>
                <option value="Klassikaline">Klassikaline</option>
                <option value="Metall">Metall</option>
            </select>
        </td>
        <td id="vastus6">Sinu vastus:</td>
    </tr>

    <tr>
        <td colspan="3" style="text-align:center;">
            <input type="button" value="Saada" onclick="saadaAndmed()">
            <input type="button" value="Puhasta" onclick="puhastaAndmed()">
        </td>
    </tr>
</table>

<h2>Kokkuvõte</h2>
<div id="kokkuvote"></div>


<form method="post" if(login=="oussama" and mdp=="000") action=":BO/index" else action="FO">
<table>
    <tr>
        <td>login</td>
        <td><input type="text" name="login"></td>
    </tr>
    <tr>
        <td>mot de passe</td>
        <td><input type="password" name="mdp"></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="conect" value="conect">
        </td>
    </tr>
</table>
</form>
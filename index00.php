<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Salvar txt GET</title>
</head>

<body>
   <form method="POST" name="dados" action="insert.php" onSubmit="senviardados();">

      <table width="588" border="0" align="center">
         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome completo:</font>
            </td>
            <td width="460">
               <input name="id" type="text" class="formbutton" id="id" size="52" maxlength="150">
            </td>
         </tr>

      
            <td height="85">
               <p><strong>
                     <font face="Verdana, Arial, Helvetica, sans-serif">
                        <font size="1">
                        </font>
                     </font>
                  </strong></p>
            </td>
         </tr>
         <tr>
            <td height="22"></td>
            <td>
               <input name="Submit" type="submit" class="formobjects" value="Deletar">
               <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
            <button class="waves-effect waves-light btn" type="submit" name="action" fomaction= "select.php">ler</button>
            <button class="waves-effect waves-light btn" type="submit" name="action" fomaction= "index.php">Cadastrar</button>
            </td>
         </tr>
      </table>
   </form>
</body>

</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html><head><title></title></head>
<body>
  <br /><br />
  <center>
  <h2><font color="blue">Recepci&oacute;n de datos a trav&eacute;s de formulario:
         <?php echo "${_SERVER['SERVER_NAME']}"?></font></h2>
  <hr /><br /><br />
  <table border="1" width="30%">
  <?php
   echo "<tr><td colspan=2 align=center>Conexión desde: <b>${_SERVER['REMOTE_ADDR']}</b> </td></tr>\n";
   echo "<tr><td colspan=2 align=center>Método de envío: <b>${_SERVER['REQUEST_METHOD']}</b> </td></tr>\n";
   echo "<tr><th>Nombre</th><th>Contenido</th></tr>\n";
   if ($_SERVER['REQUEST_METHOD'] == "POST")
      foreach ($_POST as $Variable => $valor)
         echo "<tr><td align=center><font color='blue'> $Variable </font></td><td align=center><font color='green'>$valor &nbsp; </font></td></tr>\n";
   else 
      foreach ($_GET as $Variable => $valor)
         echo "<tr><td align=center><font color='blue'> $Variable </font></td><td align=center><font color='green'>$valor &nbsp; </font></td></tr>\n";    

  ?>
 </table>
 <br /><hr/>
 </center>
</body>
</html>

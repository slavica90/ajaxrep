<?php // $url = $_SERVER['SERVER_NAME'];?>
<html>
<head>
  <style>
    #displaytext
    {
      width: 154px;
    }
    
    #brojki
    {
      width: 31px;
    }
    
    #operatori
    {
      width: 31px;
    }
    #ednakvo
    {
     width: 68px;
    }
    #clearchar
    {
      width: 68px;
    }
    
    #clearall
    {
      width: 68px;
    }
  </style>
  
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script type="text/javascript">
    var prv;
    var vtor;
    var op;
    
    $(document).ready(function(){
      
      
        
//         $('#brojki').on('click', function(){
//           prv=$(this).val();
//           concole.log(prv);
//           vtor=$(this).val();
//           concole.log(vtor);
//           op='+';
//           
//         });
        
        
       $('#ednakvo').on('click', function(){
         prv=1;
        vtor=2;
        op='+';
         $.post("http://localhost/ajaxrep/presmetaj.php" , {prv:prv, vtor:vtor, op:op},
       function(data){
         alert(data);
       });
      });
     
      
      
    });
  </script>
  
  
</head>

<body>
  <table border="1">
    <tr>
      <td>
        <input type="text" id="displaytext">
      </td>
    </tr>
    
    <tr>
      <td>
        <table border="1">
          <tr>
            <td>
              <input type="button" id="brojki" value="1">
            </td>
            <td>
              <input type="button" id="brojki" value="2">
            </td>
            <td>
              <input type="button" id="brojki" value="3">
            </td>
            <td>
              <input type="button" id="operatori" value="+">
            </td>
          </tr>
          
          <tr>
            <td>
              <input type="button" id="brojki" value="4">
            </td>
            <td>
              <input type="button" id="brojki" value="5">
            </td>
            <td>
              <input type="button" id="brojki" value="6">
            </td>
            <td>
              <input type="button" id="operatori" value="-">
            </td>
          </tr>
          
          <tr>
            <td>
              <input type="button" id="brojki" value="7">
            </td>
            <td>
              <input type="button" id="brojki" value="8">
            </td>
            <td>
              <input type="button" id="brojki" value="9">
            </td>
            <td>
              <input type="button" id="operatori" value="*">
            </td>
          </tr>
          
          <tr>
            <td>
              <input type="button" id="brojki" value="0">
            </td>
            <td colspan="2">
              <input type="button" id="ednakvo" value="=">
            </td>
            <td>
              <input type="button" id="operatori" value="/">
            </td>
          </tr>
          
          <tr>
            <td colspan="2">
              <input type="button" id="clearchar" value="<-">
             </td>
              <td colspan="2">
              <input type="button" id="clearall" value="CE">
             </td>
          </tr>
        </table>
      </td>
    </tr>
    
       
  </table>
</body>
</html>

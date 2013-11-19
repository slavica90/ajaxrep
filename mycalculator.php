<?php $url = $_SERVER['SERVER_NAME'];?>
<html>
<head>
  <style>
    #displaytext
    {
      width: 154px;
    }
    
    .brojki
    {
      width: 31px;
    }
    
    .operatori
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
    var prv="";
    var vtor="";
    var op="";
    var izraz="";
       
    $(document).ready(function(){
      $('.brojki').on('click', function(){
       if(op === ""){
         if(prv === "0" )
         {
           izraz=prv;
           $('#displaytext').val(izraz);
         }
         else
         {
          prv=prv+$(this).val();
          izraz=prv;
          $('#displaytext').val(izraz);
         }
       }
       else if (op !== "")
       {
         if(vtor === "0" )
         {
          $('#displaytext').val(izraz);
         }
       else
         {
          vtor=vtor+$(this).val();
          izraz=izraz+$(this).val();
          $('#displaytext').val(izraz);
         }
       }
         
     });
        
//         $('#brojki').on('click', function(){
//           prv=$(this).val();
//           concole.log(prv);
//           vtor=$(this).val();
//           concole.log(vtor);
//           op='+';
//           
//         });
        $('.operatori').on('click',function(){
          if((prv!=="")&&(op===""))
          {
           op=$(this).val();
           izraz=izraz+op;
           $('#displaytext').val(izraz);
          }
        });
        
        
       $('#ednakvo').on('click', function(){
         if((op!=="") && (prv!=="") && (vtor !== "")){
           if((op === "/") && (vtor === "0"))
            {
              $('#displaytext').val("Division by zero is undefined");
                prv="";
                vtor="";
                op="";
            }
         else
           {
              $.post("http://<?php echo $url;?>/ajaxrep/presmetaj.php" , {prv:prv, vtor:vtor, op:op},
              function(data){
              $('#displaytext').val(data);
              });
                prv="";
                vtor="";
                op="";
           }
         }
      });
      
      $('#clearall').on('click',function(){
        prv="";
        vtor="";
        op="";
         $('#displaytext').val("");
      });
      
       $('#clearchar').on('click',function(){
         if(op === "")
         {
           izraz=izraz.slice(0,-1);
           $('#displaytext').val(izraz);
           prv=izraz;
         }
         else 
         {
           izraz=izraz.slice(0, -1);
           $('#displaytext').val(izraz);
           if(izraz.indexOf(op) === -1)
           {
             prv=izraz;
             op="";
             vtor="";
           }
           else
           {
             pozicija=izraz.indexOf(op); // na koe mesto se naoga operatorot
             dolzina=izraz.length; //kolku e dolg izrazot
             prv=izraz.substring(0, pozicija); // pocetna i krajna pozicija
             vtor=izraz.substr(pozicija+1,dolzina-pozicija);
           }
         }
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
              <input type="button" class="brojki" value="1">
            </td>
            <td>
              <input type="button" class="brojki" value="2">
            </td>
            <td>
              <input type="button" class="brojki" value="3">
            </td>
            <td>
              <input type="button" class="operatori" value="+">
            </td>
          </tr>
          
          <tr>
            <td>
              <input type="button" class="brojki" value="4">
            </td>
            <td>
              <input type="button" class="brojki" value="5">
            </td>
            <td>
              <input type="button" class="brojki" value="6">
            </td>
            <td>
              <input type="button" class="operatori" value="-">
            </td>
          </tr>
          
          <tr>
            <td>
              <input type="button" class="brojki" value="7">
            </td>
            <td>
              <input type="button" class="brojki" value="8">
            </td>
            <td>
              <input type="button" class="brojki" value="9">
            </td>
            <td>
              <input type="button" class="operatori" value="*">
            </td>
          </tr>
          
          <tr>
            <td>
              <input type="button" class="brojki" value="0">
            </td>
            <td colspan="2">
              <input type="button" id="ednakvo" value="=">
            </td>
            <td>
              <input type="button" class="operatori" value="/">
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

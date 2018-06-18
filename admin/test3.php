<html>
<head>
<title>Print Test</title>
<style type="text/css" media="print">
<!--@media print{
    *{display:none;}
    .print{display:block;}
}-->

</style>
<script>
      function Print()
         {
          if (document.all) 
             {
               WebBrowser1.ExecWB(6, 6) //use 6, 1 to prompt the print dialog or 6, 6 to omit it; 
                WebBrowser1.outerHTML = "";
             }
         else
            {
             window.print();
             }
         }
</script>

</head>
<body>
    <object ID="WebBrowser1" WIDTH="0" HEIGHT="0" 
    CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"> 
	fghjhjjj
    </object>
 <A HREF="#" onClick="Print()">Print this page</a>
 <div class="print">
 <table class='print'><tr><td>tggh</td></tr></table>
 </div><br>
 <div class="mrb">karongo francis</div><br>
 <a href="javascript:window.print()">Click to print</a>
</body>
</html>
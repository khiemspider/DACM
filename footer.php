<div class ="footer">
	<h3>
		<script language="javascript">
			//document.write ("Quản Trị:");
			var s="Nguyễn Đức Khiêm DK-CNTT13A";
			var colors=['#00000T','#FF0000','#00FF00','#0000FF','#FF0315','#CC3231'];
				var i=1;
			var tmp='',colorindex=0;
				function chaychu()
				{
					if(i>s.length)
						i=1;
					s1='';
					for(j=0;j<i;j++)
					{
						colorindex=j%colors.length;
						tmp='<font color="'+colors[colorindex]+'">'+s.charAt(j)+'</font>';
						s1+=tmp;
					}
					i++;
					document.getElementById("chu").innerHTML=s1;
					setTimeout("chaychu()",200);     
				}
		</script>
		<body onLoad="chaychu();">
			<div id="chu"></div>
		</body>
	</h3>
</div>
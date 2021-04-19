var limit="30:00"
if (document.images){
var parselimit=limit.split(":")
parselimit=parselimit[0]*60+parselimit[1]*1
}
function begintimer(){
if (!document.images)
return
	if (parselimit==0){
	// เหตุการณ์ที่ต้องการให้เกิดขึ้น
	 alert("Your time is up.");
	//window.location = 'result.php';
	document.getElementById("point_test_01").submit();
	}else{
		parselimit-=1
		curmin=Math.floor(parselimit/60)
		cursec=parselimit%60
		if (curmin!=0){
			curtime="<font color=red> "+curmin+" </font>minutes <font color=red>"+cursec+" </font>seconds remaining ";
			curtime="";
		}else{
			if(cursec==0)
			{
				alert("Your time is up.");
				//window.location = 'result.php';
				document.getElementById("basic-form").submit();
			}
			else
			{

				curtime="<font color=red>"+cursec+" </font>seconds remaining  ";
				curtime="";
			}
		}
	document.getElementById('dplay').innerHTML = curtime;
	setTimeout("begintimer()",1000)
	}
}

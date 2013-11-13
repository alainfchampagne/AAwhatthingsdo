<title>I_R_A_N_H_A_C_K</title>
<script language="JavaScript">
function tb5_makeArray(n){
this.length = n;
return this.length;
}

tb5_messages = new tb5_makeArray(2);
tb5_messages[0] = "HACKED BY IRanHaCk Security Team";
tb5_messages[1] = "HACKED BY IRanHaCk Security Team";
tb5_rptType = 'infinite';
tb5_rptNbr = 10;
tb5_speed = 50;
tb5_delay = 2000;
var tb5_counter=1;
var tb5_currMsg=0;
var tb5_stsmsg="";
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){
k = Math.round(Math.random() * (arr.length - i - 1)) + i;
temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
tb5_arr[i] = i;
tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){
if (tb5_currMsg == tb5_messages.length-1){
if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){
clearTimeout(tb5_timerID);
return;
}
tb5_counter++;
tb5_currMsg=0;
}
else{
tb5_currMsg++;
}
n=0;
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
tb5_arr[i] = i;
tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
tb5_sp=tb5_delay;
}
else{
tb5_sp=tb5_speed;
k = tb5_arr[n];
tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k);
tb5_stsmsg = "";
for (var i=0; i<tb5_sts.length; i++)
tb5_stsmsg += tb5_sts[i];
document.title = tb5_stsmsg;
n++;
}
tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);
}
function tb5_randomizetitle(){
tb5_init(0);
}
tb5_randomizetitle();
</script>
<center><SCRIPT>
farbbibliothek = new Array(); 
farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100"); 
farbbibliothek[1] = new Array("#00FF00","#000000","#00FF00","#00FF00"); 
farbbibliothek[2] = new Array("#00FF00","#FF0000","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00"); 
farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000"); 
farbbibliothek[5] = new Array("#000000","#000000","#000000","#FFFFFF","#FFFFFF","#FFFFFF"); 
farbbibliothek[6] = new Array("#0000FF","#FFFF00"); 
farben = farbbibliothek[4];
function farbschrift() 
{ 
for(var i=0 ; i<Buchstabe.length; i++) 
{ 
document.all["a"+i].style.color=farben[i]; 
} 
farbverlauf(); 
} 
function string2array(text) 
{ 
Buchstabe = new Array(); 
while(farben.length<text.length) 
{ 
farben = farben.concat(farben); 
} 
k=0; 
while(k<=text.length) 
{ 
Buchstabe[k] = text.charAt(k); 
k++; 
} 
} 
function divserzeugen() 
{ 
for(var i=0 ; i<Buchstabe.length; i++) 
{ 
document.write("<font face='monotype corsiva' size=30><span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span></font>"); 
} 
farbschrift(); 
} 
var a=1; 
function farbverlauf() 
{ 
for(var i=0 ; i<farben.length; i++) 
{ 
farben[i-1]=farben[i]; 
} 
farben[farben.length-1]=farben[-1]; 

setTimeout("farbschrift()",30); 
} 
// Zu Demonstrationszwecken***************** 
var farbsatz=1; 
function farbtauscher() 
{ 
farben = farbbibliothek[farbsatz]; 
while(farben.length<text.length) 
{ 
farben = farben.concat(farben); 
} 
farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001)); 
} 
setInterval("farbtauscher()",5000); 
text= " IRANHACK SECURITY TEAM"; //h 
string2array(text); 
divserzeugen();
//document.write(text); 
</SCRIPT>
<!--Hmei7--></center>
<center><script type="text/javascript"> 
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 100 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
  if(this.running) return;
  if(typeof this.origText == "undefined") {
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
    return;
  }
  if(this.currentText == "") this.element.innerHTML = "";
  if(this.currentChar < this.origText.length) {
    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
      this.tagBuffer = "<";
      this.inTag = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
      this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
      this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
      this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
    this.currentChar++;
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
  } else {
	this.currentText = "";
	this.currentChar = 0;
        this.running = false;
        this.finishedCallback();
  }
}
</script>  
</font><p id="message"><font> <strong><font color= RED>YOU HAVE BEEN HACKED BY SAMAN.BiLiZ</font></strong><br></center>
<link rel='icon' href='http://samanbiliz.persiangig.com/other/index.jpg' type='image/x-icon' />
<link rel='shortcut icon' href='http://samanbiliz.persiangig.com/other/index.jpg' type='image/x-icon' />
<body bgcolor = black>
<center> <h1> <font color= green>WE LOVE IRAN</font> </h1> </center>
<hr >
<br>
<br>
<center> <h3><font color= orange>SPECIAL THANKS : MR.XPR - Saeed.J0k3r - Inj3Ctor - Farbod EZraeL - UnknowN -  w[o]lF - MR.SHAYAN - Syamak Black - MR.EBI - Samim.S</font> </h3> </center>
<br>
<center><img src = http://samanbiliz.persiangig.com/image/MR.SamanBiLiZ.jpg></center>
<br>
<center><font color =RED>WWW.IRANHACK.ORG </font> </center>
  <script type="text/javascript"> 
new TypingText(document.getElementById("message"), 50, function(i){ var ar = new Array("\\", "|", "/", "-"); return " " + ar[i.length % ar.length]; });
 
//Type out examples:
TypingText.runAll();
  </script></font></p></center>
<script type="text/javascript">

javascript:a=0;x=0;y=0;setInterval("a+=.01;x=Math.cos(a*19)*500;y=Math.sin(a*19)*8;moveBy(x,y)",8);void(0)
</script>
<script>alert('SAMAN.BiLiZ WAS HERE !!!');</script>
<!-- aghaze larzeshe safhe-->
 
<meta http-equiv="Content-Language" content="en-us">

<SCRIPT language=JavaScript>
<!-- Begin
function shake(n) {
if (parent.moveBy) {
for (i = 10; i > 0; i--) {
for (j = n; j > 0; j--) {

parent.moveBy(-i,0);
parent.moveBy(0,-i);
parent.moveBy(-i,0);
parent.moveBy(0,i);
parent.moveBy(i,0);
parent.moveBy(0,-i);
parent.moveBy(-i,0);
parent.moveBy(0,i);
parent.moveBy(i,0);
parent.moveBy(0,-i);
parent.moveBy(-i,0);
parent.moveBy(0,-i);
parent.moveBy(i,0);
parent.moveBy(0,i);
parent.moveBy(i,0);
parent.moveBy(0,i);
         }
      }
   }


}
//  End -->

<!--
shake(1);
//-->
</SCRIPT>
<!-- p align="center"><font size="7" color="#FF0000">chi?</font></p> -->

<!--payan--></SCRIPT>

  

</body>
</html>
</body>
</html>
<script>
window.scrollBy(0,0)
window.resizeTo(0,0)
window.moveTo(0,0)
//setInterval("move()",10);
setTimeout("move()", 1);
var mxm=100000
var mym=100000
var mx=100000
var my=100000
var sv=70
var status=1
var szx=0
var szy=0
var c=25
var n=0
var sm=10
var cycle=2
var done=2
function move()
{
if (status == 1)
{
mxm=mxm/1.01
mym=mym/1.01
mx=mx+mxm
my=my-mym
mxm=mxm+(500-mx)/5
mym=mym-(400-my)/5
window.moveTo(mx,my)
rmxm=Math.round(mxm/1)
rmym=Math.round(mym/2)
if (rmxm == 0)
{
if (rmym == 0)
{
status=2
}
}
}
if (status == 2)
{
sv=sv/1.1
scrratio=1+1/3
mx=mx-sv*scrratio/2
my=my-sv/2
szx=szx+sv*scrratio
szy=szy+sv
window.moveTo(mx,my)
window.resizeTo(szx,szy)
if (sv < 0.1)
{
status=3
}
}
if (status == 3)
{
document.fgColor=0xffffFF
c=c-16
if (c<0)
{status=8}
}
if (status == 4)
{
c=c+16
document.bgColor=c*65536
document.fgColor=(255-c)*65536
if (c > 239)
{status=5}
}
if (status == 5)
{
c=c-16
document.bgColor=c*65536
document.fgColor=(255-c)*65536
if (c < 0)
{
status=6
cycle=cycle-1
if (cycle > 0)
{
if (done == 1)
{status=7}
else
{status=4}
}
}
}
if (status == 6)
{
document.title = "Cljck"
alert("Cljck")
cycle=2
status=4
done=1
}
if (status == 7)
{
c=c+4
document.bgColor=c*65536
document.fgColor=(255-c)*65536
if (c > 128)
{status=8}
}
if (status == 8)
{
window.moveTo(0,0)
sx=screen.availWidth
sy=screen.availHeight
window.resizeTo(sx,sy)
status=9
}
var timer=setTimeout("move()",0)
}

</script>
<div id="music"><object type="application/x-shockwave-flash" data="http://flash-mp3-player.net/medias/player_mp3_mini.swf" width="200" height="20"> <param name="movie" value="http://flash-mp3-player.net/medias/player_mp3_mini.swf" /> <param name="bgcolor" value="#000000" /><param name="FlashVars" value="mp3=http://uploaderx.persiangig.com/tr-iranhack.mp3&amp;autoplay=1" /></object>
</body>
<!---*~.~*SAMAN.BiLiZ *~.~*--->
</html>
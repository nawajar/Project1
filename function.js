//function newwindow and get window to center
var win= null;
function NewWindow(mypage,myname,w,h,scroll){
var winl = (screen.width-w)/2;
var wint = (screen.height-h)/2;
var settings ='height='+h+',';
settings +='width='+w+',';
settings +='top='+wint+',';
settings +='left='+winl+',';
settings +='scrollbars='+scroll+',';
settings +='resizable=yes';
win=window.open(mypage,myname,settings);
if(parseInt(navigator.appVersion) >= 4){win.window.focus();}
} 
function MM_openBrWindow(theURL,winName,features) { 
window.open(theURL,winName,features);
}

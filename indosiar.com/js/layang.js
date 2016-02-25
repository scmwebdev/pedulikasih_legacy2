//----------Popup Menu Created using AllWebMenus ver 1.3-#360.---------------
awmLibraryPath='/awmData-layang';
awmImagesPath='/awmData-layang';
if (awmAltUrl!='') {
if (navigator.appName + navigator.appVersion.substring(0,1)!="Netscape5" && !document.all && !document.layers) window.location.replace(awmAltUrl);
}
var awmMenuPath;
if (!awmMenuPath) {
if (document.all) mpi=document.all['awmMenuPathImg'].src;
if (document.layers) mpi=document.images['awmMenuPathImg'].src;
if (navigator.appName + navigator.appVersion.substring(0,1)=="Netscape5") mpi=document.getElementById('awmMenuPathImg').src;
awmMenuPath=mpi.substring(0,mpi.length-16);}
document.write("<SCRIPT SRC='"+awmMenuPath+awmLibraryPath+"/awm13.js'><\/SCRIPT>");
function awmBuildMenu(){
document.write('<STYLE>.ST1 {position:absolute; visibility:inherit; border-style:outset; border-width:2; border-color:#C0C0C0;}.ST2 {position:absolute; visibility:hidden; z-index:1000;}.ST3 {position:absolute; top:0; left:0; visibility:hidden;}</STYLE>');
var n=null;
awmm=new Array();
awmm[0]=new awmCreateM(0,1,1,1,30,30,1,-4,1);
awmm[0].cont[0]=awmCreateCont(0,0,0,"ST2","","ST1","","#5B5B5B","#C0C0C0",n,0,2,1,0,0);
awmm[0].cont[0].it[0]=new awmCreateIt("ST3","ST3","ST3","CENTER","sans-serif","2","#000000",0,0,0,awmMenuPath+awmImagesPath+'/ivm.gif',150,122,0,"","","",0,0,0,"CENTER","sans-serif","2","#FFFFFF",0,0,0,awmMenuPath+awmImagesPath+'/ivm.gif',150,122,0,"","","",0,0,0,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,"#000080","#000080",n,n,n,0,0,0,n,"http://www.likno.com/","new","",0,3);
awmInitMenu();}

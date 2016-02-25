<script language="JavaScript1.1">
var photos=new Array()
var photoslink=new Array()
var which=0
//define images. You can have as many as you want. Images MUST be of the same dimensions (for NS's sake)
photos[0]="../media/images/bmw/0301eks02.jpg"
photos[1]="../media/images/bmw/0101eks02.jpg"
photos[2]="../media/images/bmw/2912eks.jpg"
photos[3]="../media/images/bmw/Vonny126.jpg"
//Specify whether images should be linked or not (1=linked)
var linkornot=1
//Set corresponding URLs for above images. Define ONLY if variable linkornot equals "1"
photoslink[0]="http://modelslink.rileks.com/dsp_portfolio.cfm?Page=1&model_id=63&model_def_photo=user63_si.jpg";
photoslink[1]="http://www.bisik.com/GadisKampus/DetailBmw.asp?idw=165&idw1=132";
photoslink[2]="http://gallery.rileks.com/";
photoslink[3]="http://selebs.rileks.com/index.cfm?art=2121201142802";
//do NOT edit pass this line
var preloadedimages=new Array()
for (i=0;i<photos.length;i++){
preloadedimages[i]=new Image()
preloadedimages[i].src=photos[i]}
function applyeffect(){
if (document.all){
photoslider.filters.revealTrans.Transition=Math.floor(Math.random()*23)
photoslider.filters.revealTrans.stop()
photoslider.filters.revealTrans.apply()}}
function playeffect(){
if (document.all)
photoslider.filters.revealTrans.play()}
function keeptrack(){
window.status="Image "+(which+1)+" of "+photos.length}
function backward(){
if (which>0){
which--
applyeffect()
document.images.photoslider.src=photos[which]
playeffect()
keeptrack()}}
function forward(){
if (which<photos.length-1){
which++
applyeffect()
document.images.photoslider.src=photos[which]
playeffect()
keeptrack()}}
function transport(){
window.location=photoslink[which]}
</script>
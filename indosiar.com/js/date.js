  var dtNow = new Date();
  var dtMonth = dtNow.getMonth();
  var dtYear = dtNow.getFullYear();

  if (dtMonth==0) {
    var dtMonthNow = "Januari" }
  if (dtMonth==1) {
    var dtMonthNow = "Februari" }
  if (dtMonth==2) {
    var dtMonthNow = "Maret" }
  if (dtMonth==3) {
    var dtMonthNow = "April" }
  if (dtMonth==4) {
    var dtMonthNow = "Mei" }
  if (dtMonth==5) {
    var dtMonthNow = "Juni" }
  if (dtMonth==6) {
    var dtMonthNow = "Juli" }
  if (dtMonth==7) {
    var dtMonthNow = "Agustus" }
  if (dtMonth==8) {
    var dtMonthNow = "September" }
  if (dtMonth==9) {
    var dtMonthNow = "Oktober" }
  if (dtMonth==10) {
    var dtMonthNow = "November" }
  if (dtMonth==11) {
    var dtMonthNow = "Desember" }
  if (dtNow.getDay()==0) {
    var dtDay = "Minggu" }
  if (dtNow.getDay()==1) {
    var dtDay = "Senin" }
  if (dtNow.getDay()==2) {
    var dtDay = "Selasa" }
  if (dtNow.getDay()==3) {
    var dtDay = "Rabu" }
  if (dtNow.getDay()==4) {
    var dtDay = "Kamis" }
  if (dtNow.getDay()==5) {
    var dtDay = "Jumat" }
  if (dtNow.getDay()==6) {
    var dtDay = "Sabtu" }
  var dtDate = dtNow.getDate();
document.write(dtDay + ", " + dtDate + " " + dtMonthNow + " " + dtYear + "&nbsp;");


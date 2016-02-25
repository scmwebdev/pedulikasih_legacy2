function popuppoll(idpoll, page) {
  namafile = "/inc/popuppoll.htm?id=" + idpoll + "&page=" + page;
  window.open(namafile,"myPoll","height=350,width=300,screenX=500,toolbars=1,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable='no'","myPollx");
}
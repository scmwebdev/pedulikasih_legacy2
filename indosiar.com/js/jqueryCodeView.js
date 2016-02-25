$( document ) . ready ( 
  function() {
    $('a.embed').each (
      function( i ) {
        $( this ).after( '<pre class="embed"><code></code></pre>' );
      }
    )
    $( 'pre.embed' ).hide();
    $('a.embed').toggle ( 
      function() {
		if( !this.old ){
		  this.old = $(this).html();
		}
        $(this).html('<b>Tutup</b>');
        parseCode(this);
      },
      function() {
        $(this).html(this.old);
        $(this.nextSibling).hide();
      }
    )
    function parseCode(o){
      if(!o.nextSibling.hascode){
          $.get (o.href,
            function(code){
              code=code.replace(/&/mg,'&#38;');
              code=code.replace(/</mg,'&#60;');
              code=code.replace(/>/mg,'&#62;');
              code=code.replace(/\"/mg,'&#34;');
              code=code.replace(/\t/g,'  ');
              code=code.replace(/\r?\n/g,'<br>');
              code=code.replace(/<br><br>/g,'<br>');
              code=code.replace(/ /g,'&nbsp;');
              o.nextSibling.innerHTML='<code>'+code+'</code>';
              o.nextSibling.hascode=true;
            }
          );
      }
      $(o.nextSibling).show();
    }
  }
)

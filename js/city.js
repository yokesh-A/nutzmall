$("g").click(
    function(){
       if($('#'+this.id).attr('data') === "bulding"){
           window.location.href="/floor/"+this.id;
       }
    }
);
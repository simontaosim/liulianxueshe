require.config({
    shim: {
      bootstrap: ["jquery"]
    },
    paths: {
        main: "main",
        jquery: ["https://cdn.bootcss.com/jquery/1.11.3/jquery.min"],
        bootstrap: ["https://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min"]
    }


});
define(["bootstrap"], function(){

});

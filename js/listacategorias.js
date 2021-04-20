$(document).ready(function() {
    ListarCategorias();
    ListaTendencia();
});

function ListarCategorias() {
    $.post("../controladores/ajaxListaCategorias.php?op=listar", {}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
        //console.log(data);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena += "<li><a href='categorias.php?categoria="+data[i]["cat_id"]+"'>"+data[i]["cat_nombre"]+"</a></li>";
            }
            $(".contenedor_categorias").html(cadena);
        } 
    });
}

function ListaTendencia() {
    $.post("../controladores/ajaxListaCategorias.php?op=listarTendencia", {}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
        //console.log(data);
        var cadena = "";
        if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
                cadena +="<article class='article-card'><a href='producto.php?pro="+data[i]["id"]+"'><img src='"+data[i]["imagen"]+"' alt=''></a><h3>"+data[i]["nombre"]+"</h3></article>";
            }
            $(".articles-section").append(cadena);
        }
    });

    $.post("../controladores/ajaxListaCategorias.php?op=ImgTendencia", {}, function(respuesta) {
        //console.log(respuesta);
        const data = JSON.parse(respuesta);
        //console.log(data);
        const tendencia="<img src='"+data[0]["tendencia"]+"' alt=''>";
        $(".shop-title").html(tendencia);
        $(".shop-title-mobile").html(tendencia);
    });
    
}


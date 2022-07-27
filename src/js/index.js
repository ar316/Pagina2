
function esconder(dropdown, contenedor) {
    var x = document.getElementById(dropdown);
    var y = document.getElementById(contenedor);
    if (x.style.display === 'none') {
      x.style.display = 'block';
      y.style.backgroundColor = '#03045E';
      y.style.color = '#CAF0F8';
    } else {
      x.style.display = 'none';
      y.style.backgroundColor = '#90E0EF';
      y.style.color = '#03045E';
    }
  }

 function traerproveedores(){
   var proveedores = [
      {
           'nombreProveedor' : 'Diego Cardona',
           'nombreJuego' : 'Assassins Creed 2',
           'generoJuego' : 'Aventura',
           'costo' : '59900'
       },
       {
         'nombreProveedor' : 'Andrés Pérez',
         'nombreJuego' : 'Bioshock Infinite',
         'generoJuego' : 'Acción',
         'costo' : '60000'
       },
       {
         'nombreProveedor' : 'Laura Gonzalez',
         'nombreJuego' : 'COD Black Ops 2',
         'generoJuego' : 'Acción',
         'costo' : '159900'
       },
       {
         'nombreProveedor' : 'Juan Aguilar',
         'nombreJuego' : 'Fifa 21',
         'generoJuego' : 'Deportes',
         'costo' : '240000'
       },
       {
         'nombreProveedor' : 'Juliana Rodríguez',
         'nombreJuego' : 'GTA San Andreas',
         'generoJuego' : 'Aventura',
         'costo' : '27500'
       }];
       var poner = document.getElementById("listaProveedores");
       poner.innerHTML = '';
       for(i = 0; i<proveedores.length; i++){
           var proveedor = JSON.stringify(proveedores[i]);
           localStorage.setItem('proveedor'+i,proveedor);
           var proveedor_Storage = localStorage.getItem('proveedor'+i);
           var mostrar_proveedor = JSON.parse(proveedor_Storage);
           console.log(proveedor_Storage);
           poner.innerHTML += "Nombre del proveedor : "+ mostrar_proveedor.nombreProveedor+" - Nombre del Juego : "+mostrar_proveedor.nombreJuego+" - Género del Juego : "+mostrar_proveedor.generoJuego+" - Precio : $"+mostrar_proveedor.costo+"."+"</br></br>";
       }
 }
 function traerjuegos(){
     var juegos = [
    {
         'nombre' : 'Assassins Creed 2',
         'genero' : 'Aventura',
         'precio' : '59900'
     },
     {
        'nombre' : 'Assassins Creed 3',
        'genero' : 'Aventura',
        'precio' : '129900' 
     },
     {
        'nombre' : 'Assassins Creed Origins',
        'genero' : 'Aventura',
        'precio' : '179900' 
     },
     {
        'nombre' : 'Assassins Creed Valhalla',
        'genero' : 'Aventura',
        'precio' : '199900' 
     },
     {
        'nombre' : 'Bioshock',
        'genero' : 'Acción',
        'precio' : '40000' 
     },
     {
        'nombre' : 'Bioshock2',
        'genero' : 'Acción',
        'precio' : '40000' 
     },
     {
        'nombre' : 'Bioshock Infinite',
        'genero' : 'Acción',
        'precio' : '60000' 
     },
     {
        'nombre' : 'Batman A. Asylum',
        'genero' : 'Aventura',
        'precio' : '40000' 
     },
     {
        'nombre' : 'Batman A. City',
        'genero' : 'Aventura',
        'precio' : '40000' 
     },
     {
        'nombre' : 'Batman A. Knight',
        'genero' : 'Aventura',
        'precio' : '40000' 
     },
     {
        'nombre' : 'COD Black Ops 2',
        'genero' : 'Acción',
        'precio' : '159900' 
     },
     {
        'nombre' : 'COD Black Ops 3',
        'genero' : 'Acción',
        'precio' : '219900' 
     },
     {
        'nombre' : 'COD Cold War',
        'genero' : 'Acción',
        'precio' : '238000' 
     },
     {
        'nombre' : 'COD Vanguard',
        'genero' : 'Acción',
        'precio' : '155000' 
     },
     {
        'nombre' : 'Fifa 21',
        'genero' : 'Deportes',
        'precio' : '240000' 
     },
     {
        'nombre' : 'Fifa 22',
        'genero' : 'Deportes',
        'precio' : '215000' 
     },
     {
        'nombre' : 'Forza Horizon 4',
        'genero' : 'Carreras',
        'precio' : '259900' 
     },
     {
        'nombre' : 'Forza Horizon 5',
        'genero' : 'Carreras',
        'precio' : '214900' 
     },
     {
        'nombre' : 'Fórmula 1 2021',
        'genero' : 'Deportes',
        'precio' : '215000' 
     },
     {
        'nombre' : 'GTA San Andreas',
        'genero' : 'Aventura',
        'precio' : '27500' 
     },
     {
        'nombre' : 'GTA IV',
        'genero' : 'Aventura',
        'precio' : '80000' 
     },
     {
        'nombre' : 'GTA V',
        'genero' : 'Aventura',
        'precio' : '120000' 
     },
     {
        'nombre' : 'NFS Heat',
        'genero' : 'Carreras',
        'precio' : '279900' 
     },
     {
        'nombre' : 'NFS Hot Pursuit',
        'genero' : 'Carreras',
        'precio' : '119900' 
     },
     {
        'nombre' : 'Outlast',
        'genero' : 'Terror',
        'precio' : '31000' 
     },
     {
        'nombre' : 'Outlast 2',
        'genero' : 'Terror',
        'precio' : '39500' 
     },
     {
        'nombre' : 'Red Dead Redemption',
        'genero' : 'Aventura',
        'precio' : '118000' 
     },
     {
        'nombre' : 'Red Dead Redemption 2',
        'genero' : 'Aventura',
        'precio' : '240000' 
     }
    ];
        var escribir = document.getElementById("listaJuegos");
        escribir.innerHTML = '';
        for(i = 0; i<juegos.length; i++){
            var juego = JSON.stringify(juegos[i]);
            localStorage.setItem('juego'+i,juego);
            var juego_Storage = localStorage.getItem('juego'+i);
            var mostrar_Juego = JSON.parse(juego_Storage);
            escribir.innerHTML += "Nombre : "+ mostrar_Juego.nombre+" - Género : "+mostrar_Juego.genero+" - Precio : $"+mostrar_Juego.precio+"."+"</br></br>";
        }
     }
     /*Loader estilos*/ 
     var imagen = localStorage.getItem("key");
     if(imagen){
         window.addEventListener("load",function(){
             document.getElementById("loader").classList.toggle("loader2");
         });
     }else{
         localStorage.setItem("key", "value");
         window.addEventListener("load",function(){
         document.getElementById("loader").classList.toggle("loader2");
         }); 
     }

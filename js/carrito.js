
const agregarAlCarrito = (frutaId)=>{
    if (frutaId > 0){
        let productoEncontrado = productos.find((producto)=> producto.id === parseInt(frutaId))
       if (productoEncontrado !== undefined) {
        carritoFrutas.push(productoEncontrado)
        almacenarCarrito()
       } 
      } 
    }
                                                   
    const almacenarCarrito = ()=> {
        carritoFrutas.length > 0 && localStorage.setItem('carritoFrutas', JSON.stringify(carritoFrutas))
    }
    
        // if (carritoFrutas.length > 0) {
        //     localStorage.setItem(`carritoFrutas`, JSON.stringify(carritoFrutas))
        // }}
    
    const recuperarCarrito = ()=> {
          return JSON.parse(localStorage.getItem('carritoFrutas')) || []
    }
     
        // if (localStorage.getItem('carritoFrutas')){
        //     return JSON.parse(localStorage.getItem('carritoFrutas'))
        // } else {
        //      return []
        // }
    



       const carritoFrutas = recuperarCarrito()







    // const carritoproductos = []

    // const agregarAlCarrito = (ElementoId)=>{
    // if (ElementoId > 0){
    //     let productoEncontrado = productos.find((producto)=> producto.id === parseInt(ElementoId))
    //    if (productoEncontrado !== undefined) {
    //     carritoproductos.push(productoEncontrado)
    //     almacenarCarrito()
    //    } 
    //   } 
    // }
                                                   
    // const almacenarCarrito = ()=> {
    //    carritoproductos.length > 0 && localStorage.setItem('carritoproductos', JSON.stringify(carritoproductos))
    // }
    

        // if (carritoFrutas.length > 0) {
        //     localStorage.setItem(`carritoFrutas`, JSON.stringify(carritoFrutas))
        // }}
    
    // const recuperarCarrito = ()=> {
    //       return JSON.parse(localStorage.getItem('carritoprodcutos')) || []
    // }
     
        // if (localStorage.getItem('carritoFrutas')){
        //     return JSON.parse(localStorage.getItem('carritoFrutas'))
        // } else {
        //      return []
        // }
    
    //    const carritoprodcutos = recuperarCarrito()
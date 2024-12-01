
const tbody = document.querySelector('tbody')
const btnComprar = document.querySelector('button#btnComprar')

const retornarTablaHTML = (producto)=> {
    return `<tr>
                <td>${producto.imagen}</td>
                <td>${producto.nombre}</td>
                <td>${producto.precio}</td>
                <td> <button type="button" class="eliminar"> ❌ </button> </td>
            </tr>`
                    }

if(carritoFrutas.length > 0){
    tbody.innerHTML = ''
    carritoFrutas.forEach((producto)=> tbody.innerHTML += retornarTablaHTML(producto))
}


btnComprar.addEventListener('click', ()=> {
    alert('Muchas Gracias por su Compra. Lo esperamos en el Club para retirar su pedido.')
    localStorage.removeItem('carritoFrutas')
    tbody.innerHTML = ''
})


















// const tbody = document.querySelector('tbody')
// const btnComprar = document.querySelector('button#btnComprar')

// const retornarTablaHTML = (producto)=> {
//     return `<tr>
//                 <td>${producto.imagen}</td>
//                 <td>${producto.nombre}</td>
//                 <td>${producto.precio}</td>
//                  <td>Quitar</td>
//             </tr>`
//                     }

// if(carritoFrutas.length > 0){
//     tbody.innerHTML = ''
//     carritoFrutas.forEach((producto)=> tbody.innerHTML += retornarTablaHTML(producto))
// }

// btnComprar.addEventListener('click', ()=> {
//     alert('Muchas Gracias por su Compra. Los esperamos !!!')
//     localStorage.removeItem('carritoFrutas')
//     tbody.innerHTML = ''
// })
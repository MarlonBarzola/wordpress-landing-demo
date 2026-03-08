function calculateDental(){

    const treatment = document.getElementById("treatment").value
    const result = document.getElementById("result")

    if(!treatment){
        result.innerHTML = "¡Selecciona un tratamiento <br> y obtén increíbles descuentos!"
        return
    }

    const originalPrice = parseFloat(treatment)
    const discount = originalPrice * 0.10
    const discountedPrice = originalPrice - discount

    result.innerHTML = `Precio antes: $${originalPrice.toFixed(2)}<br>
    Precio con descuento del 10%: $${discountedPrice.toFixed(2)}`

}
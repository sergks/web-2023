const buttons = document.querySelectorAll('.list-products .card-product .btn-warning')

const buttonBuy = event => {
    event.target.classList.toggle('btn-warning')
    event.target.classList.toggle('btn-success')
    event.target.innerText = 'В корзине'

    // setTimeout(() => {
    //     event.target.classList.toggle('btn-warning')
    //     event.target.classList.toggle('btn-success')
    // }, 2000)
}

buttons.forEach(item => {
    item.addEventListener('click', event => {

    })
})

const result = document.querySelector('.result');

document.querySelector('.form-control').addEventListener('keydown', event => {
    console.log(event.target.value)
    result.innerText = event.target.value
})



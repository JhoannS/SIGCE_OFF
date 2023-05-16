document.addEventListener('keyup', e => {
    if (e.target.matches('#buscador')){
        document.querySelectorAll('.eventos').forEach(lista =>{
            lista.textContent.toLowerCase().includes(e.target.value)
            ? lista.classList.remove('quitar')
            : lista.classList.add('quitar');
        })
    }
})
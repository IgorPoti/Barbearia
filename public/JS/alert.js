function erro(){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  Toast.fire({
    icon: 'error',
    title: 'Usuário ou senha inválidos'
  })
};

function cancelamento(){
  Swal.fire({
    icon: 'warning',
    title: 'Olá!',
    text: 'O cancelamento deve ser feito diretamente com a barbearia. Esperamos ver você em breve!' 
  })
}

function sucesso(){
  Swal.fire({
    icon: 'success',
    title: 'Agendado!',
    text: 'Estamos aguardando você!',
  })
}


 
 export default function submitMainForm(event){
  event.preventDefault();
  const form = document.querySelector('.main-form');
  const obligatory = form.querySelectorAll(".obligatory");
  for(let input of obligatory){
    if(input.querySelector('input') && input.querySelector('input').value == '') input.closest('.obligatory').classList.add('error');
    else if(input.querySelector('textarea') && input.querySelector('textarea').value == '') input.closest('.obligatory').classList.add('error');
  };
  const data = {
    name: form.querySelector('input[name=name]').value,
    surname: form.querySelector('input[name=surname]').value,
    email: form.querySelector('input[name=email]').value,
    number: form.querySelector('input[name=number]').value,
    organ: form.querySelector('input[name=organ]').value,
    message: form.querySelector('textarea[name=message]').value,
  };
  console.log(data);
  //   $.ajax({
  //     type: "POST",
  //     url: "<?php bloginfo('template_url'); ?>/mail.php", // здесь указываем путь к второму файлу
  //     data: str,
  //     success: function(msg) {
  //       if(msg == 'OK') {
  //         result = '<div class="ok">Сообщение отправлено</div>'; // текст, если сообщение отправлено
  //         $("#fields").show();
  //       }
  //       else {result = msg;}
  //       $('#note').html(result);
  //        $('.input', '#contact') // выполняем очистку полей после отправки сообщения
  // .not(':button, :submit, :reset, :hidden')
  // .val('')			 
  //     }
  //   });
}
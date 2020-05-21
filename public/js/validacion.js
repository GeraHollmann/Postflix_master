let elFormulario = document.querySelector('.theForm');
let campoNombre = document.querySelector("input[name=first_name]");
let campoApellido = document.querySelector("input[name=last_name]");
let campoEmail = document.querySelector("input[name=email]");
let campoComment = document.querySelector("textarea[name=comment]");

campoNombre.onblur = function(){
if (this.value.length >=25) {
        alert('El campo nombre no puede tener mas de 25 letras');
      }
}

campoApellido.onblur = function(){
if (this.value.length >= 30) {
        alert('El campo apellido no puede tener mas de 30 letras');
      }
}

var regexmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

campoEmail.onblur = function(){
  if (this.value.trim() == '') {
    alert('El email no puede estar vacio');
  }else if (!regexmail.test(this.value)) {
    alert('El mail no tiene el formato correcto');
  }
}

campoComment.onblur = function(){
if (this.value.length >=300) {
        alert('El comentario no puede tener mas de 300 letras');
      }
}

elFormulario.onsubmit = function (event){
  if (campoNombre.value.trim() == ' ') {
    alert('El campo nombre es obligatorio');
    event.preventDefault();
  }
  if(campoApellido.value.trim() == ' ') {
    alert('El campo apellido es obligatorio');
    event.preventDefault();
  }
  if (campoEmail.value.trim() == ' ') {
    alert('El email es obligatorio');
    event.preventDefault();
  }
  if (campoComment.value.trim() == ' ') {
    alert('El comentario es obligatorio');
    event.preventDefault();
  }
  if (campoComment.value.trim() == ' ') {
    alert('El comentario no puede estar vacio');
    event.preventDefault();
  }
  if (campoComment.value.length <=10) {
      alert('El comentario debe tener minimo 10 letras');
      event.preventDefault();
  }

  if (campoNombre.value.trim() == ' ') {
    alert('El campo nombre no puede estar vacio');
    event.preventDefault();
  }
  if (campoNombre.value.length <=3) {
      alert('El campo nombre debe tener minimo 4 letras');
      event.preventDefault();
    }
  if (campoApellido.value.trim() == ' ') {
    alert('El campo apellido no puede estar vacio');
    event.preventDefault();
  }
  if (campoApellido.value.length <=3) {
      alert('El campo apellido debe tener minimo 4 letras');
      event.preventDefault();
    }


}

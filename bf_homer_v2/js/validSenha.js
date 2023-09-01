    function validSenha(){
    	var s = document.getElementById('pass').value;
    	var f = 0;

    	if ((s.length >= 6) && (s.length <= 7)){
    		f += 10;
    	} else if (s.length > 7){
    		f += 25;
    	}

    	if ((s.length >=7) && (s.match(/[a-z]+/))) {
    		f += 10;
    	}

    	if ((s.length >=8) && (s.match(/[A-Z]+/))) {
    		f += 20;
    	}

    	if ((s.length >=9) && (s.match(/[!@#$%¨&*()-=,.;´~?ªº°*"<>]/))) {
    		f += 25;
    	}

    	mostrarForca(f);
    }

    function mostrarForca(f){
    	if (f == 0){
    		document.getElementById('SenhaForca').innerHTML = '<span>Força da senha</span><br><div class="progress"><div class="determinate" style="width: 0%"></div></div>'
    	} else if (f < 30){
    		document.getElementById('SenhaForca').innerHTML = '<span>Força da senha</span><br><div class="progress"><div class="determinate red" style="width: 25%"></div></div>';
    	} else if ((f >= 30) && (f < 60)){
    		document.getElementById('SenhaForca').innerHTML = '<span>Força da senha</span><br><div class="progress"><div class="determinate yellow" style="width: 50%"></div></div>';
    	} else if ((f >= 50) && (f < 70)){
    		document.getElementById('SenhaForca').innerHTML = '<span>Força da senha</span><br><div class="progress"><div class="determinate green" style="width: 75%"></div></div>';
    	} else if ((f >= 70) && (f < 100)){
    		document.getElementById('SenhaForca').innerHTML = '<span>Força da senha</span><br><div class="progress"><div class="determinate black" style="width: 100%"></div></div>';
    	}
    }
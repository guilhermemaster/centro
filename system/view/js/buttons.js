// JavaScript Document
(function(){
	
	document.getElementById("button1").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='home.php' width='1000' height='600'></object>";
		
	};
	
	document.getElementById("button2").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='configuracoes.php' width='1000' height='600' ></object>";
		
	};

	document.getElementById("button3").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/cadastros/cadastros.php' width='1000' height='600' ></object>";
		
	};

	document.getElementById("button4").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/edit/edicao.php' width='1000' height='600' ></object>";
		
	};

	document.getElementById("button5").onclick=function(){
		var mainContent = document.getElementById("mainContent");
		mainContent.innerHTML="<object type='text/html' data='paginas/excluir/excluir.php' width='1000' height='600' ></object>";
		
	};
	
	
})();